<?php
if(isset($_SESSION['username'])){
	 $username = $_SESSION['username'];
}
?>

<html>
<head>
<title>Online Food</title>
<link href="bootstrap-3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="style1.css" rel="stylesheet" type="text/css">
<body>
<header>
<div class="row">
<div class="logo">
<a href = "index.php"><img src="images/image1-crop.jpg"></a>

<ul class="main-nav">
<li>
<li><a href="users/userPage.php">HOME</a></li>
 <li><a href="about.php">ABOUT US</a></li>
   <li><a href="restaurant.php">RESTAURANTS</a></li>
      <li><a href="contact.php">CONTACT</a></li>
       <li><a href="register.php">REGISTER</a></li>
        <li><a href="login.php">LOG IN</a></li>
       <!--<li> <input  style = "padding: 1px;" type = "text" class="form-control" name = "search"></li>
        <button style = "margin-left:-2em; border: none; margin-bottom: 2px;" class="btn btn-default" type="submit"></button>
        <i class="glyphicon glyphicon-search"></i>-->
        <li style="color:white; margin-left: 150px;"><b><i><?php echo $username; ?></b></i></li>
	</b> <?php	if(isset($_SESSION['username'])){ ?><li><a href ="logout.php">logout</a></li> <?php } ?>
</li>
</li>
</ul>
</div>
</div>
</header>
</body>
</head>
</html>
