<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referral extends CI_Controller {
    public function __construct ()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->data['title'] = 'RewardsVine - Referral';
		$this->load->view('members/referral/index',$this->data);
	}
}
