<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        $this->auths->check(array("SuperAdmin"));
        $this->load->model('Users_model', 'users');
        $this->load->model('General_model', 'general');

        $this->load->helper('site');
        $this->load->config('settings');
    }

	public function index()
	{
        $this->data['users'] = $this->users->get_all();
        $this->data['title'] = "Dashboard";
        $this->load->view('superadmin/users/index', $this->data);
	}
    public function add(){
        $input = $this->input->post();
        if ($input) {
            $email = urlencode($input['email_address']);
            // use curl to make the request
            $check_email = email_checker($this->config->item('bulkemailchecker_api_key'),$email);
            if (array_key_exists('error', $check_email)) {
                $this->data['error'] = "An error occured on Email Checker: " . $check_email['error'];
            }else {
                $pass1 = $input['password'];
                $pass2 = $input['re_password'];
                $this->load->helper('string');
                $input['password'] = $this->bcrypt->hash_password($input['password']);
                unset($input['re_password']);
                unset($input['g-recaptcha-response']);
                $input['date_created'] = date("d-m-Y h:i A");
                $input['points'] = 0;
                $input['user_id'] = random_string('numeric', 6);
                $input['role'] = "Member";

                if ($pass1 != $pass2) {
                    $this->data['error'] = "Password didn't match.";
                } else {
                    if ($this->users->register($input)) {

                        $confirm_code_token = hash_code();
                        $input['confirm_token'] = $confirm_code_token;
                        $post = [
                            'test_email' => $input['email_address'],
                            'campaign_id' => $this->config->item('confirm_email_camp_id'),
                            'display_errors'   => 0,
                            'password_reset_link'   => $_SERVER['SERVER_NAME'].'/auth/confirm_email/?r='.$confirm_code_token.'&email='.$input['email_address'],
                        ];
                        $send_reset_pass_mail = mail_send($post);
                        if ($send_reset_pass_mail == "ok,") {
                            $user = $this->users->get_details($input['email_address'], 'email_address');
                            if ($this->general->update($input,$user->id,'rv_users')) {
                                redirect(base_url('superadmin/users/'));
                            }
                        }else{
                            $this->data['error'] = "Can't send to your email.";
                        }
                    }
                }
            }
        }
        $this->data['title'] = "Dashboard";
        $this->load->view('superadmin/users/add', $this->data);
    }
    public function delete()
    {
        $id = $_POST['id'];
        if($this->users->delete($id)){
            echo true;
        }
    }

    public function update_status()
    {
        $input = array();
        $id = $_POST['id'];
        $stat = $_POST['stat'];

        if($stat == 'ban'){
            $input['status'] = 1;
        }else if($stat == 'suspend'){
            $input['status'] = 3;
        }else if($stat == 'verify'){
            $input['status'] = 2;
        }else{
           echo 'error';
        }

        if ($this->general->update($input,$id,'rv_users')) {
            echo  "success";
        }
    }
}
