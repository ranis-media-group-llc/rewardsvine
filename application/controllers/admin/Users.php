<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        //$this->auths->check(array("SuperAdmin", "Admin"));
        $this->load->model('Users_model', 'users');
    }

	public function index()
	{
        $this->data['users'] = $this->users->get_all();
        $this->data['title'] = "Dashboard";
        $this->load->view('admin/users/index', $this->data);
	}
    public function delete()
    {
        $id = $_POST['id'];
        if($this->users->delete($id)){
            echo true;
        }
    }
}
