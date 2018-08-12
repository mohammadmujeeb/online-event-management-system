<?php
	session_start();
	if(!isset($_SESSION['user']))
		header('Location: http://localhost/fms2/admin.php');
	require "connect.php";
	$event = $_POST['event'];
	$query = "SELECT * FROM $event";
	$result = mysqli_query($conn,$query);
	$row_count = mysqli_num_rows($result);
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<style>
		tr:hover
		{
			color: black;
		}
	</style>
<body>
	<table class="table table-hover" cellpadding="20">
			<tr>
				<th>Sr. No</th>
				<th>Name</th>
				<th>College</th>
				<th>Year</th>
				<th>Contact Number</th>
				<th>Email</th>
				<th>Fees</th>
			</tr>
			<?php $i=1; if ($row_count > 0) { while($row = mysqli_fetch_assoc($result)) { ?>
			
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['collagename']; ?></td>
				<td><?php echo $row['year']; ?></td>
				<td><?php echo $row['contactnumber']; ?></td>
				<td><?php echo $row['email_id']; ?></td>
				<td><?php echo $row['fees']; ?></td>
				<?php $i++; } ?>
			</tr>

	</table>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/database.js"></script>
</body>
</html>
<?php
 }
 else
	{
		echo "false";
	}
?>