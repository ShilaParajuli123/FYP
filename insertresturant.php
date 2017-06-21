<?php
include 'connection.php';
include "Checksession.php";
include 'header.php';
?>
<html>
<head>
    <title>Resturant List</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="../css/table.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="insertresturant.php" method="post">
    <table>
        <tr>
    <td>Name</td> <td><input type="text" name="rname"></td>
        </tr>
        <tr>
            <td>Rating</td> <td><input type="text" name="rating"></td>
        </tr>
        
        <tr>
            <td>Location</td> <td><input type="text" name="location"></td>
        </tr>
        <tr>
            <td>Contact Number</td> <td><input type="text" name="contactnumber"></td>
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
    $name = $_POST['rname'];
    $rating = $_POST['rating'];
    $location = $_POST['location'];
    $contactnumber = $_POST['contactnumber'];



    $sql_query = "INSERT INTO resturantusers(rname,rating,location,contactnumber) VALUES('$rname','$rating','$location','$contactnumber')";
    mysqli_query($conn,$sql_query)
    or die(mysql_error());

        header("location:resturantlist.php");



    // sql query for inserting data into database

}


?>