<?php 
session_start();
if(empty($_SESSION['email'])) {
 echo 'incorrect email/ password please try again.' ;
}

?> 