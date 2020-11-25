<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gifts extends MY_Controller {
    public function __construct ()
    {
        parent::__construct();
        $this->load->helper('site');
        $this->load->model('Users_model', 'users');
        $this->load->model('General_model', 'general');
    }

	public function index()
	{
        $this->data['title'] = 'RewardsVine - Gifts';
		$this->load->view('members/gifts/index',$this->data);
	}

	public function view($slug){
        $this->data['title'] = 'RewardsVine - Redeem';
        //print_r(gift_cards($slug));
        //print_r($this->data['slug']['name']);
       if(count(gift_cards($slug)) > 5){
            redirect(base_url('gifts/'));
        }else{
            $this->data['slug'] = gift_cards($slug);
        }
        //$this->data['gift_amount'] = $amount;
        $this->load->view('members/gifts/view',$this->data);

    }
	public function redeem(){
        $input = $this->input->post();
        if ($input) {
            $user_data = $this->users->get_details($_SESSION['user']->id,'id');
            //echo $user_data->points;
            //print_r($user_data);
            $points_redeem = explode("-",$input['redeem_amt']);
            unset($input['redeem_amt']);
           // echo count($points_redeem);
            //print_r($points_redeem);
            if(count($points_redeem) == 2){
                $input['redeem_amt'] = $points_redeem[0];
                $input['redeem_points'] = $points_redeem[1];
                $input['status'] = 0;
                $input['user_id'] = $_SESSION['user']->user_id;
                //echo 'were here';
                if($points_redeem[1] > $user_data->points){
                    echo 'points_error';
                }else{
                    if($this->general->add($input,"rv_redeem")){
                        echo "success";
                    }else{
                        echo "user_error";
                    }
                }
            }else{
                echo 'user_error';
            }

        }
    }
}
