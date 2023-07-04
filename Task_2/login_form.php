<?php
session_start(); 
require "DBconnection.php";
include "function_login.php";
logincheck();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<title>Bootstrap Sign up Form Horizontal</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>
		body {
			color: #999;
			background: #f3f3f3;
			font-family: 'Roboto', sans-serif;
		}

		.form-control {
			border-color: #eee;
			min-height: 41px;
			box-shadow: none !important;
		}

		.form-control:focus {
			border-color: #5cd3b4;
		}

		.form-control,
		.btn {
			border-radius: 3px;
		}

		.signup-form {
			width: 500px;
			margin: 0 auto;
			padding: 30px 0;
		}

		.signup-form h2 {
			color: #333;
			margin: 0 0 30px 0;
			display: inline-block;
			padding: 0 3px 10px 0;
			border-bottom: 3px solid #5cd3b4;
		}

		.signup-form form {
			color: #999;
			border-radius: 3px;
			margin-bottom: 15px;
			background: #fff;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}

		.signup-form .form-group row {
			margin-bottom: 20px;
		}

		.signup-form label {
			font-weight: normal;
			font-size: 14px;
			line-height: 2;
		}

		.signup-form input[type="checkbox"] {
			position: relative;
			top: 1px;
		}

		.signup-form .btn {
			font-size: 16px;
			font-weight: bold;
			background: #5cd3b4;
			border: none;
			margin-top: 20px;
			min-width: 140px;
		}

		.signup-form .btn:hover,
		.signup-form .btn:focus {
			background: #41cba9;
			outline: none !important;
		}

		.signup-form a {
			color: #5cd3b4;
			text-decoration: underline;
		}

		.signup-form a:hover {
			text-decoration: none;
		}

		.signup-form form a {
			color: #5cd3b4;
			text-decoration: none;
		}

		.signup-form form a:hover {
			text-decoration: underline;
		}
	</style>
</head>

<body>
	<div class="signup-form">
		<form action="login_form.php" method="post" class="form-horizontal">
			<div class="row">
				<div class="col-8 offset-4">
					<h2>Login</h2>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-4">Username</label>
				<div class="col-8">
					<input type="text" class="form-control" name="username" required="required">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-4">Password</label>
				<div class="col-8">
					<input type="password" class="form-control" name="password" required="required">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-8 offset-4">
					<input type="submit" name="login" value="Login"> <br><br>
				</div>
			</div>
		</form>
		<div class="text-center">
			<label class="form-check-label"> If You don't have username & password kindly : <a href="Registeration_form.php">Add Details</a>
		</div>
	</div>
</body>
</html>