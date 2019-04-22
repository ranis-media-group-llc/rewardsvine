<?php defined('BASEPATH') OR exit('No direct script access allowed');
  
$config['site_name'] = "Living Hope";
/* AUTHENTICATION REDIRECTS */

$config['auth_login_success'] = "admin/dashboard";
$config['auth_login'] = "auth/login"; //Redirect to this page after logout was initiated
$config['auth_denied'] = "auth/access-denied"; //Redirect to this page after logout was initiated