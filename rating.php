 <?php

include_once'connection.php';
session_start();

if(isset($_GET['value'])){
    $value=$_GET['value'];
    
}
$resturant= $_GET['restaurant'];
$user=$_SESSION['username'];

$sql="select `customer_id` from `customer` where `email`='$user' ";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
$user_id=(int)$row['customer_id'];


$sql2="select * from `ratinglist` where `customer_id` = '$user_id' AND `resturant_id`='$resturant'";
if($query2=mysqli_query($conn,$sql2)){
    $row2=mysqli_num_rows($query2);
    if($row2==1){

         $sql3="UPDATE `ratinglist` SET  `ratings`='$value' WHERE `resturant_id` = '$resturant' AND `customer_id`='$user_id'";
            $query3=mysqli_query($conn,$sql3);
            header('location:restaurant.php?msg=existing rating updated');
           

    }
    elseif ($row2==0) {
            $sql1="insert into `ratinglist`(`customer_id`,`resturant_id`,`ratings`) VALUES ('".$user_id."','".$resturant."','".$value."')";
            $query1=mysqli_query($conn,$sql1);
            header('location:restaurant.php?msg=New rating inserted');
             
    }
    else{
        echo "error";
    }
}
?>