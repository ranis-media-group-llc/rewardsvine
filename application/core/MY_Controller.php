<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	protected $data = array();
	protected $settings = array();
    protected $user_info = array();
    
	function __construct()
	{
		parent::__construct();
        //date_default_timezone_set($this->config->item('time_reference'));
        $uri = uri_string()==NULL? '/':uri_string();

        define('DS','/');
        define('ASSETS_PATH', base_url() . 'assets' . DS);
        define('DIRECTORY', rtrim($this->router->fetch_directory(),'/'));
        define('CONTROLLER', $this->router->fetch_class());
        define('METHOD', $this->router->fetch_method());
        $this->data['users_data'] = $this->users->get_details($_SESSION['user']->user_id,'user_id');
        if(isset($_SESSION['user'])){
            $data =  $_SESSION['user'];
            $id = $data->email_address;
        }else{
            redirect(base_url('auth/login'));
        }

	}
}