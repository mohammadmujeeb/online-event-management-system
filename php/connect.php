<?php 
	$address = "localhost";
	$username = "root";
	$password = "";
	$db_name = "fms";
	$conn = mysqli_connect($address, $username, $password, $db_name);
	if(!$conn)
		echo "Error connecting to database...";
 ?>