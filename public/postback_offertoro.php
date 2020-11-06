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
    }
}
