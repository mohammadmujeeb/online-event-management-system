<?php 
	require "connect.php";

	$name = htmlentities($_POST['name']);
	$collagename = htmlentities($_POST['collagename']);
	$year = htmlentities($_POST['year']);
	$contactnumber = htmlentities($_POST['contactnumber']);
	$email_id = htmlentities($_POST['email_id']);
	$fees = htmlentities($_POST['fees']);
	$query = "INSERT INTO ignite(name, collagename, year, contactnumber, email_id, fees) 
	VALUES('$name', '$collagename', '$year', $contactnumber, '$email_id', $fees)";
	if(mysqli_query($conn, $query))
		echo "true";
	else
		echo "Error discription : ".mysqli_error($conn);
 ?>