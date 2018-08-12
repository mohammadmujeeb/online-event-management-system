<!DOCTYPE html>
<html>
<head>
	<title>Receipt</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
	<div class="col-md-4">
		<table class="table-borderless table-condensed table-hover">
			<thead><h1 class="text-center">Receipt</h1></thead>
			<tr>
				<td>Name : </td>
				<td><?php echo $_GET['name']; ?></td>
			</tr>
			<tr>
				<td>Collage : </td>
				<td><?php echo $_GET['collagename']; ?></td>
			</tr>
			<tr>
				<td>Year : </td>
				<td><?php echo $_GET['year']; ?></td>
			</tr>
			<tr>
				<td>Contact Number : </td>
				<td><?php echo $_GET['contactnumber']; ?></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><?php echo $_GET['email_id']; ?></td>
			</tr>
			<tr>
				<td>Event : </td>
				<td><?php echo $_GET['select_event']; ?></td>
			</tr>
			<tr>
				<td>Fees : </td>
				<td><?php echo $_GET['fees']; ?></td>
			</tr>
		</table>
	</div>
</body>
</html>