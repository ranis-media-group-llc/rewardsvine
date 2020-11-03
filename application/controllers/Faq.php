<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends MY_Controller {
    public function __construct ()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->data['title'] = 'RewardsVine - FAQ';
		$this->load->view('members/faq/index',$this->data);
	}
}
