<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        $this->auths->check(array("SuperAdmin", "Admin"));
    }

	public function index()
	{
        
        
        $this->data['users'] = $this->home->get_all();
        $this->load->view('layout/admin/master', $this->data);
        
	}
}
