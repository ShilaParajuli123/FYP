<?php
include("header.php");
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
<div class="container">

                           <h3 class="text-center" style="color:green;"><i>User Registration</i></h3><br/>
                           <h4 style="color:orange; border-bottom: 3px solid #dedede;">Personal Info</h4>
  
<form name="form" action="thanku.php" onsubmit="return checkForm(this);" method="post">
 <div class ="form-group col-md-5">

<p>Firstname: <input type="text" name="firstname"></p><br/>
<p>Lastname: <input type="text" name="lastname"></p><br/>
<p>Address: <input type="text" name="address"></p><br/>
<p>Phonenumber: <input type="number" name="phonenumber"></p><br/>
<p>Email: <input type="email" name="email"></p><br/>
<p>Password: <input type="password" name="pwd1"></p><br/>
<p>Confirm Password: <input type="password" name="pwd2"></p>
<p><input type="checkbox"> Remember me </p>
<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

<input class ="btn btn-default" type="submit" value="Reset"/>
<a href="thanku.php"><input class ="btn btn-success" type="submit" value="Sign Up"/></a>




</form>
</div>
</body>
</html>