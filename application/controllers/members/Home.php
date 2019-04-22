<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        $this->auths->check(array("Member"));
    }

	public function index()
	{
        // End IP Validation
                
        // if(isset($_SESSION['user'])){
            // $data =  $_SESSION['user'];
            // $id = $data->email;
        // }
        
        // $this->data['users'] = $this->users->get_details($id);
        //$this->load->view('members//index',$this->data);
        
        //Returns User's name 
        $this->load->view('layout/members/master', $this->data);
	}
}
