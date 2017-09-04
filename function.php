	<?php
	function getAvg($resturant_id){

		$servername="localhost";
		$username="root";
		$password="";
		$database="onlinefood";
		$conn=mysqli_connect($servername,$username,$password,$database);
		$sql="SELECT AVG(`ratings`) FROM `ratinglist` where `resturant_id`='$resturant_id'";
		$query=mysqli_query($conn,$sql);
		$row=mysqli_fetch_row($query);
		return $row[0];
	}

	?>