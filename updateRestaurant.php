<?php
/**
 * Created by PhpStorm.
 * User: rojina
 * Date: 6/14/17
 * Time: 1:57 AM
 */

require_once 'connection.php';

if($_GET) {
    $rname = $_GET['rname'];
    $location = $_GET['location'];
    $rating = $_GET['rating'];
    $contactnumber = $_GET['contactnumber'];

    $id = $_POST['id'];

    $sql = "UPDATE resturantname SET rname = '" . $_GET["rname"] . "', location = '" . $_GET["location"] . "', contactnumber = '"
        . $_GET["contactnumber"] . "', rating = '" . $_GET["rating"] . "' WHERE rid = '" . $_GET["rid"] . "'";
    if($connect->query($sql) === TRUE) {
        echo "<script type= 'text/javascript'>alert('New record updated successfully');</script>";
        header('Location: resturantlist.php');
    }

    $connect->close();

}
