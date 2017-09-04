<?php
include("header1.php");
include("cms/users/connection.php");
?>

<body>
<form method="post">
    <div class="login">
        <?php

            if(isset($_POST['login']))
            {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = "SELECT COUNT(customer_id) FROM customer where `email`='".$email."' AND `password`='".($password)."'";

                $result = mysqli_query($conn,$sql);

                $fetch = mysqli_fetch_row($result);
                $count=$fetch[0];

                if($count==1)
                {
                    session_start();
                    $_SESSION['username'] = $email;
                    header("location: users/userPage.php?msg=login sucessful");
                }
                else{
                    echo "Invalid Login";
                }
            }

            ?>
           <center> <h3 class="text-center" style="color:#e67e22;vertical-align:middle;">Welcome to Foodie World. Please sign in!</h3><br/></center>
        <div style = "margin-left: 10px;" class="container col-md-6">


    <h4 style="color:#e67e22;">New Customer</h4>
    <div> Although registration is not compulsory to use our service, we recommend you to do so. By registering to our website, you can keep track of the orders you have made and many other benefits that we announce time-to-time.
    <div style="text-align:right; padding-right: 10px; padding-top: 10px;">

    <a href="register.php"><button type="button" class="btn btn-success" margin-left:auto; margin-right:auto; display:block; margin-top:22%; margin-bottom:0%";><span>Register</span>
    </button>
    </a>
    </div>
    </div>
    </div>
    </form>
    
<div style = "height:auto; margin-left: 5px;" class="container col-md-5">

    <h4 style="color:#e67e22;">Returning Customer</h4>
 
    <form name="form" method="post">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
          </div>
          <br>
        <div class = "clearfix"></div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Password:</label>
                   
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
          </div>
          <label><input type="checkbox" name="remember"> Remember me</label> <br>
         <button style = "border:none;" type="submit" class="btn" name = "login">Login
            </button>
             <br>
          </form></div>

<div class = "clearfix"></div>
<div style="margin-top: 250px" class="footer">
<?php 
include("footer.php");
?>
</div>
</body>
</html>
