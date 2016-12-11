<!DOCTYPE HTML>
<?php
session_start();
$con = mysqli_connect('localhost','root','','yejin_db');
if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(empty($_POST['username']))
		echo "<script>alert('Please enter Username!')</script>";
	else if(empty($_POST['password']))
		echo "<script>alert('Please enter Password!')</script>";
	else {
		$q = "SELECT username,password FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($con,$q);
		if(mysqli_num_rows($result)>0){
			$_SESSION['login'] = $username;
			header("Location:content.php");
		}
		else
			echo "<script>alert('Wrong username or password!')</script>";
	}
}
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
</script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
</script>
<style>
input {
	margin:2px;
	width: 10em;
	padding-left: 0.5em;
}
span {
    text-align: right;
    padding-right: 1em;
}
</style>
<title>Yejin's Travel Notes</title>
</head>
<body>
<div class="container">
	<div class="jumbotron">
		<center>
		<h1>Travel Notes with Yejin</h1><br><br>
		<p>The purpose of this site is to share travel information.</p>
		</center>
	</div>
	<center>
	<div class="well">
	<form method="post" action="index.php">
  	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    	<input type="text" class="form-control" name="username" placeholder="username">
  	</div>
  	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    	<input id="password" type="password" class="form-control" name="password" placeholder="Password">
  	</div><br>
  		<a href="registration.php"><button type="button" class="btn btn-info">Sign up</button></a>
		<input type="submit" name="submit" value="Sign in" class="btn btn-success">
		<a href="admin.php"><button type="button" class="btn btn-primary">Admin</button></a>
		<!--<button type="button" class="btn btn-warning">Find account</button>-->
	</form>
	</div>
	</center>
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Do you want to participate?</h2></div>
			<div class="panel-body">
			<h5>If you want to participate in site of Travel Notes with Yejin, Please click the <button type="button" class="btn btn-info">Sign up</button> button.</h5></div>
		</div><br>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Already a member?</h2></div>
			<div class="panel-body">
				<h5>If you're already enrolled in site of Travel Notes with Yejin, Please Enter your username and Password and click the 
				<button type="button" class="btn btn-success">Sign in</button>
				button.</h5><br>
				<!--<h5>If you forgot your username or password, Please click the <button type="button" class="btn btn-warning">Find account</button> button.</h5>-->
				</div>
		</div>
	</div>
</div>
</body>
</html>