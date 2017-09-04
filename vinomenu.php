<?php
session_start();
include("header.php");
include('connection.php');
?> 
<body>
<div class="container">
    <div class="row">
    <h3 class="text-center">Select Your Foods</h3><br>
    <h5>Click 'Add' button to select items of your choice from the menu below. Once you're done adding items, click 'Continue' button.   </h5>  

    
  <div>
  <?php
   $query="select * from item, price where item.item_id=price.item_id";
  $result= mysqli_query($conn, $query);
      echo "<table>";
  while($fitem=mysqli_fetch_assoc($result)){
    echo "<form method='post' action='cart.php?item=".$fitem['item_id']."&price=vino_price'>";
    echo "<tr>";
  if($fitem['vino_price']!=0)
  {
    echo "<td>".$fitem['name']."</td> &nbsp;&nbsp;&nbsp;&nbsp;
          <td>".$fitem['vino_price']."</td> 
         &nbsp;&nbsp;&nbsp;&nbsp;
        <td><select name='sel5'>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
    <option value='4'>4</option>
    <option value='5'>5</option>
  </select></td> &nbsp;&nbsp;&nbsp;&nbsp;
  <td><button type='submit' name='btn".$fitem['item_id']."' class='btn btn-warning btn-sm'>Add</button></td>";
    echo "</tr><br>";
    echo "</form>";
  }
}
      echo "</table>";

  ?>
</div>
<!-- <br /><a href="show-cart.php" title="go to cart">Go to cart</a> -->
</div>
</div>
<?php 
include("footer.php");
?>
</body>
</html>
