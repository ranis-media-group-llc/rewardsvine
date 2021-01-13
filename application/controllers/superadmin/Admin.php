<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

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
        $this->data['title'] = "Dashboard";
        $get_admin_users = array(
            'where' => array(
                'role' => 'Admin',
            )
        );
        $this->data['admins'] = $this->general->get_all_with_keys($get_admin_users,'rv_users');
        $this->load->view('superadmin/admins/index', $this->data);
    }

    public function add(){
        $input = $this->input->post();
        if ($input) {
            $email = urlencode($input['email_address']);
            // use curl to make the request
                $pass1 = $input['password'];
                $pass2 = $input['re_password'];
                $this->load->helper('string');
                $input['password'] = $this->bcrypt->hash_password($input['password']);
                unset($input['re_password']);
                unset($input['g-recaptcha-response']);
                $input['date_created'] = date("d-m-Y h:i A");
                $input['points'] = 0;
                $input['user_id'] = random_string('numeric', 6);
                $input['role'] = "Admin";

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
                        //$send_reset_pass_mail = mail_send($post);
                        $send_reset_pass_mail = "ok,";
                        if ($send_reset_pass_mail == "ok,") {
                            $user = $this->users->get_details($input['email_address'], 'email_address');

                            // add settings setup for this admin
                            $input_admin_settings = array();
                            $input_admin_settings['fk_user_id'] = $user->id;
                            $input_admin_settings['is_approval'] = 0;
                            $input_admin_settings['is_send_notif'] = 0;
                            $this->general->add($input_admin_settings,'rv_admin_settings');

                            // update user for email confirmation token
                            if ($this->general->update($input,$user->id,'rv_users')) {
                                redirect(base_url('superadmin/admin/'));
                            }
                        }else{
                            $this->data['error'] = "Can't send to your email.";
                        }
                    }
                }

        }
        $this->data['title'] = "Rv - Admins";
        $this->load->view('superadmin/admins/add', $this->data);
    }


    public function settings($id)
    {
        $input = $this->input->post();
        if ($input) {
            if ($this->general->update_with_key($input,$id,'rv_admin_settings','fk_user_id')) {
                redirect(base_url('superadmin/admin/'));
            }
        }else{
            $get_admin_settings = array(
                'where' => array(
                    'fk_user_id' => $id,
                ),
                'main_table' => 'rv_admin_settings',
                'select' => '*',
                'join' => array(
                    'table' => 'rv_users',
                    'statement' => 'rv_users.id=rv_admin_settings.fk_user_id',
                    'join_as' => 'left',
                ),
            );
            $this->data['admin_setting'] = $this->general->get_details_with_join($get_admin_settings);
        }
        $this->data['title'] = "Admin Settings";
        $this->load->view('superadmin/admins/settings', $this->data);
    }

    public function history($id)
    {
        $this->data['title'] = "Admin Settings";
        $this->data['admins'] = $this->general->get_details($id,'user_id','rv_admin_settings');
        $this->load->view('superadmin/admins/history_log', $this->data);
    }
}
