<?php
	session_start();
	if(!isset($_SESSION['user']))
		header('Location: http://localhost/fms2/admin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
<body>
	<div class="navbar navbar-light navbar-fixed-top" style="background-color: #010024;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="adminhome.php" class="navbar-brand sslink1" style="font-size: 30px;">WheelSpin 2K19</a>
			</div>

			<div class="navbar-collapse collapse pull-right">
				<ul class="nav navbar-nav">
					<li><a class="sslink" href="adminhome.php">Home</a></li>
					<li><a class="sslink" href="database.php" id="database">Database</a></li>
					<li><a class="sslink" href="php/logout.php" style="color: lime" id="logout">Logout</a></li>
				</ul>					
			</div>
		</div>		
	</div>
	<div class="container">
		<div class="col-md-2">
			<label class="control-label">Select Event</label>
		</div>
		<div class="col-md-4">
			<select id="event" class="form-control">
				<option selected disabled>Select</option>
				<option value="codechef">Code Chef</option>
				<option value="darkcode">Dark Code</option>
				<option value="webatrix">Webatrix</option>
				<option value="langamming">Lan Gamming</option>
				<option value="ignite">Ignite</option>
				<option value="draftrix">Draftrix</option>
				<option value="keatso">Keatso</option>
				<option value="nirman">Nirman</option>
				<option value="brainvita">Brainvita</option>
				<option value="campusdrive">Campus Drive</option>
			</select>
		</div>
			<button type="button" id="sub" class="btn btn-info">Submit</button>
	</div>
	<div class="text-center" style="margin: 20px 0">
		<h1 id="heading"></h1>
	</div>
	<div id="data">
		
	</div>
	<div class="container foot">
		<div class="col-md-12">
			<span style="color: #111;">Design & Developed by : </span><span class="siddhantsontakke">Shubham Bawane , Mohammad Mujeeb Sheikh and Mayur Waghmare.</span>
		</div>
	</div>
	<div class="conatiner">
		<div class="row">
			<div class="col-md-12">
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h1 style="color: #111;">No Record Found</h1>
							</div>						
							<div class="modal-body">
								<span style="color: #111;">There is no entry for this event.</span>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-warning" data-dismiss="modal" onClick="refreshPage()">Close</button>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/database.js"></script>
</body>
</html>