<?php

require_once 'db_config.php';

if(isset($_GET['subid']) && isset($_GET['payout'])){
    $user_id = $_GET['subid'];
    $sql = "SELECT * FROM rv_users where user_id='$user_id'";
    $result = $mysqli -> query($sql);
    $row = $result -> fetch_array(MYSQLI_ASSOC);
    $points = $row['points'];
    //echo $row['points'].'<br>';

    $add_points = $_GET['payout'] * 100;
    $points = $points + $add_points;

    if(isset($points)){
        $update_points_sql = "UPDATE rv_users SET points='$points' WHERE user_id='$user_id'";
        if ($mysqli->query($update_points_sql) === TRUE) {
            echo "0";
        } else {
            echo "Error updating record: " . $mysqli->error;
        }
    }
}
