<?php
 session_start();
 require_once( "connection.php" );
 require_once( "cart.php" );
 $cart = new cart();
 $action = strip_tags( $_GET["action"] );
 switch ($action) {
  case "add":
   $cart->add();
   break;
 }
?>
