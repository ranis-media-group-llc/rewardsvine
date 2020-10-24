<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        //$this->auths->check(array("SuperAdmin", "Admin"));
    }

	public function index()
	{
        $this->data['title'] = "Dashboard";
        $this->load->view('admin/dashboard/index', $this->data);
        
	}
}
