<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveys extends MY_Controller {
    public function __construct ()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->data['title'] = 'RewardsVine - Surveys';
		$this->load->view('members/surveys/index',$this->data);
	}
}
