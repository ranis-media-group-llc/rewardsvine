<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
	
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
    public function delete()
    {
        $id = $_POST['id'];
        if($this->users->delete($id)){
            echo true;
        }
    }
}
