<?php require_once 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD</title>

    <style type="text/css">
        .manageMember {
            width: 50%;
            margin: auto;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

    </style>

</head>
<body>

<div class="manageMember">
    <a href="addRestaurant.php"><button type="button">Add Restaurant</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Rating</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM resturantname";
        $result = $connect->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['rid']."</td>
                        <td>".$row['rname']."</td>
                        <td>".$row['location']."</td>
                          <td>".$row['contactnumber']."</td>
                            <td>".$row['rating']."</td>
                                                        

                        <td>
                            <a href='editRestaurant.php?rid=".$row['rid']."'><button type='button'>Edit</button></a>
                            <a href='remove.php?rid=".$row['rid']."'><button type='button'>Remove</button></a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>