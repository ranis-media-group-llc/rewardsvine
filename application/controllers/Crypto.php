<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crypto extends CI_Controller {
    public function __construct ()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->data['title'] = 'RewardsVine - Cryptocurrency';
		$this->load->view('members/crypto/index',$this->data);
	}
}
