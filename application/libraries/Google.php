<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once FCPATH . 'vendor/autoload.php';

//require_once APPPATH .'third_party/google-api-client/google-api-php-client-2.8.3/src/aliases.php';

//require_once BASEPATH.'core/CodeIgniter.php';

Class Google
{
    public function __construct(){

        $this->ci =& get_instance();

        $this->ci->load->config('google');
        $this->ci->load->library('session');
        $this->ci->load->helper('url');

        $this->authenticate_();
    }

    public function authenticate_(){
        // Create Client Request to access Google API
        $client = new Google_Client();
        $client->setApplicationName($this->ci->config->item('application_name'));
        $client->setClientId($this->ci->config->item('client_id'));
        $client->setClientSecret($this->ci->config->item('client_secret'));
        $client->setRedirectUri($this->ci->config->item('redirect_uri'));
        $client->setDeveloperKey($this->ci->config->item('api_key'));
        $client->addScope("");

        // Send Client Request
        //$objOAuthService = new Google_Service_Oauth2($client);

        // Add Access Token to Session
        if (isset($_GET['code'])) {
            $client->authenticate($_GET['code']);
            $_SESSION['access_token'] = $client->getAccessToken();
            header('Location: ' . filter_var($this->config->item('redirect_uri'), FILTER_SANITIZE_URL));
        }

        // Set Access Token to make Request
        if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
            $client->setAccessToken($_SESSION['access_token']);
        }

    }

}