<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logs extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        //$this->auths->check(array("Admin","SuperAdmin"));
        $this->load->model('General_model', 'general');
    }

	public function index()
	{
        $get_logs = array(
            'main_table' => 'rv_users_login_history',
            'select' => '*',
            'join' => array(
                'table' => 'rv_users',
                'statement' => 'rv_users.id=rv_users_login_history.fk_user_id',
                'join_as' => 'left',
            ),
        );
        $this->data['title'] = "Admin -  User Logs";
        $this->data['history'] = $this->general->get_details_with_join($get_logs);
        //$this->load->view('members//index',$this->data);
        
        //Returns User's name 
        $this->load->view('admin/logs/index', $this->data);
	}
}
