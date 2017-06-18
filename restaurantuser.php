<?php
include ("Connection.php");
include ("checksession.php");
include ("header.php");
$result = mysqli_query($conn,"SELECT * FROM resturantuser");
echo $_SESSION["role"];
?>
<html>
<head>
 <title>Student Marks sheet</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="../css/table.css" rel="stylesheet" type="text/css" />
</head>
<button id="button"><a href="../Student/adduser.php">Add students</a></button></center>

</html>
<table >
    <tr >
        <th>uid</th>
        <th>name</th>
        <th>address</th>
        <th>phone number</th>
        <th>email</th>
        <th colspan="4">Operations</th>

    </tr>
    <?php
    while($row =mysqli_fetch_assoc( $result)){
    ?>
    <tr>
        <td><?php echo $row["uid"];?></td>
        <td><?php echo $row["name"];?></td>

        <td><?php echo $row["address"]?></td>
        <td><?php echo $row["phone number"];?></td>
        <td><?php echo $row["email"];?></td>


       
         <?php if($_SESSION['role']=="admin")
             {
                 ?>
                 <td><a href="edit.php?id=<?php echo $row["uid"]; ?>"><button >Edit</button> </a></td>
                         <td><a href="../Student/deleteuser.php?id=<?php echo $row["uid"]; ?>"><button type="button">Delete</button> </a></td>


         <td><a href="../obtainedmarks/obtained.php?id=<?php echo $row["uid"];?>&&semester=<?php echo $row["semester"];?>&&name=<?php echo $row["name"];?>"><button type="button">Add marks</button></a></td>
        <td><a href="../obtainedmarks/display.php?id=<?php echo $row["id"];?>&&semester=<?php echo $row["semester"];?>&&name=<?php echo $row["name"];?>"><button type="button">View Result</button></a></td>

               <?php
             }?>



<?php
}
?>