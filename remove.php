<?php
/**
 * Created by PhpStorm.
 * User: rojina
 * Date: 6/14/17
 * Time: 1:23 AM
 */

require_once 'connection.php';

if($_GET['rid']) {
    $id = $_GET['rid'];
    echo $id;

    $sql = "delete  FROM resturantname WHERE rid = '" . $_GET["rid"] . "'";
    if ($connect->query($sql) === TRUE) {
        echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
        header('Location: resturantlist.php');
    } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $connect->error."');</script>";
    }

    $connect->close();
//    $result = $connect->query($sql);
//    $data = $result->fetch_assoc();
//
//    $connect->close();
}
    ?>

<!--    <!DOCTYPE html>-->
<!--    <html>-->
<!--    <head>-->
<!--        <title>Remove Member</title>-->
<!--    </head>-->
<!--    <body>-->
<!---->
<!--    <h3>Do you really want to remove ?</h3>-->
<!--    <form action="php_action/remove.php" method="post">-->
<!---->
<!--        <input type="hidden" name="id" value="--><?php //echo $data['id'] ?><!--" />-->
<!--        <button type="submit">Save Changes</button>-->
<!--        <a href="index.php"><button type="button">Back</button></a>-->
<!--    </form>-->
<!---->
<!--    </body>-->
<!--    </html>-->
<!---->
<!--    --><?php
//}
//?>