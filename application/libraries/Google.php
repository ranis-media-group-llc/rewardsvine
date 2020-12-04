<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once FCPATH . 'vendor/autoload.php';

//require_once APPPATH .'third_party/google-api-client/google-api-php-client-2.8.3/src/aliases.php';

//require_once BASEPATH.'core/CodeIgniter.php';

Class Google
{
    protected $client;
    public function __construct(){

        $this->ci =& get_instance();
        $this->ci->load->config('google');
        $this->ci->load->library('session');
        $this->ci->load->helper('url');


        // Create Client Request to access Google API
        $this->client = new Google_Client();
        $this->client->setApplicationName($this->ci->config->item('application_name'));
        $this->client->setClientId($this->ci->config->item('client_id'));
        $this->client->setClientSecret($this->ci->config->item('client_secret'));
        $this->client->setRedirectUri($this->ci->config->item('redirect_uri'));
        $this->client->setDeveloperKey($this->ci->config->item('api_key'));
        $this->client->addScope('https://www.googleapis.com/auth/userinfo.email');
        $this->authenticate_();
    }

    public function authenticate_(){


        // Send Client Request
        //$objOAuthService = new Google_Service_Oauth2($client);

        // Add Access Token to Session
        if (isset($_GET['code'])) {
            $this->client->authenticate($_GET['code']);
            $_SESSION['access_token'] = $this->client->getAccessToken();
            header('Location: ' . filter_var($this->ci->config->item('redirect_uri'), FILTER_SANITIZE_URL));
        }

        // Set Access Token to make Request
        if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
            $this->client->setAccessToken($_SESSION['access_token']);
        }



    }

    public function setAccessToken()
    {
        $this->client->authenticate($_GET['code']);

        $accessToken = $this->client->getAccessToken();

        $this->client->setAccessToken($accessToken);

        if(isset($accessToken['refresh_token']))
        {
            $this->ci->session->set_userdata('refreshToken', $accessToken['refresh_token']);
        }
    }

    public function getLoginUrl()
    {
        return $this->client->createAuthUrl();
    }

    public function getUserInfo()
    {
        $service = new Google_Service_Oauth2($this->client);

        return $service->userinfo->get();
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('refreshToken');

        $accessToken = $this->client->getAccessToken();

        if($accessToken!=null)
        {
            $this->client->revokeToken($accessToken);
        }
    }


}