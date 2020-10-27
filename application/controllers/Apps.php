<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {
    public function __construct ()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->data['title'] = 'RewardsVine - Apps';
		$this->load->view('members/apps/index',$this->data);
	}
}
