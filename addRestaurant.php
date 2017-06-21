<?php
/**
 * Created by PhpStorm.
 * User: rojina
 * Date: 6/13
 * Time: 10:04 PM

 */



?>


<!DOCTYPE html>
<html>
<head>
    <title>Add Member</title>

    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }

        table tr th {
            padding-top: 20px;
        }
    </style>

</head>
<body>



    <fieldset>
        <legend>Add Restaurant</legend>

    <form action="insert1.php" method="get">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Restaurant Id</th>
                <td><input type="text" name="rid" placeholder="Id" /></td>
            </tr>
            <tr>
                <th>Restaurant Name</th>
                <td><input type="text" name="rname" placeholder=" Name" /></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input type="text" name="location" placeholder="Address" /></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td><input type="text" name="contactnumber" placeholder="Contact" /></td>
            </tr>
            <tr>
                <th>Rating</th>
                <td><input type="text" name="rating" placeholder="Rating" /></td>
            </tr>
            <tr>
                <td> <input type="submit" value="submit" name="submit"></td>
<!--                <td><a href="index.php"><button type="button">Back</button></a></td>-->
            </tr>
        </table>
    </form>
    </fieldset>


</body>
</html>



