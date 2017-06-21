<?php

require_once 'connection.php';

if($_GET['rid']) {
    $id = $_GET['rid'];

    $sql = "SELECT * FROM resturantname WHERE rid = '" . $_GET["rid"] . "'";
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Edit Restaurant</title>

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
        <legend>Edit Restaurant</legend>

        <form action="updateRestaurant.php" method="get">
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="rname" value="<?php echo $data['rname'] ?>" /></td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td><input type="text" name="location"  value="<?php echo $data['location'] ?>" /></td>
                </tr>
                <tr>
                    <th>Contact Number</th>
                    <td><input type="text" name="contactnumber"  value="<?php echo $data['contactnumber'] ?>" /></td>
                </tr>
                <tr>
                    <th>Rating</th>
                    <td><input type="text" name="rating"  value="<?php echo $data['rating'] ?>" /></td>
                </tr>
                <tr>
                    <input type="hidden" name="rid" value="<?php echo $data['rid']?>" />
                    <td><button type="submit">Save Changes</button></td>

                </tr>
            </table>
        </form>

    </fieldset>

    </body>
    </html>

    <?php
}
?>