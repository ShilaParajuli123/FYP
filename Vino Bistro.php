<?php
session_start();
include("header.php");
include('connection.php');
?> 
<div class="container">
	<center><h2>Vino Bistro</h2>
			<h4>Lazimpat,Kathmandu</h4><br>
			<center><img src="images/vino.jpg" >
				<br>
				<div style="font-family: Cabrial;font-size: 20px; padding: 0px;" >
					<br><p>If you love wine and have got taste for cheese then Vino Bistro is the place to be. Not only the restaurant serves you with one of the best Sandwich and Panini in town.<br>
					</p>
				</div>
			</center>
		</center>
</div>
<div style="position:absolute;vertical-align:middle;text-align:center;">

<center><button type="button" class="btn btn-info" style="text-align:center; margin-left:600px;  display:block; margin-bottom:0%"><a href="vinomenu.php">View Menu</a></button></center>
</div>
</div>
</br>
</br>
</br>
<div>
  <?php 
     include("footer.php");
  ?>
</div>
</body>
</html>

