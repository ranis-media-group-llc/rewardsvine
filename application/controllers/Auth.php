<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        // Required Libraries
        if (!class_exists('bcrypt')) { $this->load->library('bcrypt'); }
        if (!class_exists('session')) { $this->load->library('session'); }
        
        
        // Required Configs
        $this->config->load('auth');
        $this->load->model('Users_model', 'users');
    }

    public function login($error = FALSE)
	{
        $ip = $_SERVER['REMOTE_ADDR'];
        $input = $this->input->post();
        if($input){
//            $secretKey = "6LcZ0pMUAAAAAJd_SqRMYon1lRXMkCCCwQfpZ1v4";
//            $captcha=$_POST['g-recaptcha-response'];
//
//                $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
//                $response = file_get_contents($url);
//                $responseKeys = json_decode($response,true);
//                // should return JSON with success as true
//                if(!$responseKeys["success"]) {
                    $user = $this->users->get_details($input['email_address'],'email_address');
                    if($user){
                       if ($this->bcrypt->check_password($input['password'], $user->password))
                        //if ($input['password']== $user->password)
                        {
                            unset($user->password);
                            $this->session->set_userdata('user',$user);
                            
                           if($user->role == "Member"){
                                redirect(base_url($this->config->item('auth_login_success')));    
                            } else {
                                redirect(base_url($this->config->item('auth_login_admin'))); 
                            }
                            exit;
                        }
                        else{
                            $this->data['error'] = "Invalid Username and/or Password.";
                        }
                    }else{
                         $this->data['error'] = "Email Address don't exist.";
                    }
//                } else {
//                    $this->data['error'] = "Captcha Invalid.";
//                }
                
         }
        $this->load->view('auth/index', $this->data);
        
	}
    public function signup($error = FALSE)
	{
        $input = $this->input->post();
        if($input){
//            $secretKey = "6LcZ0pMUAAAAAJd_SqRMYon1lRXMkCCCwQfpZ1v4";
//            $captcha=$_POST['g-recaptcha-response'];
//            $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
//            $response = file_get_contents($url);
//            $responseKeys = json_decode($response,true);
//
//            if($responseKeys["success"]) {
                $pass1 =   $input['password']; 
                $pass2 =   $input['re_password'];
                
                $this->load->helper('string');
                //$input['user_id'] = random_string('numeric',6);
                $input['password'] = $this->bcrypt->hash_password($input['password']);
                unset($input['re_password']);
                $input['date_created'] = date("d-m-Y h:i A");
                $input['role'] = "Member";
                $input['points']=0;
                $input['user_id'] = random_string('numeric',6);
                    
                if($pass1 != $pass2){
                   $this->data['error'] = "Password didn't match."; 
                }else{
                    if($this->users->register($input)){
                        $user = $this->users->get_details($input['email_address'],'email_address');
                        $this->session->set_userdata('user',$user);
                        redirect(base_url($this->config->item('auth_login')));
                    }
                }
//            }else{
//                $this->data['error'] = "Captcha Invalid.";
//            }

        }
        $this->load->view('auth/signup', $this->data);
        
	}
    
    public function logout()
    {
        $this->session->sess_destroy();
		redirect(base_url($this->config->item('auth_login')));
    }
    
}
