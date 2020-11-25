<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends MY_Controller {

    public function __construct ()
    {
        parent::__construct();
        //$this->auths->check(array("Admin","SuperAdmin"));
        $this->load->model('General_model', 'general');
    }

    public function index()
    {

        $this->data['title'] = "Admin -  Messages";
        $this->data['messages'] = $this->general->get_all('rv_redeem');

        //Returns User's name
        $this->load->view('admin/messages/index', $this->data);
    }
}
