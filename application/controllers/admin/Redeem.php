<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redeem extends MY_Controller {

    public function __construct ()
    {
        parent::__construct();
        //$this->auths->check(array("Admin","SuperAdmin"));
        $this->load->model('General_model', 'general');
        $admin_settings = $this->general_model->get_details($_SESSION['user']->id,'fk_user_id','rv_admin_settings');
        if($admin_settings->is_approval == 0) {
            redirect(base_url('admin/dashboard'));
        }
    }

    public function index()
    {
        $this->data['title'] = "Admin -  Messages";
        $this->data['messages'] = $this->general->get_all('rv_redeem');

        //Returns User's name
        $this->load->view('admin/redeem/index', $this->data);
    }


    public function redeem_status()
    {
        $input = array();
        $id = $_POST['id'];
        $stat = $_POST['stat'];

        if($stat == 'accept'){
            $input['status'] = 1;
        }else if($stat == 'reject'){
            $input['status'] = 2;
        }else if($stat == 'complete'){
            $input['status'] = 3;
        }else{
            $input['status'] = 0;
        }
        $input['action_taken_by'] = $_SESSION['user']->id;
        if ($this->general->update($input,$id,'rv_redeem')) {
            echo  "success";
        }
    }

}
