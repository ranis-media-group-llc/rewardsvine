<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gifts extends CI_Controller {
    public function __construct ()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->data['title'] = 'RewardsVine - Gifts';
		$this->load->view('members/gifts/index',$this->data);
	}
}
