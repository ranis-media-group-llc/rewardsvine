<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {
    public function __construct ()
    {
        parent::__construct();
        $this->load->model('General_model', 'general');
    }

	public function index()
	{
        $id = $_SESSION['user']->id;
        $get_profile = array(
            'where' => array(
                'id' => $id,
            ),
            'table' => 'rv_users',
            'select' => 'id,fullname,country',
        );
        $this->data['profile']  = $this->general->get_data_with_param($get_profile,False);
        $this->data['title'] = 'RewardsVine - Profile';
		$this->load->view('members/profile/index',$this->data);
	}

    public function password()
    {
        $input = $this->input->post();
        if ($input) {
        }
        $this->data['title'] = 'RewardsVine - Reset Password';
        $this->load->view('members/profile/password',$this->data);
    }

    public function edit()
    {
        $id = $_SESSION['user']->id;
        $get_profile = array(
            'where' => array(
                'id' => $id,
            ),
            'table' => 'rv_users',
            'select' => 'id,fullname,country',
        );
        $this->data['profile']  = $this->general->get_data_with_param($get_profile,False);

        $input = $this->input->post();
        if($input){

        }
        $this->data['title'] = 'RewardsVine - Edit My Profile';
        $this->load->view('members/profile/edit',$this->data);
    }
}
