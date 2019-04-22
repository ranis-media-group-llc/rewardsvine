<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        $this->auths->check(array("SuperAdmin", "Admin"));
    }

	public function index()
	{
        // $host = "https://api.adscendmedia.com/v1/publisher/112515/offers.json";
        // $username = "112515";
        // $password = "1502840072";
        // $process = curl_init($host);
        // curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
        // curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        // $return = curl_exec($process);
        // curl_close($process);
        
        
        // $all_offers = json_decode($return,true);
        // echo count($all_offers['offers']);
        // for($x=0;$x<count($all_offers['offers']);$x++){
            // $country_urls = $all_offers['offers'][$x]['countries'];
            // for($z=0;$z<count($all_offers['offers'][$x]['countries']);$z++){
               // echo $country_urls[$z];
            // }
        // }
        
        // $host = "https://cpalead.com/dashboard/reports/campaign_json.php?id=904862";
        // $username = "";
        // $password = "";
        // $process = curl_init($host);
        // curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
        // curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        // $return = curl_exec($process);
        // curl_close($process);
        
        //$this->data['offerwall'] = json_decode($return,true);
        
        
        //$this->data['offerwalls'] = $offerwall;
        $this->data['offers'] = $this->offers->get_all();
        $this->load->view('layout/admin/master', $this->data);
	}
    public function edit($id)
	{
        $this->auths->check(array("Admin"));
        $this->data['offers'] = $this->offers->get_details($id);
       
        $input = $this->input->post();
        if($input){
            $this->offers->update($input, $id);
            redirect(base_url('/admin/offers'));
        }
        $this->load->view('layout/admin/master', $this->data);
	}
    public function delete()
    {
        $id = $_POST['id'];
        if($this->offers->delete($id)){
            echo true;
        }
    }
}
