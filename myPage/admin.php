<!DOCTYPE html>
<?php
session_start();
$con = mysqli_connect('localhost','root','','yejin_db');

if(isset($_POST['submit'])) {
	$adminname = $_POST['admin_username'];
	$adminpass = $_POST['admin_password'];
	if(empty($_POST['admin_username']))
		echo "<script>alert('Please enter Username!')</script>";
	else if(empty($_POST['admin_password']))
		echo "<script>alert('Please enter Password!')</script>";
	else {
		$q = "SELECT admin_name, admin_pass FROM admin 
				WHERE admin_name='$adminname' AND admin_pass='$adminpass'";
		$result = mysqli_query($con,$q);
		if(mysqli_num_rows($result)>0) {
			$_SESSION['admin_login'] = $adminname;
			header("Location: admin_users.php");
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
<script>
function goBack() {
	window.history.back();
}
</script>
<title>Admin Page</title>
<style>
input {
	margin:5px;
}
</style>
</head>
<body>
<br><br>
<div class="container">
<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Travel Notes With Yejin</h4>
				<h1 align="center">Admin Login</h1></div>
			<div class="panel-body" align="center">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
				<span>Username</span><input type="text" name="admin_username" value="<?php echo $adminname;?>"><br>
				<span>Password</span><input type="password" name="admin_password" value="<?php echo $adminpass;?>"><br> 
				<input type="submit" name="submit" value="Login" class="btn btn-success">
			</form>
			</div>
		</div><br>
		<button type="button" class="btn btn-warning" style="float:left;" onclick="goBack()">Back</button>
	</div>
</div>
</body>
</html>