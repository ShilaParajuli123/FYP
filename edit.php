<?php

include 'connection.php';
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Demo Project Result</title>
  <link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="../css/table.css" rel="stylesheet" type="text/css" />


</head>
<body>
<div id="templatemo_wrapper_outter">

  <div id="templatemo_wrapper_inner">
      <?php
      include 'header.php';
      ?>
      </div>
    </div>


<?php
include "Checksession.php";
$id=$_GET['uid'];
$sql_query=mysqli_query($conn,"SELECT * FROM resturantusers WHERE uid=$uid");
//  $result_set=mysqli_query($sql_query);
$fetched_row=mysqli_fetch_assoc($sql_query);
//redirectig to the display page. In our case, it is index.php


if(isset($_POST['edit']))
{
    


    $name = $_POST['name'];
    $address = $_POST['address'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    // variables for input data

    // sql query for update data into database
    $sql_query =mysqli_query($conn,"UPDATE resturantusers SET name='$name',address='$address',phonenumber='$phonenumber',email='$email' WHERE uid=$uid");
    header("Location:resturantusers.php");
    // sql query for update data into database
}
?>
<html>
<head>

</head>
<body>
<form action = "edit.php?id=<?php echo  $fetched_row["uid"];?>" method = "POST">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" placeholder="name" value=<?php echo $fetched_row['name']; ?> /></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" placeholder="address" value=<?php echo $fetched_row['address']; ?> /></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="phonenumber" placeholder="phonenumber" value=<?php echo $fetched_row['phonenumber']; ?> /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" placeholder="email" value=<?php echo $fetched_row['email']; ?> /></td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="edit"><strong>UPDATE</strong></button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>





