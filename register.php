<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!--- Navigation bar -->
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="home.php" class="navbar-brand" style="font-size: 30px;">WheelSpin 2K19</a>
			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="home.php">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="codechef.php">Dark Code & Code Chef</a></li>
							<li><a href="brainvita.php">Brainvita</a></li>
							<li><a href="webatrix.php">Webaktrix</a></li>
							<li><a href="draftrix.php">Draftrix</a></li>
							<li><a href="nirman.php">Nirman</a></li>
							<li><a href="langamming.php">Lan Gaming</a></li>
							<li><a href="ignite.php">Ignite</a></li>
							<li><a href="keatos.php">Keatos</a></li>
							<li><a href="campusdrive.php">Campus Drive</a></li>
						</ul>
					</li>
					<li class="active"><a href="register.php">Register</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
				</ul>					
			</div>
		</div>		
	</div>
	<br>
	<div class="container" style="color: white">
		<div class="row">
			<div class="col-md-12">
				<form id="regform" class="myform form-horizontal col-sm-6 col-sm-push-3">
					<h1 class="text-center">Register Here<hr></h1><br>
					<div class="form-group">
						<label for="name" class="col-sm-4 control-label">Name</label>
						<div class="col-sm-8">
							<input type="text" id="name" class="form-control" placeholder="Enter Full Name...">
						</div>
					</div>
					<div class="form-group">
						<label for="collagename" class="col-sm-4 control-label">Collage Name</label>
						<div class="col-sm-8">
							<input type="text" id="collagename" class="form-control" placeholder="Enter Collage Name...">
						</div>
					</div>
					<div class="form-group">
						<label for="year" class="col-sm-4 control-label">Year</label>
						<div class="col-sm-8">
							<select id="year" class="form-control">
								<option selected disabled>Select</option>
								<option>1st Year</option>
								<option>2nd Year</option>
								<option>3rd year</option>
								<option>4th year</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="contactnumber" class="col-sm-4 control-label">Contact Number</label>
						<div class="col-sm-8">
							<input type="number" id="contactnumber" class="form-control" placeholder="Enter Contact Number...">
						</div>
					</div>
					<div class="form-group">
						<label for="email_id" class="col-sm-4 control-label">Email</label>
						<div class="col-sm-8">
							<input type="email" id="email_id" class="form-control" placeholder="Enter Email Name...">
						</div>
					</div>
					<div class="form-group">
						<label for="select_event" class="col-sm-4 control-label">Select Event</label>
						<div class="col-sm-8">
							<select id="select_event" class="form-control">
								<option selected disabled>Select</option>
								<option value="Code Chef">Code Chef</option>
								<option value="Dark Code">Dark Code</option>
								<option value="Webatrix">Webatrix</option>
								<option value="Lan Gamming">Lan Gamming</option>
								<option value="Ignite">Ignite</option>
								<option value="Draftrix">Draftrix</option>
								<option value="Keatso">Keatso</option>
								<option value="Nirman">Nirman</option>
								<option value="Brainvita">Brainvita</option>
								<option value="Campus Drive">Campus Drive</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="fees" class="col-sm-4 control-label">Event Fees</label>
						<div class="col-sm-8">
							<input type="text" id="fees" disabled="disabled" class="form-control" value="0">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-4">
							<button type="button" id="btnsub" disabled="disabled" class="btn btn-success">Submit</button>
							<button type="clear" class="btn btn-default">Clear</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="conatiner">
		<div class="row">
			<div class="col-md-12">
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h1 id="result"></h1>
							</div>						
							<div class="modal-body">
								<table class="table-borderless table-condensed table-hover">
									<thead><h1>Receipt</h1></thead>
									<tr>
										<td>Name </td>
										<td><span id="name1"></span></td>
									</tr>
									<tr>
										<td>College </td>
										<td><span id="collage1"></span></td>
									</tr>
									<tr>
										<td>Year </td>
										<td><span id="year1"></span></td>
									</tr>
									<tr>
										<td>Contact Number </td>
										<td><span id="contactnumber1"></span></td>
									</tr>
									<tr>
										<td>Email </td>
										<td><span id="email1"></span></td>
									</tr>
									<tr>
										<td>Event </td>
										<td><span id="event1"></span></td>
									</tr>
									<tr>
										<td>Fees </td>
										<td><span id="fees1"></span></td>
									</tr>										
								</table>
							</div>
							<div class="modal-footer">
								<button type="button" onclick="HTMLtoPDF()" class="btn btn-success">Generate Receipt</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal" onClick="refreshPage()">Close</button>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>
	<div class="container foot">
		<div class="col-md-12">
			Design & Developed by : <span class="siddhantsontakke">Shubham Bawane , Mohammad Mujeeb Sheikh and Mayur Waghmare.</span> 
		</div>
	</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/register.js"></script>
<script src="js/jspdf.js"></script>
<script src="js/pdfFromHTML.js"></script>
</body>
</html>