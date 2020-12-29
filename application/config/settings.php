<?php defined('BASEPATH') OR exit('No direct script access allowed');
  
$config['site_name'] = "Living Hope";
/* AUTHENTICATION REDIRECTS */

$config['auth_login_success'] = "admin/dashboard";
$config['auth_login'] = "auth/login"; //Redirect to this page after logout was initiated
$config['auth_denied'] = "auth/access-denied"; //Redirect to this page after logout was initiated

$config['forgot_pass_camp_id'] = 10;
$config['confirm_email_camp_id'] = 11;

$config['bulkemailchecker_api_key'] = 'b6cE7prk0q2sBjXSfneyKZwgYLFANdH8';