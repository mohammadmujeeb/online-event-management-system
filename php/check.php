<?php
	session_start();
	require "connect.php";
	$user_id = htmlentities($_POST['user_id']);
	$password = htmlentities($_POST['password']);
	$query = "SELECT * FROM user WHERE username = '$user_id'";
	$data = mysqli_query($conn, $query);
	if(isset($user_id) && isset($password))
	{
		if($row = mysqli_fetch_assoc($data))
		{
			if ($row['password'] == $password) {
				echo "true";
				$_SESSION['user'] = "Admin";
			}
		}
		else
		{
			echo "false";
		}
	}
?>