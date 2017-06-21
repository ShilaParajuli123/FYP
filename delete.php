<?php
include "connection.php";
  $uid = $_GET['uid'];

  $del = mysql_query("DELETE FROM 'resturantusers' WHERE uid = '$uid'");
  header("location:resturantusers.php");
?>
