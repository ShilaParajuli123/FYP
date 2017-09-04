<?php
include("/cms/users/connection.php");
require 'connection.php';
?>

<?php
session_start();
include("header.php");
$foodname = $_GET['foodName'];
$location = $_GET['location'];
$type = $_GET['type'];
//    echo $foodname.' '. $price .' '. $location.' '.$type;

//    $sql = "SELECT * from item where name LIKE '%".$foodname."%'";
//    $qry = mysqli_query($conn,$sql);
//    var_dump(mysqli_fetch_assoc($qry));

$sql = "SELECT * FROM item";
$result = mysqli_query($conn, $sql);
$vectorIndex = [];
while ($row = mysqli_fetch_assoc($result)) {
    $vectorIndex[] = $row['name'];
}
$vectorIndex[] = 'veg';
$vectorIndex[] = 'nonveg';

$sql = "SELECT *FROM restaurant GROUP BY address";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $vectorIndex[] = $row['address'];
}
$vectorIndex[] = 'rating';

$vector = [];
foreach ($vectorIndex as $index) {
    $vector[] = 0;
}
$newArray = array_combine($vectorIndex, $vector);
$vector = $newArray;
$restaurant = [];
$sqlRestaurant = "SELECT * FROM restaurant";
$resultRestaurant = mysqli_query($conn, $sqlRestaurant);
$vegCount = 0;
$nonvegCount = 0;
while ($rs = mysqli_fetch_assoc($resultRestaurant)) {
    $sqlItem = "SELECT * FROM restitem WHERE restaurant_id = " . $rs['r_id'];
    $resultItem = mysqli_query($conn, $sqlItem);
    while ($row = mysqli_fetch_assoc($resultItem)) {
        $sql = "SELECT * FROM item where item_id= " . $row['item_id'];
        $result = mysqli_query($conn, $sql);
        while ($r = mysqli_fetch_assoc($result)) {
            if ($r['type'] == 'veg') {
                $vegCount++;
            }
            if ($r['type'] == 'nonveg') {
                $nonvegCount++;
            }
            foreach ($vector as $key => $value) {
                if ($key == $r['name'])
                    $vector[$key] = 1;
            }
        }
    }

    foreach ($vector as $key => $value) {
        if (strcmp($key, $rs['address'])) {
            $vector[$rs['address']] = 1;
        }

        $vector['rating'] = $rs['rating'] / 5;
    }
    $vector['veg'] = $vegCount;
    $vector['nonveg'] = $nonvegCount;
    $name = $rs['name'];
    ksort($vector);
    $restaurant[$name] = $vector;
    foreach ($vector as $key => $value) {
        $vector[$key] = 0;
    }
}

//restaurant
$userVector = $vector;
//var_dump($userVector);
//die($_GET['foodName']);
foreach ($vector as $key => $value) {
//     die($key.' '.$foodname);
    if (strcmp($key, $foodname) == 0) {
        $userVector[$key] = 1;
    }
//    die(ucfirst($location));
    if (strcmp(ucfirst($location), $key) == 0) {
        $userVector[$key] = 1;
    }
}
if (strcmp($_GET['type'], 'veg') == 0) {
    $userVector['veg'] = 1;
}
if (strcmp($_GET['type'], 'nonveg') == 0) {
    $userVector['veg'] = 1;
}
$userVector['rating'] = 1;

ksort($userVector);

$results = [];
foreach ($restaurant as $key => $value) {
    $results[$key] = similarity($userVector, $value);
}
arsort($results);
?>


<div class="container">
    <table class="table table-responsive table-bordered table-striped">
        <thead>
        <th>Id</th>
        <th>Restaurant</th>
        <th>Cosine Degree</th>
        <th>Address</th>
        </thead>
        <tbody>
        <?php

       $sql = "select * from `restaurant`";
       $run = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($run)){
        $nameR = $row['2'];
        $add = $row[1];
        $rid = $row[0];
       $name = $row[5];
}
        $i=0;
        foreach ($results as $key => $value) {
            $i++;
            ?>

        <div class = "col-sm-6 col-md-3">
        <div class = "thumbnail">
            <img src = "image1.jpg" alt = "Generic placeholder thumbnail">
        </div>

        <div class = "caption">
            <a href="<?php echo $key;?>.php"> <h4><?php  echo $key; ?></h4></a>

</div>


            <tr>
                <td><?=$i?></td>
                <td><?php echo $key ?></td>
                <td> <?php echo $value ?></td>
                <td>
                    <?php
                        $sql = "SELECT * FROM restaurant WHERE name = '".$key."'";
                        $result = mysqli_query($conn,$sql);
                        if ($result){
                        $rs = mysqli_fetch_assoc($result);
                        echo $rs['address'];
                        }
                    ?>
                </td>
            </tr>
            <?php
            if ($i==5)
                break;
        }
        ?>

    </tbody>
    </table>
    </div>




<?php
/* function to calculate similarity */
function similarity(array $vec1, array $vec2)
{
    return dotProduct($vec1, $vec2) / (absVector($vec1) * absVector($vec2));
}

/*******calculating dot product **********/
function dotProduct(array $vec1, array $vec2)
{
    $result = 0;

    foreach (array_keys($vec1) as $key1) {
        foreach (array_keys($vec2) as $key2) {
            if ($key1 === $key2)
                $result += $vec1[$key1] * $vec2[$key2];
        }
    }

    return $result;
}

/******** for calculating absolute value of vector ******/
function absVector(array $vec)
{
    $result = 0;

    foreach (array_values($vec) as $value) {
        $result += $value * $value;
    }

    return sqrt($result);
}

?>
</div>
<?php 
include("footer.php");
?>