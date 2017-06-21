<?php
include ("connection.php");
include ("checksession.php");
include ("header.php");
$result = mysqli_query($conn,"SELECT * FROM resturantuser");
?>
<html>
<head>
 <title>Student Marks sheet</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="../css/table.css" rel="stylesheet" type="text/css" />
</head>

</html>
<table >
    <tr >
        <th>id</th>
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
        <td><?php echo $row["id"];?></td>
        <td><?php echo $row["name"];?></td>

        <td><?php echo $row["address"]?></td>
        <td><?php echo $row["phone number"];?></td>
        <td><?php echo $row["email"];?></td>


       
         
                 <td><a href="edit.php?id=<?php echo $row["id"]; ?>"><button >Edit</button> </a></td>
                         <td><a href="delete.php?id=<?php echo $row["id"]; ?>"><button type="button">Delete</button> </a></td>


         <td><a href="add.php?id=<?php echo $row["id"]; ?>">Add marks</button></a></td>
       


<?php
}
?>