<?php
/**
 * Created by PhpStorm.
 * User: seanm
 * Date: 7/31/2017
 * Time: 12:48 PM
 */
session_start();

require "mysql_conf.php";

if(isset($_SESSION['user_info'])){
    $product_information = json_decode(file_get_contents('php://input'), true);
    $upc = mysqli_real_escape_string($conn, $product_information['upc']);
    if(!empty($upc)) {
        $sql = "SELECT * FROM `inventory` WHERE `upc`=$upc";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            $json_data = json_encode($data);
            echo $json_data;
        }
    }else{
        echo false;
    }
}else{
    header('location: ../login');
}

