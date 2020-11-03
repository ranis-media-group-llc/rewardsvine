<?php

    require_once 'db_config.php';

    if(isset($_GET['sub1']) && isset($_GET['rate'])){
        $user_id = $_GET['sub1'];
        $sql = "SELECT * FROM rv_users where user_id='$user_id'";
        $result = $mysqli -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $points = $row['points'];
        //echo $row['points'].'<br>';

        $add_points = $_GET['rate'] * 100;
        $points = $points + $add_points;
      //  echo $points;
    }

    // record the points
    if(isset($points)){
        $update_points_sql = "UPDATE rv_users SET points='$points' WHERE user_id='$user_id'";
        if ($mysqli->query($update_points_sql) === TRUE) {
            echo "0";
        } else {
            echo "Error updating record: " . $mysqli->error;
        }
    }

//    $offer_id =  $_GET['offerid'];
//    $offer_name =  $_GET['name'];
//    $offer_rate =  $_GET['rate'];
//    $offer_sub_id =  $_GET['sub1'];
//    $offer_status =  $_GET['status'];
//    $offer_ip =  $_GET['ip'];
//
//    echo $offer_rate.'<br>';
//    echo $offer_name.'<br>';
?>