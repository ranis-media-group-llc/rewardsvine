<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MY_Controller {
	
	public function __construct ()
    {
        parent::__construct();
        $this->auths->check(array("SuperAdmin","Admin"));
    }

	public function index()
	{
        $input = $this->input->post();
        if($input){
            foreach($input as $key => $value) {
                $input[$key] = html_entity_decode($value);
            }    
            $this->settings_model->update($input);
        }
        $this->data['setting'] = $this->settings_model->get_all_admin();
        $this->load->view('layout/admin/master', $this->data);
	}
    public function add()
	{
        $input = $this->input->post();
        if($input){
            $this->settings_model->add($input);
            redirect(base_url('/admin/settings'));
        }
        $this->load->view('layout/admin/master', $this->data);
	}
    public function edit($id)
	{
        $this->data['setting'] = $this->settings_model->get_details($id);
       
        $input = $this->input->post();
        if($input){
            $input['id']=$id;
            $this->settings_model->edit($input);
            redirect(base_url('/admin/settings'));
        }
        $this->load->view('layout/admin/master', $this->data);
	}
    
}
