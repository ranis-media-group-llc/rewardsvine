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
                        // set the api key and email to be validated
                        $key = 'PqxX53dayLwspoNTIrDFRYnfm2z0Q4Kh';
                        $email = urlencode($input['email_address']);

                        // use curl to make the request
                        $url = 'https://api-v4.bulkemailchecker.com/?key='.$key.'&email='.$email;
                        $ch = curl_init($url);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
                        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
                        $response1 = curl_exec($ch);
                        curl_close($ch);

                        // decode the json response
                        $json = json_decode($response1, true);

                        // if address is failed, alert the user they entered an invalid email
                        if($json['status'] == 'failed'){
                            $this->data['error'] = "You have entered an invalid email.";
                        }else {
                            $user = $this->users->get_details($input['email_address'], 'email_address');
                            if ($user) {
                                if ($this->bcrypt->check_password($input['password'], $user->password)) //if ($input['password']== $user->password)
                                {
                                    unset($user->password);
                                    $this->session->set_userdata('user', $user);
                                    if ($user->role == "Member") {
                                        redirect(base_url($this->config->item('auth_login_success')));
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
                $url = 'https://api-v4.bulkemailchecker.com/?key='.$key.'&email='.$email;
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
                curl_setopt($ch, CURLOPT_TIMEOUT, 15);
                $response = curl_exec($ch);
                curl_close($ch);

                // decode the json response
                $json = json_decode($response, true);

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
                    $input['role'] = "Member";
                    $input['points'] = 0;
                    $input['user_id'] = random_string('numeric', 6);

                    if ($pass1 != $pass2) {
                        $this->data['error'] = "Password didn't match.";
                    } else {
                        if ($this->users->register($input)) {
                            $user = $this->users->get_details($input['email_address'], 'email_address');
                            $this->session->set_userdata('user', $user);
                            redirect(base_url($this->config->item('auth_login_success')));
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
        $this->data['title'] = "RewardsVine - Forgot Password";
        $this->load->view('auth/forgot_password', $this->data);
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
