<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        $this->auths->check(array("SuperAdmin"));
        $this->load->model('Users_model', 'users');
        $this->load->model('General_model', 'general');
        if (!class_exists('bcrypt')) { $this->load->library('bcrypt'); }
    }

	public function index()
	{
        //echo $this->bcrypt->hash_password('Delano661!');
        $this->data['title'] = "Dashboard";
        $this->data['users'] = $this->users->get_all();
        $this->data['messages'] = $this->general->get_row_count('rv_redeem','status',0);
        $this->load->view('superadmin/dashboard/index', $this->data);
	}
}
