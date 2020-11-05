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
        $userid = $_SESSION['user']->user_id;
        $header_title = $offerwall_frame = "";
        if(isset($offerwall)){
            if($offerwall == 'adscend'){
                $header_title = 'Adscend Media';
                $offerwall_frame = "https://asmwall.com/adwall/publisher/112515/profile/13016?subid1=".$userid;
            }
            if($offerwall == 'cpa_lead') {
                $header_title = 'CPA Lead';
                $offerwall_frame = "https://viral782.com/list/" . $userid;
            }
            if($offerwall == 'offertoro') {
                $header_title = 'Offertoro';
                $offerwall_frame = "https://www.offertoro.com/ifr/show/20063/".$userid."/7645";
            }
            if($offerwall == 'adgem') {
                $header_title = 'Ad Gem';
                $offerwall_frame = "https://api.adgem.com/v1/wall?appid=539&playerid=".$userid." ";
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
