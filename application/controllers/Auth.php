<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        // Required Libraries
        if (!class_exists('bcrypt')) { $this->load->library('bcrypt'); }
        if (!class_exists('session')) { $this->load->library('session'); }
        
        
        // Required Configs
        $this->config->load('auth');
        $this->load->model('Users_model', 'users');
       // $this->load->library('Google');
        $this->load->helper('site');
        $this->load->model('General_model', 'general');
        $this->load->config('settings');
    }

    public function login($error = FALSE)
	{
        // Redirect to profile page if the user already logged in
        $ip = $_SERVER['REMOTE_ADDR'];
        $input = $this->input->post();
        if($input){
            $secretKey = "6LcZ0pMUAAAAAJd_SqRMYon1lRXMkCCCwQfpZ1v4";
            $captcha=$input['g-recaptcha-response'];

                $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
                $response = file_get_contents($url);
                $responseKeys = json_decode($response,true);
                // should return JSON with success as true

                //print_r($responseKeys);
                if($responseKeys["success"]) {
                    //if (array_key_exists('success', $responseKeys)) {
                            $user = $this->users->get_details($input['email_address'], 'email_address');
                            if ($user) {
                                if ($this->bcrypt->check_password($input['password'], $user->password)) //if ($input['password']== $user->password)
                                {
                                    if ($user->role == "Member") {
                                        if($user->status == 0){
                                            $this->session->set_flashdata('reset_link_sent', 'Confirm your email first in order to use our app. It has been sent to your email, check it on Primary or Promotions.');
                                            redirect(base_url('auth/login'));
                                        }else{
                                            unset($user->password);
                                            $this->session->set_userdata('user', $user);
                                            redirect(base_url($this->config->item('auth_login_success')));
                                        }
                                    } else {
                                        redirect(base_url($this->config->item('auth_login_admin')));
                                    }
                                    exit;
                                } else {
                                    $this->data['error'] = "Invalid Username and/or Password.";
                                }
                            } else {
                                $this->data['error'] = "Email Address don't exist.";
                            }
                    } else {
                        $this->data['error'] = "Captcha Invalid.";
                    }
        }  // Google authentication url
        //$this->data['loginURL'] = $this->google->getLoginUrl();
        $this->data['title'] = "RewardsVine - Login";
        $this->load->view('auth/index', $this->data);
        
	}

	public function google_login(){
        $data = $_POST['data'];

        $user = $this->users->get_details($data['email_address'], 'email_address');
        if ($user) {
            $this->session->set_userdata('user', $user);
            echo $user->role;
        }else{
            $input = array();
            $input['date_created'] = date("d-m-Y h:i A");
            $input['role'] = "Member";
            $input['points'] = 0;
            $input['user_id'] = random_string('numeric', 6);
            $input['email_address'] = $data['email_address'];
            $input['fullname'] = $data['fullname'];
            $input['oauth_provider'] = 'Google';
            $input['is_email_verified'] = 0;
            if ($this->users->register($input)) {
                $user1 = $this->users->get_details($input['email_address'], 'email_address');
                $this->session->set_userdata('user', $user1);
                echo $user1->role;
                //redirect(base_url($this->config->item('auth_login')));
            }else{
                echo "error";
            }
            //print_r($data);
        }
    }

    public function signup($error = FALSE)
	{
        $input = $this->input->post();
        if($input){
            $secretKey = "6LcZ0pMUAAAAAJd_SqRMYon1lRXMkCCCwQfpZ1v4";
            $captcha=$_POST['g-recaptcha-response'];
            $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
            $response = file_get_contents($url);
            $responseKeys = json_decode($response,true);

            if($responseKeys["success"]) {
                $key = 'PqxX53dayLwspoNTIrDFRYnfm2z0Q4Kh';
                $email = urlencode($input['email_address']);

                // use curl to make the request
                $url2 = 'https://api-v4.bulkemailchecker.com/?key='.$key.'&email='.$email;
                $ch = curl_init($url2);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
                curl_setopt($ch, CURLOPT_TIMEOUT, 15);
                $response = curl_exec($ch);
                curl_close($ch);


                // decode the json response
                $json = json_decode($response, true);
                print_r($json);
                if($json['status'] == 'failed'){
                    $this->data['error'] = "You have entered an invalid email.";
                }else {
                    $pass1 = $input['password'];
                    $pass2 = $input['re_password'];
                    $this->load->helper('string');
                    //$input['user_id'] = random_string('numeric',6);
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
                            //$user = $this->users->get_details($input['email_address'], 'email_address');
                            //$this->session->set_userdata('user', $user);
                            //redirect(base_url($this->config->item('auth_login_success')));
                            $reset_code_token = hash_code();
                            $input['confirm_token'] = $reset_code_token;
                            // set post fields
                            // hash_code - password reset token for each reset
                            $post = [
                                'test_email' => $input['email_address'],
                                'campaign_id' => $this->config->item('confirm_email_camp_id'),
                                'display_errors'   => 0,
                                'password_reset_link'   => $_SERVER['SERVER_NAME'].'/auth/confirm_email/?r='.$reset_code_token.'&email='.$input['email_address'],
                            ];
                            $send_reset_pass_mail = mail_send($post);
                            // do anything you want with your response
                            // Further processing ...
                            if ($send_reset_pass_mail == "ok,") {
                                $user = $this->users->get_details($input['email_address'], 'email_address');
                                if ($this->general->update($input,$user->id,'rv_users')) {
                                    $this->session->set_flashdata('reset_link_sent', 'Email confirmation has been sent to your email. Check it on Primary or Promotions.');
                                    redirect(base_url('auth/login'));
                                }
                            }
                        }
                    }
                }
            }else{
                $this->data['error'] = "Captcha Invalid.";
            }

        }
        $this->data['title'] = "RewardsVine - SignUp";
        $this->load->view('auth/signup', $this->data);
	}

    public function forgot_password()
    {
        $input = $this->input->post();
        if($input){
            $user = $this->users->get_details($input['email_address'], 'email_address');
            if ($user) {
                $reset_code_token = hash_code();
                $input['reset_token'] = $reset_code_token;
                // set post fields
                // hash_code - password reset token for each reset
                $post = [
                    'test_email' => $input['email_address'],
                    'campaign_id' => $this->config->item('forgot_pass_camp_id'),
                    'display_errors'   => 0,
                    'password_reset_link'   => $_SERVER['SERVER_NAME'].'/auth/reset_password/?r='.$reset_code_token.'&email='.$input['email_address'],
                ];
                $send_reset_pass_mail = mail_send($post);
                // do anything you want with your response
                // Further processing ...
                if ($send_reset_pass_mail == "ok,") {
                    unset($input['email_address']);
                    if ($this->general->update($input,$user->id,'rv_users')) {
                        $this->session->set_flashdata('reset_link_sent', 'Password Reset has been sent to your email!');
                        redirect(base_url('auth/login'));
                    }
                } else {
                    $this->data['error'] = "Email didn't goes well. Contact RewardsVine Supprot.";
                }
            }else{
                $this->data['error'] = "Email doesn't exist!";
            }
        }
        $this->data['title'] = "RewardsVine - Forgot Password";
        $this->load->view('auth/forgot_password', $this->data);
    }

    public function reset_password()
    {
        $input = $this->input->post();
        if($input){
            if($input['password'] == $input['re_password']){
                unset($input['re_password']);
                $input['password'] = $this->bcrypt->hash_password($input['password']);
                $input['reset_token'] = '';
                $input['reset_pass_datetime'] = date('Y-m-d h:i A');
                if ($this->general->update($input,$input['id'],'rv_users')) {
                    $this->session->set_flashdata('reset_link_sent', 'Password Successfully Changed.');
                    redirect(base_url('auth/login'));
                }
            }else{
                $this->data['user'] = $input['id'];
                $this->data['error'] = "Password didn't match!";
            }
        }else{
            $user = $this->users->get_details($_GET['email'], 'email_address');
            if ($user) {
                if($this->users->get_details($_GET['r'], 'reset_token')){
                    $this->data['user'] = $user->id;
                }else{
                    $this->session->set_flashdata('reset_link_sent', 'Password Reset token has been expired!');
                    redirect(base_url('auth/login'));
                }
            }else{
                redirect(base_url('auth/login'));
            }
        }
        $this->data['title'] = "RewardsVine - Password Reset";
        $this->load->view('auth/reset_password', $this->data);
    }

    public function confirm_email()
    {
        //echo $_GET['r'];
        $user = $this->users->get_details($_GET['email'], 'email_address');
        if ($user) {
            $input = array();
            if($this->users->get_details($_GET['r'], 'confirm_token')){
                $input['status'] = 2;
                $input['confirm_token'] = '';
                $input['confirm_email_datetime'] = date('Y-m-d h:i A');
                if ($this->general->update($input,$user->id,'rv_users')) {
                    $this->session->set_flashdata('reset_link_sent', 'Email Successfully Confirmed!');
                    redirect(base_url('auth/login'));
                }

            }else{
                echo 'Something went wrong. Contact RewardsVine support.';
            }
        }else{
            echo 'Email Address doesnt exist';
        }
    }
    public function logout()
    {
        // Reset OAuth access token
        //$this->google->revokeToken();

        // Remove token and user data from the session
        //$this->session->unset_userdata('loggedIn');
        //$this->session->unset_userdata('userData');
        $this->session->sess_destroy();
		redirect(base_url('auth/login'));
    }
    
}
