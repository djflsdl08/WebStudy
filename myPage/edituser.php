<!DOCTYPE html>
<?php
session_start();
$con = mysqli_connect('localhost','root','','yejin_db');
if(!isset($_SESSION['login']))
	header("Location:index.php");
else {
	$username = $_SESSION['login'];
	$q = "SELECT * FROM users WHERE username='$username'";
	$result = mysqli_query($con,$q);
	$row = mysqli_fetch_array($result);
	$pass = $row[2];
	$email = $row[3];
	$birth = $row[4];
	$age = $row[5];
	$gender = $row[6];

	if(isset($_POST['edit'])) {
		$pass = $_POST['password'];
		$email = $_POST['email'];
		$birth = $_POST['birth'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		mysqli_query($con,"UPDATE users SET password='$pass', email='$email', birthday= '$birth', age='$age', gender='$gender' WHERE username='$username'");
	}
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
</script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
</script>
<meta charset="UTF-8">
<title>Edit Page</title>
<style>
input {
	margin:5px;
}
span.form {
	float:left;
	width:45%;
	text-align: right;
	margin:5px;
}
</style>
</head>
<body>
<div class="container">
<div class="jumbotron" align="center">
		<h1>Travel Notes with Yejin</h1>
	</div>
	<center>
	<a href="admin.php"><button type="button" class="btn btn-warning" style="float:left">Admin</button></a>
	<div class="btn-group">
		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span></button>
		<a href="twitter.php"><button type="button" class="btn btn-primary">Twitter</button></a>
		<a href="allContent.php"><button type="button" class="btn btn-primary">Content</button></a>
		<a href="repository.php"><button type="button" class="btn btn-primary">Repository</button></a>
		<a href="image.php"><button type="button" class="btn btn-primary">Upload</button></a>
		<ul class="dropdown-menu" role="menu">
			<li><a>Signed in as <?php echo $_SESSION['login']; ?></a></li>
			<li><a href="content.php">Home</a></li>
			<li><a href="edituser.php">Edit profile</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div><a href="search.php">
	<button type="button" class="btn btn-info" style="float:right">
      <span class="glyphicon glyphicon-search"></span>Search</button></a></center><br>
	<div class="well">
		<?php echo "<h3>".$_SESSION['login'] . "'s Profile</h3>"; ?>
		<hr>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<span class="form">Password</span>
		<input type="text" name="password" value="<?php echo $pass; ?>"><br>
		<span class="form">E-mail</span><input type="text" name="email" value="<?php echo $email;?>"><br>
		<span class="form">Birthday</span><input type="date" name="birth" value="<?php echo $birth;?>"><br>
		<span class="form">Age</span><input type="text" name="age" value="<?php echo $age;?>"><br>
		<span class="form">Gender</span>
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male<br>
		<input type="submit" value="Save" name="edit" class="btn btn-success" style="float:right">
		</form><br><br>	
	</div>
</div>
</body>
</html>