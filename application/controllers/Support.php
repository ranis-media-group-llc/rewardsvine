<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends MY_Controller {
    public function __construct ()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->data['title'] = 'RewardsVine - Support';
		$this->load->view('members/support/index',$this->data);
	}
}
