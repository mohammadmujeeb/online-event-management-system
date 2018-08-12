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
					<li class="active"><a class="sslink" href="#home" id="homeid">Home</a></li>
					<li><a class="sslink" href="database.php" id="database">Database</a></li>
					<li><a class="sslink" href="php/logout.php" style="color: lime" id="logout">Logout</a></li>
				</ul>					
			</div>
		</div>		
	</div>

	<marquee behavior="alternate">
		 	<p style="font-family: Impact; font-size: 16pt">
		 		2019 presents the biggest technical fest in BDCE followed by Colors. A National Level Technical Fest is organized this spring.
		 	</p>
		 </marquee>
	<div class="container">
		<div class="col-md-6 col-md-push-3 myform" id="myform1" style="margin-top: 25px;">
			<h1 class="text-center">Welcome To The Admin Module</h1>
			<div class="text-center" style="margin: 60px 0;">
				<a href="database.php" style="font-size: 20px;" class="btn btn-info">View Registed Students</a>
			</div>
		</div>
	</div>
	<div class="container foot">
		<div class="col-md-12">
			<span style="color: #111;">Design & Developed by : </span><span class="siddhantsontakke">Shubham Bawane , Mohammad Mujeeb Sheikh and Mayur Waghmare.</span>
		</div>
	</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/admin.js"></script>
</body>
</html>