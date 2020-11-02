<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offerwall extends CI_Controller {
    public function __construct ()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->data['title'] = 'RewardsVine - Offerwall';
		$this->load->view('members/offerwall/index',$this->data);
	}

    public function view()
    {
        $this->data['title'] = 'RewardsVine - Offerwall';
        $this->load->view('members/offerwall/view',$this->data);
    }
}
