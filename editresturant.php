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
$id=$_GET['rid'];
$sql_query=mysqli_query($conn,"SELECT * FROM resturantname WHERE rid=$rid");
//  $result_set=mysqli_query($sql_query);
$fetched_row=mysqli_fetch_assoc($sql_query);
//redirectig to the display page. In our case, it is index.php


if(isset($_POST['edit']))
{
    


    $name = $_POST['rname'];
    $address = $_POST['rating'];
    $phonenumber = $_POST['location'];
    $email = $_POST['contactnumber'];
    // variables for input data

    // sql query for update data into database
    $sql_query =mysqli_query($conn,"UPDATE resturantname SET rname='$rname',rating='$rating',location='$location',contactnumber='$contactnumber' WHERE rid=$rid");
    header("Location:resturantlist.php");
    // sql query for update data into database
}
?>
<html>
<head>

</head>
<body>
<form action = "editresturant.php?id=<?php echo  $fetched_row["rid"];?>" method = "POST">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" placeholder="name" value=<?php echo $fetched_row['rname']; ?> /></td>
        </tr>
        <tr>
            <td>Rating</td>
            <td><input type="text" name="rating" placeholder="rating" value=<?php echo $fetched_row['rating']; ?> /></td>
        </tr>
        <tr>
            <td>Location</td>
            <td><input type="text" name="location" placeholder="location" value=<?php echo $fetched_row['location']; ?> /></td>
        </tr>
        <tr>
            <td>Contact Number</td>
            <td><input type="text" name="contactnumber" placeholder="contactnumber" value=<?php echo $fetched_row['contactnumber']; ?> /></td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="edit"><strong>EDIT</strong></button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>





