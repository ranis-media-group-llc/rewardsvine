<?php

require_once 'db_config.php';

if(isset($_GET['user_id']) && isset($_GET['amount'])){
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM rv_users where user_id='$user_id'";
    $result = $mysqli -> query($sql);
    $row = $result -> fetch_array(MYSQLI_ASSOC);
    $points = $row['points'];
    //echo $row['points'].'<br>';

    $add_points = $_GET['amount'] * 100;
    $points = $points + $add_points;

    if(isset($points)){
        $update_points_sql = "UPDATE rv_users SET points='$points' WHERE user_id='$user_id'";
        if ($mysqli->query($update_points_sql) === TRUE) {
            echo "0";
        } else {
            echo "Error updating record: " . $mysqli->error;
        }

        $offer_id = $offer_name = $status = $ip_add =  "";
        $offer_datetime = date('Y-m-d h:i A');

        if(isset($_GET['oid'])){
            $offer_id = $_GET['oid'];
        }
        if(isset($_GET['o_name'])){
            $offer_name = $_GET['o_name'];
        }
//        if(isset($_GET['status'])){
//            $status = $_GET['status'];
//        }
//        if(isset($_GET['ip_address'])){
//            $ip_add = $_GET['ip_address'];
//        }

        $sql_history = "INSERT INTO rv_history (offer_id, offer_name, points_added,user_id,status,postback_ip,offer_datetime,ad_network) 
                        VALUES ('$offer_id','$offer_name','$add_points','$user_id','$status','$ip_add','$offer_datetime','Offertoro')";

        if ($mysqli->query($sql_history) === TRUE) {

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
    }
}
