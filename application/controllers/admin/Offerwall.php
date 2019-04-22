<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offerwall extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        $this->auths->check(array("SuperAdmin", "Admin"));
    }

	public function index()
	{
        $this->data['offerwalls'] = $this->offerwall->get_all();
        $this->load->view('layout/admin/master', $this->data);
	}
    public function download($id=null)
	{
        $input = $this->input->post();
        if($input){
            $this->data['offerwall_details'] = $this->offerwall->get_details($id);
            $host = $offerwall_details->api_host;
            $username = $offerwall_details->publisher_id;
            $password = $offerwall_details->api_key_offer;
            $process = curl_init($host);
            curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
            curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
            $return = curl_exec($process);
            curl_close($process);
        }
        $this->data['offerwall_details'] = $this->offerwall->get_details($id);
        $this->load->view('layout/admin/master', $this->data);
	}
    public function retrieve_offers()
	{
        $id = $_POST['id'];
        
        $offerwall_details= $this->offerwall->get_details($id);
        $host = $offerwall_details->api_host;
        $username = $offerwall_details->publisher_id;
        $password = $offerwall_details->api_key_offer;
        $process = curl_init($host);
        curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        $return = curl_exec($process);
        curl_close($process); 
        
        $all_offers = json_decode($return,true);
       //echo count($all_offers['offers']);
        eval($offerwall_details->api_naming); 
    }
    public function view()
	{
        $this->load->view('layout/admin/master', $this->data);
	}
    public function add()
	{
        $input = $this->input->post();
        if($input){
            $this->load->library('upload');
            
            $config['upload_path'] = FCPATH . 'uploads';
            $config['overwrite'] = true;
            $config['encrypt_name'] = FALSE;
            $config['allowed_types'] = '*';
            
            $this->upload->initialize($config);
                
            if (!$this->upload->do_upload('image_path')){
                //$this->data['file'] = $this->upload->display_errors();
                $this->data['error'] = $this->upload->display_errors();
            }
            else{
                $upload_data = $this->upload->data();
                //$this->files->upload($upload_data);
                $input['image_path'] = '/uploads/'.$upload_data['file_name'];
            }
            
            $this->offerwall->add($input);
            redirect(base_url('/admin/offerwall'));
        }
        $this->load->view('layout/admin/master', $this->data);
	}
    public function edit($id)
	{
        $this->auths->check(array("SuperAdmin"));
        $this->data['offerwalls'] = $this->offerwall->get_details($id);
       
        $input = $this->input->post();
        if($input){
            
            $this->load->library('upload');
            
            $config['upload_path'] = FCPATH . 'uploads';
            $config['overwrite'] = true;
            $config['encrypt_name'] = FALSE;
            $config['allowed_types'] = '*';
            
            $this->upload->initialize($config);
                
            if (!$this->upload->do_upload('image_path')){
                //$this->data['file'] = $this->upload->display_errors();
                $this->data['error'] = $this->upload->display_errors();
            }
            else{
                $upload_data = $this->upload->data();
                //$this->files->upload($upload_data);
                $input['image_path'] = '/uploads/'.$upload_data['file_name'];
            }
            
            $input['api_naming'] = html_entity_decode($input['api_naming']);
            $this->offerwall->update($input, $id);
            redirect(base_url('/admin/offerwall'));
        }
        $this->load->view('layout/admin/master', $this->data);
	}
    public function delete()
    {
        $id = $_POST['id'];
        if($this->offerwall->delete($id)){
            echo true;
        }
    }
    public function deleteall()
    {
        if($this->offers->deleteall()){
            echo true;
        }
    }
}
