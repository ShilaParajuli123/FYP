<?php
session_start();
require("connection.php");
require("header1.php");

if(isset($_POST["item"]) && is_array($_POST["item"])){
		foreach($_POST["item"] as $key => $value){
			if(is_numeric($value)){
				$_SESSION["cart_products"][$key]["product_qty"] = $value;
			}
		}
	}
	
//back to return url
$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; //return url
header('Location:'.$return_url);

?>