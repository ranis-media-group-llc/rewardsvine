<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends MY_Controller {
    public function __construct ()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->data['title'] = 'RewardsVine - Offers';
		$this->load->view('members/offers/index',$this->data);
	}
}
