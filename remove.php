<?php
session_start();
require("connection.php");
require("header1.php");
if(isset($_GET['id'])){
  $cart_id=$_GET['id'];
    $query = "DELETE from cart where cart_id=".$cart_id;
    $result = mysqli_query($conn,$query);
    if ($result) {
     echo "Item Removed";
    }
  header("Location: cart.php");
}


?>
