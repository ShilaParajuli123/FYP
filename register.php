<?php
session_start();
include("header.php");
include("connection.php");

?> 

<script type="text/javascript"> 
function checkForm(form)
  {
    if(form.firstname.value == "") {
      alert("Error: Firstname cannot be blank!");
      form.firstname.focus();
      return false;
    }
    re = /^[a-zA-Z]+$/;
    if(!re.test(form.firstname.value)) {
      alert("Error: Firstname must contain only letters!");
      form.firstname.focus();
      return false;
    }

if(form.lastname.value == "") {
      alert("Error: Lastname cannot be blank!");
      form.lastname.focus();
      return false;
    }
    re = /^[a-zA-Z]+$/;
    if(!re.test(form.lastname.value)) {
      alert("Error: Lastname must contain only letters!");
      form.lastname.focus();
      return false;
    }

    if(form.address.value == "") {
      alert("Error: Address cannot be blank!");
      form.address.focus();
      return false;
    }
    re = /^[a-zA-Z]+$/;
    if(!re.test(form.address.value)) {
      alert("Error: Address must contain only letters!");
      form.address.focus();
      return false;
    }

     if(form.phonenumber.value == "") {
      alert("Error: Phonenumber cannot be blank!");
       re = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
       form.phonenumber.focus();
      return false;
    }
    
    if(form.email.value == "") {
      alert("Error: Email cannot be blank!");
       re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
       form.email.focus();
      return false;
    }
  
    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(form.pwd1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pwd1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pwd1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pwd1.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pwd1.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd1.focus();
      return false;
    }

    alert("You entered a valid password: " + form.pwd1.value);
    return true;
  }

</script>
<body>
<?php
if(isset($_POST['done']))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$password = $_POST['pwd1'];
$reenterpassword = $_POST['pwd2'];

$insert = mysqli_query($conn,"INSERT INTO `customer`(`firstname`, `lastname`, `address`, `phonenumber`, `email`, `password`, `reenterpassword`) 
  VALUES ('$firstname', '$lastname', '$address', '$phonenumber', '$email', '$password', '$reenterpassword')");
if($insert)
{
  header('Location: thanku.php');
}
else{
  echo "error";
}
}
?>

<div class="container">

    <h3 class="text-center" style="color:grey;"><i>User Registration</i></h3><br/>
    <h4 style="color:orange; border-bottom: 3px solid #dedede;">Personal Info</h4>
  
<form name="form" action="register.php" onsubmit="return checkForm(this);" method="post">
 <div class ="form-group col-md-5">

Firstname <input class="form-control" type="text" name="firstname" placeholder="Enter your first name"/> <br/>

Lastname <input class="form-control" type="text" name="lastname" placeholder="Enter your last name"/> <br/>

Address <input class="form-control" type="text" name="address" placeholder="Enter your address"/> <br/>

Phone number <input class="form-control" type="number" name="phonenumber" placeholder="Enter your phone number"/> <br/>

Email <input class="form-control" type="email" name="email" placeholder="Enter your valid email"/> <br/>

Password <input class="form-control" type="password" name="pwd1" placeholder="Enter your password"/> <br/>

Reenter Password <input class="form-control" type="password" name="pwd2" placeholder="Reenter your password"/> <br/>



<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

<input class ="btn btn-default" type="submit" value="Reset"/>
<input class ="btn btn-success" type="submit"  name="done" value="Sign Up"/>
</div>
</form>
</div>
<?php 
include("footer.php");
?>
</body>
</html>