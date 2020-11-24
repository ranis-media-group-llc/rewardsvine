<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gifts extends MY_Controller {
    public function __construct ()
    {
        parent::__construct();
    }

	public function index()
	{
	    $this->load->helper('site');
        $this->data['title'] = 'RewardsVine - Gifts';
		$this->load->view('members/gifts/index',$this->data);
	}

	public function view($slug){
        $this->data['title'] = 'RewardsVine - Redeem';
        $this->data['slug'] = strtoupper($slug);

        $amount= array();
        if($slug == "itunes"){
            $amount= array('5','10','15');
        }

        $this->data['gift_amount'] = $amount;
        $this->load->view('members/gifts/view',$this->data);

    }
	public function redeem(){

    }
}
