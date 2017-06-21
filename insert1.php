<?php
//if($_SERVER['REQUEST_METHOD'] == "get") {
echo 'asdfsdf';
require_once 'connection.php';
echo "Welcome ". $_GET['rname']. "<br />";
$sql = "INSERT INTO resturantname (rname,rating,location,contactnumber,rid)
VALUES ('" . $_GET["rname"] . "','" . $_GET["rating"] . "','" . $_GET["location"] . "','" . $_GET["contactnumber"] . "','" . $_GET["rid"] . "')";

if ($connect->query($sql) === TRUE) {
    echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
    header('Location: resturantlist.php');
} else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $connect->error."');</script>";
}

$connect->close();

//}
?>