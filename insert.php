<?php
include 'connection.php';
include "Checksession.php";
include 'header.php';
?>
<html>
<head>
    <title>Resturant Users</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="../css/table.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="insert.php" method="post">
    <table>
        <tr>
    <td>Name</td> <td><input type="text" name="student_name"></td>
        </tr>
        <tr>
            <td>Address</td> <td><input type="text" name="address"></td>
        </tr>
        
        <tr>
            <td>Phone Number</td> <td><input type="text" name="phonenumber"></td>
        </tr>
        <tr>
            <td>Email</td> <td><input type="text" name="email"></td>
        </tr>



<tr>
    <td><input type="submit" name="insert"></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php


if(isset($_POST['Add']))
{
    // variables for input data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];



    $sql_query = "INSERT INTO resturantusers(name,address,phonenumber,email) VALUES('$name','$address','$phonenumber','$email')";
    mysqli_query($conn,$sql_query)
    or die(mysql_error());

        header("location:resturantusers.php");



    // sql query for inserting data into database

}


?>