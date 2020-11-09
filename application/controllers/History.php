<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends MY_Controller {
    public function __construct ()
    {
        parent::__construct();
        $this->load->model('History_model', 'history');
    }

	public function index()
	{
        if(isset($_SESSION['user'])){
            $id =  $_SESSION['user']->user_id;
            $this->data['history'] = $this->history->get_all($id);
        }
        $this->data['title'] = 'RewardsVine - History';
		$this->load->view('members/history/index',$this->data);
	}
}
