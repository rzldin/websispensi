<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PPDB Nama Sekolah</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="../img/favicon.ico">
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
	<div class="container">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-4">
					
				</div>
				<div class="col-sm-4 well">
						<img src="<?php echo base_url()?>assets/img/logo.jpg" height="100px" width="100px" align="center">
					<h2>LOGIN ADMIN</h2>
					<hr><br><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="user" type="text" class="form-control" name="user" placeholder="Username">
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="sandi" type="password" class="form-control" name="sandi" placeholder="Password">
					</div>
					<br><br>
						<button type="submit" class="btn btn-default">LOGIN</button>
				</div>
				
				<div class="col-sm-4">
					
				</div>
			</div>
		</div>
	</div>
	</body>
</html>