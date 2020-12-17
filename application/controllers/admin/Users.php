<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        //$this->auths->check(array("SuperAdmin", "Admin"));
        $this->load->model('Users_model', 'users');
        $this->load->model('General_model', 'general');
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

    public function update_status()
    {
        $input = array();
        $id = $_POST['id'];
        $stat = $_POST['stat'];

        if($stat == 'de'){
            $input['status'] = 1;
        }else if($stat == 'reject'){
            $input['status'] = 2;
        }else if($stat == 'complete'){
            $input['status'] = 3;
        }else{
            $input['status'] = 4;
        }
        if ($this->general->update($input,$id,'rv_users')) {
            echo  "success";
        }
    }
}
