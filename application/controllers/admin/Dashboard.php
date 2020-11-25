<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        //$this->auths->check(array("SuperAdmin", "Admin"));
        $this->load->model('Users_model', 'users');
        $this->load->model('General_model', 'general');
    }

	public function index()
	{
        $this->data['title'] = "Dashboard";
        $this->data['users'] = $this->users->get_all();
        $this->data['messages'] = $this->general->get_row_count('rv_redeem','status',0);
        $this->load->view('admin/dashboard/index', $this->data);
        
	}
}
