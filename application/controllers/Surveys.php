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

    public function view($survey)
    {
        $userid = $_SESSION['user']->user_id;
        $header_title = $survey_frame = "";
        if(isset($survey)){
            if($survey == 'theorem'){
                $header_title = 'TheoremReach';
                $survey_frame = "https://theoremreach.com/respondent_entry/direct?api_key=470417548628115e3f283a9c07aa&user_id=".$userid;
            }
        }else{
            redirect(base_url('offerwall/'));
        }

        $this->data['header_title'] = $header_title;
        $this->data['frame'] = $survey_frame;
        $this->data['title'] = 'RewardsVine - Offerwall';
        $this->load->view('members/surveys/view',$this->data);
    }
}
