<?php
session_start();
if(isset($_SESSION['username'])){
$username = $_SESSION['username'];
}?>
<html>
<head>
    <title>Online Food</title>
    <link href="bootstrap-3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <div class="row">
        <div class="logo">
            <a href="index.php"><img src="images/image1-crop.jpg"></a>

            <ul class="main-nav">
            <li><a href="users/userPage.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="restaurant.php">RESTAURANTS</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="register.php">REGISTER</a></li>
                <li><a href="login.php">LOG IN</a></li>
                <?php if(isset($_SESSION['username'])){  ?>
                <li style="color:white; margin-left: 150px;"><b><i><?php echo $username; ?></b></i></li>
        <li><a href ="logout.php">logout</a></li><?php } ?>

            </ul>
        </div>

        <div class="hero">
            <h1><b>EAT GOOD! FEEL GOOD!!</b></h1>
            <br>
            <div class="foodtype-search">
                <div class="location-search">
                    <form name="form1" method="GET" action="searchresult1.php">

                        <div class="form-group row">
                            <div class="col-xs-2">
                                <div class="foodtype">
                                    <label for="foodtypeId"></label>
                                     <select class="form-control" name="foodName">
                                        <option>Select Food</option>
                                        <option value="21">Aalo Sadeko</option>
                                        <option value="36">Buttan</option>
                                        <option value="12">Bundiya Laddu</option>
                                        <option value="26">Buff Momo</option>
                                        <option value="35">Chana Masala</option>
                                        <option value="4">Chicken Chilly</option>
                                        <option value="6">Chicken Momo</option>
                                        <option value="37">Chicken Sekuwa</option>
                                        <option value="13">Coconut Barfi</option>
                                        <option value="22">Chicken Noodles</option>
                                        <option value="28">Chicken Burger</option>
                                        <option value="33">Chicken Biryani</option>
                                        <option value="30">Cheese Burger</option>
                                        <option value="18">Fish Chilly</option>
                                        <option value="19">French Fries</option>
                                        <option value="23">Fish Fry</option>
                                        <option value="25">Fokso</option>
                                        <option value="31">Fish Burger</option>
                                        <option value="38">Gidi Fry</option>
                                        <option value="14">Kaju Kesar</option>
                                        <option value="15">Karachi Halwa</option>
                                        <option value="27">Mutton Momo</option>
                                        <option value="20">Pork Chilly</option>
                                        <option value="24">Salad</option>
                                        <option value="34">Veg Kabab</option>
                                        <option value="2">Veg Pizza</option>
                                        <option value="3">Veg Momo</option>
                                        <option value="29">Veg burger</option>
                                        <option value="32">Wine</option>
                                    </select>
                                    <span id="foodtype-not-selected-error" class="help-inline"></span>
                                </div>
                            </div>

                            <div class="col-xs-2">
                                <div class="location">
                                    <label for="location" class="required"></label>
                                    <select class="form-control" name="location">
                                        <option>Select Location</option>
                                        <option value="11">Baneshwor</option>
                                        <option value="5">DurbarMarg</option>
                                        <option value="12">Jawalakhel</option>
                                        <option value="3">Kamaladi</option>
                                        <option value="2">Kamalpokhari</option>
                                        <option value="14">Lazimpat</option>
                                        <option value="13">Thamel</option>
                                    </select>
                                    <span id="location-not-selected-error" class="help-inline"></span>
                                </div>
                            </div>

                            <div class="col-xs-2">
                                <div class="veg">
                                    <label for="veg" class="required"></label>
                                    <select class="form-control" name="type">
                                        <option>Select Type</option>
                                        <option value="veg">Veg</option>
                                        <option value="nonveg">Non-Veg</option>
                                    </select>
                                    <span id="not-selected-error" class="help-inline"></span>
                                </div>
                            </div>


                            <div class="col-xs-3">
                                <div class="find-food">
                                </div>
                            </div>
                            <button type="submit" id="button" style="margin-top: 10px; margin-right:20em; width:190px; margin-left: 13.5em;" name="button"
                                    class="btn btn-info" value="Search"/>
                            SHOW RESTAURANTS</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

</header>

<section class="features">
    <h3 class="text-center">GET FOOD FAST-NOT THE FAST FOOD</h3>

    <p class="copy">
        Foodie World is the online food company in Nepal that delivers food from different restaurants in Kathmandu to
        your doorstep. As a pioneer food delivery service provider, we are making life easier through online ordering.
        We know that your time is valuable and sometimes every minute in the day counts.
    </p>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <i class="fa fa-certificate"></i>
                <h4>Have healthy meals</h4>
                <p class="arranging">
                    Foodie World is the online food company that delivers food online. With the involvement of 11
                    different restaurants you can easily search your desired food and order it in few minutes as we know
                    that your time is valuable and sometimes every minute in the day counts!
                </p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-camera"></i>
                <h4>View our gallery</h4>
                <p class="arranging">
                    Check out our website and browse the photos of delicious food in your free time! Choose your own
                    kind of food from your wish list. View the photos of the different food items from Foodie World
                    gallery and just click a button to place your order and your lunch will be delivered wherever you
                    are!
                </p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-envelope"></i>
                <h4>Mail us your query</h4>
                <p class="arranging">
                    Services are provided through out the day. Log onto our system or call us to place your order. Check
                    out our website and browse the photos of delicious food in your free time! Apart from the cost of
                    delivery you pay nothing extra. You can refer to the Delivery Charge page for further detailed
                    information!
                </p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-cog"></i>
                <h4>General Info</h4>
                <p class="arranging">
                    FoodieWorld.com is owned and operated by Foodie World Pvt. Ltd. Our services are limited to provide
                    restaurant food ordering and delivery service to our customers. We are in no way responsible for the
                    quality of foods and its packaging offered by its merchant members!
                </p>
            </div>

        </div>
    </div>
</section>

<section class="food">
    <ul class="food-showcase clearfix">
        <li>
            <figure class="food-photo thumbnail">
                <img src="images/khana1.jpg">
            </figure>
        <li>
            <figure class="food-photo thumbnail">
                <img src="images/khana 4.jpg">
            </figure>
        <li>
            <figure class="food-photo thumbnail">
                <img src="images/khana6.jpg">
            </figure>
        <li>
            <figure class="food-photo thumbnail">
                <img src="images/khana7.jpg">
            </figure>
        <li>
            <figure class="food-photo thumbnail">
                <img src="images/khana5.jpg">
            </figure>
        <li>
            <figure class="food-photo thumbnail">
                <img src="images/khana3.jpg">
            </figure>
        <li>
            <figure class="food-photo thumbnail">
                <img src="images/khana2.jpg">
            </figure>
        <li>
            <figure class="food-photo thumbnail">
                <img src="images/khana8.jpg">
            </figure>
        </li>
    </ul>
</section>


<section class="rest">
    <h3 class="text-center"> TOP 4 RESTAURANTS IN KATHMANDU VALLEY</h3>
    <div class="container">
        <div class="row col-md-12">
            <div class="col-md-3">
                <img src="images/letrio.jpg" height="200px">
                <h4><a href="Le Trio.php">Le Trio</h4></a>
                <p><i class="fa fa-cog"></i> Good hygienic food</p>
                <p><i class="fa fa-cog"></i> Best Momo-Cha with Jhol Achar</p>
                <p><i class="fa fa-cog"></i> Scrumptious desserts</p>
            </div>
            <div class="col-md-3">
                <img src="images/sangam.jpg" height="200px">
                <h4><a href="Sangam Sweets.php">Sangam Sweets</h4></a>
                <p><i class="fa fa-cog"></i> 100+ Sweets items</p>
                <p><i class="fa fa-cog"></i> 100% vegetarian restaurant</p>
                <p><i class="fa fa-cog"></i> Wi-Fi facility </p>
            </div>
            <div class="col-md-3">
                <img src="images/nanglo.jpg" height="200px">
                <h4><a href="nanglo.php">Nanglo</h4></a>
                <p><i class="fa fa-cog"></i> Delicious fast food</p>
                <p><i class="fa fa-cog"></i> Rooftop zone</p>
                <p><i class="fa fa-cog"></i> Continental cuisines</p>
            </div>
            <div class="col-md-3">
                <img src="images/cafemitra.jpg" height="200px">
                <h4><a href="Cafe Mitra.php">Cafe Mitra</h4></a>
                <p><i class="fa fa-cog"></i> Peaceful environment</p>
                <p><i class="fa fa-cog"></i> Cosmopolitan cuisines and desserts</p>
                <p><i class="fa fa-cog"></i> Hard and soft drinks</p>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>
<div class="footer col-md-12">
    <div class="col-md-8">

        <a href="about.php">ABOUT US </a>
        <a href="restaurant.php">RESTAURANTS </a>
        <a href="contact.php">CONTACT </a>
        <a href="login.php">LOG IN </a><br>
        <p>By using this website you agree to our Terms of Use & Privacy Policy<br>
            Copyright &copy; Foodie World Pvt. Ltd.<br>
            - All Rights Reserved </p>
    </div>
    <div class="col-md-4">
        <a target="_blank" title="find us on Facebook" href="http://www.facebook.com/PLACEHOLDER"><img
                    style="margin-top: 20px;" alt="find us on facebook"
                    src="//login.create.net/images/icons/user/facebook-b_130x50.png" border=0></a>

        <a target="_blank" title="follow me on twitter" href="http://www.twitter.com/PLACEHOLDER"><img
                    style="margin-top: 20px; margin-left: -4em;" alt="follow me on twitter"
                    src="//login.create.net/images/icons/user/twitter_130x50.png" border=0></a>
    </div>
</div>
</div>
</body>
</html>