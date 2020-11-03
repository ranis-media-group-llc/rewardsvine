<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends MY_Controller {
    public function __construct ()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->data['title'] = 'RewardsVine - Videos';
		$this->load->view('members/videos/index',$this->data);
	}
}
