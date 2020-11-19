<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        //$this->auths->check(array("SuperAdmin", "Admin"));
        $this->load->model('Users_model', 'users');
    }

	public function index()
	{
        $this->data['title'] = "Dashboard";
        $this->data['users'] = $this->users->get_all();
        $this->load->view('admin/dashboard/index', $this->data);
        
	}
}
