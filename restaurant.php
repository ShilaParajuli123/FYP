<?php
session_start();
include("header.php");
include('connection.php');
?> 

<section class="resto">
<hr>
<h3 class="text-center">RESTAURANT LIST</h3>

</hr>

       <?php
       $sql = "select * from `restaurant`";
       $run = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($run)){
        $nameR = $row['2'];
        $add = $row[1];
        $rid = $row[0];
       $name = $row[5]=='';


?>
        <div class = "col-sm-6 col-md-3">
        <div class = "thumbnail">
            <img src = "images/<?php echo $name;?>" alt = "Generic placeholder thumbnail">
        </div>

        <div class = "caption">
            <a href="<?php echo $nameR;?>.php"> <h4><?php echo $nameR; ?></h4></a>
                 <form method="POST" action="">
                                    <a class="btn-xs" value="1" href="rating.php?restaurant=<?php echo $rid;?>&value=1">1</a>
                                    <a class="btn-xs" value="2" href="rating.php?restaurant=<?php echo $rid;?>&value=2">2</a>
                                    <a class="btn-xs" value="3" href="rating.php?restaurant=<?php echo $rid;?>&value=3">3</a>
                                    <a class="btn-xs" value="4" href="rating.php?restaurant=<?php echo $rid;?>&value=4">4</a>
                                    <a class="btn-xs" value="5" href="rating.php?restaurant=<?php echo $rid;?>&value=5">5</a>
                                </form>
            <p><i><?php echo $add; ?></i></p>
          
            
        </div>
    </div>
      <?php } ?>




    
  <!--<p style="font-size: 20px;">Total 11 restaurants found for your search</p>-->
  
    

  <!--   <div class = "col-sm-6 col-md-3">
        <div class = "thumbnail">
            <img src = "images/sangam.jpg" alt = "Generic placeholder thumbnail">
        </div>

        <div class = "caption">
            <a  href="sangam.php"><h4>Sangam Sweets</h4></a>
            <p><i>Kamaladi,Opposite to Kathmandu Plaza, Kathmandu</i></p>
            <p>Vegetarian dishes, Chinese and Continental</p>

           

        </div>
    </div>

    <div class = "col-sm-6 col-md-3">
        <div class = "thumbnail">
            <img src = "images/nanglo.jpg" alt = "Generic placeholder thumbnail" class="img-responsive">
        </div>

        <a class = "caption">
            <a href="nanglo.php"> <h4>Nanglo Cafe and Pub</h4></a>
            <p><i>Kamaladi, Kathmandu</i></p>
            <p>Continental, Nepalese, Italian and Chinese</p>
        </div>
    </div>

    <div class = "col-sm-6 col-md-3">
        <div class = "thumbnail">
            <img src = "images/cafe.jpg" alt = "Generic placeholder thumbnail">
        </div>

        <a class = "caption">
            <a href="cafe.php"> <h4>Cafereena, Durbarmarg</h4></a>
            <p>Durbarmarg, Kathmandu</p>
            <p>Indian</p>
            
        </div>
    </div>
    <div class = "clearfix"></div>
    <div class = "col-sm-6 col-md-3">
        <div class = "thumbnail">
            <img src = "images/royalalina.jpg" alt = "Generic placeholder thumbnail">
        </div>

        <a class = "caption">
            <a href="royalalina.php"> <h4>Royal Alina's Bakery Cafe</h4></a>

            <p><i>New Baneshwor, Kathmandu</i></p>
            <p>Chinese, Nepali, Continental and Indian</p>
            
        </div>
    </div>

    <div class = "col-sm-6 col-md-3">
        <div class = "thumbnail">
            <img src = "images/letrio.jpg" alt = "Generic placeholder thumbnail">
        </div>

        <a class = "caption">
            <a href="letrio.php"> <h4>Le Trio (Durbar Marg)</h4></a>
            <p><i>Durbar Marg, Kathmandu</i></p>
            <p>Chinese</p>
            
        </div>
    </div>

    <div class = "col-sm-6 col-md-3">
        <div class = "thumbnail">
            <img src = "images/momobar.jpg" alt = "Generic placeholder thumbnail">
        </div>

        <a class = "caption">
            <a href="momobar.php"> <h4>Momo Bar</h4></a>
            <p><i>Lazimpat,Kathmandu</i></p>
            <p>Momo</p>
            
        </div>
    </div>

     <div class = "col-sm-6 col-md-3">
        <div class = "thumbnail">
            <img src = "images/indreni.jpg" alt = "Generic placeholder thumbnail">
        </div>

        <a class = "caption">
            <a href="indreni.php"> <h4>Indreni Foodland</h4></a>
            <p><i>New Baneshwor,Kathmandu</i></p>
            <p>Multi Cuisine</p>
            
        </div>
    </div>

     <div class = "col-sm-6 col-md-3">
        <div class = "thumbnail">
            <img src = "images/burgershack.jpg" alt = "Generic placeholder thumbnail">
        </div>

        <a class = "caption">
            <a href="burgershack.php"> <h4>Burger Shack</h4></a>
            <p><i>Jawalakhel, Lalitpur</i></p>
            <p>Multi Cuisine</p>
        </div>
    </div>

    <div class = "col-sm-6 col-md-3">
        <div class = "thumbnail">
            <img src = "images/cafemitra.jpg" alt = "Generic placeholder thumbnail">
        </div>

        <a class = "caption">
            <a href="cafemitra.php"> <h4>Cafe Mitra</h4></a>
            <p><i>Thamel, Kathmandu</i></p>
            <p>Continental,Chinese</p>
        </div>
    </div>

<div class = "col-sm-6 col-md-3">
        <div class = "thumbnail">
            <img src = "images/bigb.jpg" alt = "Generic placeholder thumbnail">
        </div>

        <a class = "caption">
            <a href="bigb.php"> <h4>BigB Real Hamburger</h4></a>
            <p><i>396 Uttardhoka, Lazimpat, Kathmandu</i></p>
            <p>Burgers</p>
        </div>
    </div>

<div class = "col-sm-6 col-md-3">
        <div class = "thumbnail">
            <img src = "images/trisara.jpg" alt = "Generic placeholder thumbnail">
        </div>

        <a class = "caption">
            <a href="trisara.php"> <h4>Trisara</h4></a>
            <p><i>Lazimpat,Kathmandu</i></p>
            <p>Continental</p>    
        </div>
    </div>

    <div class = "col-sm-6 col-md-3">
        <div class = "thumbnail">
            <img src = "images/vino.jpg" alt = "Generic placeholder thumbnail">
        </div>

        <a class = "caption">
            <a href="vino.php"> <h4>Vino Bistro</h4></a>
            <p><i>Lazimpat,Kathmandu</i></p>
            <p>French</p>
            
        </div>
    </div> -->
</section>
<?php 
include("footer.php");
?>
</body>
</html>