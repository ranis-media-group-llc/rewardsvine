<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referral extends MY_Controller {
    public function __construct ()
    {
        parent::__construct();
        $this->load->model('History_model', 'history');
        $this->load->model('General_model', 'general');
    }

	public function index()
	{
        if(isset($_SESSION['user'])){
            $id =  $_SESSION['user']->user_id;

            // get all referrals
            $get_referrals = array(
                'where' => array(
                    'fk_user_id' => $id
                ),
                'table' => 'rv_referrals',
                'select' => '*',
            );
            $this->data['referrals'] = $this->general->get_data_with_param($get_referrals);
        }
        $this->data['title'] = 'RewardsVine - Referral';
		$this->load->view('members/referral/index',$this->data);
	}
}
