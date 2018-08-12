<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<div class="col-xs-12 col-md-4 col-md-push-4">
		<form class="form myform" id="myform">
			<h1 class="text-center">Admin Login</h1>
				<div class="form-group">
					<label>User Id</label>
					<input type="text" name="user_id" id="user_id" class="form-control" placeholder="User Id">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" id="password" class="form-control"  placeholder="Password">
				</div>
				<div class="form-group">
					<input type="button" name="login" id="login" value="Log In" class="btn mybtn form-control">
				</div>
		</form>
	</div>
	<div class="conatiner">
		<div class="row">
			<div class="col-md-12">
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h1 style="color: #111;" id="result"></h1>
							</div>						
							<div class="modal-body">
								<span style="color: #111;" id="msg"></span>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-info" data-dismiss="modal" onClick="refreshPage()">Okay!</button>
							</div>
						</div>
					</div>				
				</div>
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