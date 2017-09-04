<?php
session_start();
include("header.php");
require("connection.php");
$username=$_SESSION['username'];
$query="select * from customer where email='".$username."'";
$result=mysqli_query($conn, $query);
$customer_id=mysqli_fetch_assoc($result);
$c_id=$customer_id['customer_id'];
if(isset($_GET['item'])){
  //echo "get";
  $price=$_GET['price'];
  $name = [];
  $name = explode('_', $price);
  $rest = $name[0].'menu';
  $item_id=$_GET['item'];
  if(isset($_POST['btn'.$item_id])){
    //echo "btn clicked";
    //echo "btn clicked";
    $item_qty=$_POST['sel5'];
    $query="select * from price where item_id='".$item_id."'";
    $result=mysqli_query($conn, $query);
    $item_price=mysqli_fetch_assoc($result);
    $i_price=$item_price[$price];
    $total_price=(Int)$i_price * (Int)$item_qty;
    $query="insert into cart values ('', '".$item_id."', '".$c_id."', '".$item_qty."', '".$total_price."')";
    $result=mysqli_query($conn, $query);
  }
}

$query="select * from cart where customer_id='".$c_id."'";
$result=mysqli_query($conn, $query);
echo "<table class='table'>"; 
echo "<tr><th>Name</th><th>Quantity</th><th>Total Price</th><th>Action</th></tr>";
$total=0;
while($rs=mysqli_fetch_assoc($result)){
  $qry = "select name from item where item_id= ".$rs['item_id'];
  // var_dump($qry);
  $rslt  =  mysqli_query($conn,$qry);
  $row=mysqli_fetch_assoc($rslt);
  echo "<tr>";
  echo "<td>".$row['name']."</td><td>".$rs['quantity']."</td>
  <th>".$rs['total_price']."</th><td><a href='remove.php?id=".$rs['cart_id']."'>Remove</a>
  </td>";
  echo "</tr>";
  $total += $rs['total_price'];
}
echo "<tr><td></td><td></td><td><b>Total : ".$total."</b></td><td><a href='restaurant.php' class='button'>Add More Items</a></td></tr>";
echo "</table>";


?>