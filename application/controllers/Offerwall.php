<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offerwall extends MY_Controller {
    public function __construct ()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->data['title'] = 'RewardsVine - Offerwall';
		$this->load->view('members/offerwall/index',$this->data);
	}

    public function view($offerwall)
    {
        $header_title = $offerwall_frame = "";
        if(isset($offerwall)){
            if($offerwall == 'adscend'){
                $header_title = 'Adscend Media';
                $offerwall_frame = "https://asmwall.com/adwall/publisher/112515/profile/13016?subid1=".$_SESSION['user']->user_id;
            }
            if($offerwall == 'cpa_lead') {
                $header_title = 'CPA Lead';
                $offerwall_frame = "https://viral782.com/list/" . $_SESSION['user']->user_id;
            }
        }else{
            redirect(base_url('offerwall/'));
        }

        $this->data['header_title'] = $header_title;
        $this->data['frame'] = $offerwall_frame;
        $this->data['title'] = 'RewardsVine - Offerwall';
        $this->load->view('members/offerwall/view',$this->data);
    }
}
