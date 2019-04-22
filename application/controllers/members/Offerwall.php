<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offerwall extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        if(!isset($_SESSION['user'])){
           redirect(base_url('login')); 
        }
    }

	public function index()
	{
        //$this->data['users'] = $this->home->get_all();
		//$this->load->view('members//index',$this->data);
        
        // $host = "https://api.adscendmedia.com/v1/publisher/112515/offers.json";
        // $username = "112515";
        // $password = "1502840072";
        // $process = curl_init($host);
        // curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
        // curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        // $return = curl_exec($process);
        // curl_close($process);
        
        // $offerwall = json_decode($return,true);
        
        //$this->data['offerswall'] = $offerwall;
        
        //$this->data['offerswalls'] = $return;
        $this->data['offerwalls'] = $this->offerwall->get_all_active();
        $this->load->view('layout/members/master', $this->data);
	}
    public function view($id=null)
	{
        $this->data['users_info'] = $_SESSION['user'];
        $this->data['offerwall_details'] = $this->offerwall->get_details_by_slug($id);
        
        $this->load->view('layout/members/master', $this->data);
	}
     public function details()
	{
        $id = $_POST['id'];
        $offerwall_details = $this->offerwall->get_details_by_slug($id);
        echo '<h4 class="custom-modal-title purple">';echo $offerwall_details->name; echo'</h4>
                <div class="custom-modal-text">
                    <div class="table-detail">
                        <img src="';echo $offerwall_details->image_path; echo '" alt="img" class="img-circle thumb-lg m-r-15" />
                    </div>
                    <strong>';
                    echo $offerwall_details->name;
                    echo'</strong><br>
                    <small>';echo $offerwall_details->description; echo'</small>
                    </div>
                    
                    <div class="modal-body">
                        <button onclick="location.href=\'offerwall_view/'; echo $offerwall_details->id; echo'\';" type="button" class="btn btn-purple waves-effect waves-light">
                            EARN POINTS
                        </button>
                    </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-purple waves-effect" onclick="Custombox.close();">Close</button>
            </div>';
   
	}
}
