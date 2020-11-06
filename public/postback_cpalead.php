<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'db_config.php';

if(isset($_GET['subid']) && isset($_GET['payout'])){
    echo $_GET['payout'];
}
