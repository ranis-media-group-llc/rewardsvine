<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        $this->auths->check(array("Admin","SuperAdmin"));
    }

	public function index()
	{
        // End IP Validation
                
        // if(isset($_SESSION['user'])){
            // $data =  $_SESSION['user'];
            // $id = $data->email;
        // }
        if(isset($_SESSION['user'])){
            $data =  $_SESSION['user'];
            $id =  $data->user_id;
        }
        $this->data['history'] = $this->history->get_all_history();
        //$this->load->view('members//index',$this->data);
        
        //Returns User's name 
        $this->load->view('layout/admin/master', $this->data);
	}
}
