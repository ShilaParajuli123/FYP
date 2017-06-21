<?php

$localhost = "localhost";
$username = "root";
$password = "root";
$dbname = "onlinefood";

// create connection 
$connect = new mysqli($localhost, $username, $password, $dbname);

// check connection 
if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
}

?>