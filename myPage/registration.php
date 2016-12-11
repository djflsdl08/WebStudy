<!DOCTYPE HTML>
<?php
session_start();
$con = mysqli_connect('localhost','root','','yejin_db');

if(isset($_POST['signin'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$birth = $_POST['birth'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	
	if(empty($_POST['username'])||empty($_POST['password'])||empty($_POST['email']))
		echo "<script>alert('Please enter required fields of username, password and email')</script>";
	else {
		$q = "SELECT * FROM users WHERE username='$username' OR email='$email'";
		$result = mysqli_query($con,$q);
		if(mysqli_num_rows($result)>0)
			echo "<script>alert('Username or email is already exist!')</script>";
		else {
			$q = "INSERT INTO users(username,password,email,birthday,age,gender) 
				VALUES('$username','$password','$email','$birth','$age','$gender')";
			if(mysqli_query($con,$q)) {
				$_SESSION['login'] = $username;
				header("Location:content.php");
			}
		}
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
<title>Sign up</title>
<style>
.affix {
	top:0;
	width:77%;
}
input {
	margin:5px;
}
span {
	float:left;
	width:70px;
	text-align: left;
}
</style>
</head>
<body>
<?php
$name = $pass = $email = $birth = $age = $gender="";

if($_SERVER["REQUEST_METHOD"] == "POST") {
	if(!empty($_POST["username"]))
		$name = test_input($_POST["username"]);
	if(!empty($_POST["password"]))
		$pass = test_input($_POST["password"]);
	if(!empty($_POST["email"]))
		$email = test_input($_POST["email"]);
	//if(!empty($_POST["birth"]))
		$birth = test_input($_POST["birth"]);
	//if(!empty($_POST["age"]))
		$age = test_input($_POST["age"]);
	//if(!empty($_POST["gender"]))
		$gender = test_input($_POST["gender"]); 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<div class="container">
	<div class="jumbotron">
	<h1 align="center">Travel Notes with Yejin</h1>
	</div>
	<div class="well">
		<h1>Join Travel Notes</h1>
		<p>The best way to share your travel experience.</p>
		<hr>
		<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  		<ul class="nav navbar-nav">
    		<li class="active"><a href="#">JoinStep</a></li>
    		<li><a href="#step1">Step 1</a></li>
    		<li><a href="#step2">Step 2</a></li>
    		<li><a href="#step3">Step 3</a></li>
  		</ul>
		</nav>
		<div class="container-fluid" style="height:900px">
			<h1>Create your personal account</h1><br>
			
			<div class="well">
			<h3><a name="step1">Step 1</a></h3>
			<h4>Please enter username and password.</h4>

			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
				<span>Username</span><input type="text" name="username" value="<?php echo $name;?>">
				<!--<button type="button" class="btn btn-warning">Check</button>--><br>
				<span>Password</span><input type="password" name="password" value="<?php echo $pass;?>"><br>

			<h3><a name="step2">Step 2</a></h3>
			<h4>Please enter personal information.</h4>
			<span>E-mail</span><input type="email" name="email" value="<?php echo $email; ?>">
			<!--<button type="button" class="btn btn-warning">Check</button>--><br>
			<span>Birthday</span><input type="date" name="birth" placeholder="yyyy-mm-dd" value="<?php echo $birth; ?>"><br>
			<span>Age</span><input type="text" name="age" value="<?php echo $age; ?>"><br>
			<span>Gender</span>
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male

			<h3><a name="step3">Step 3</a></h3>
			<h4>Please confirm that the information you entered is correct.</h4><br>
			Click the <input type="submit" name="submit" value="confirm" class="btn btn-danger"> button.
			
			<br><br>

			<?php if($_SERVER["REQUEST_METHOD"] == "POST") {
				echo "<table border='2'>";
				echo "<tr><th>Username</th><td>".$name."</td></tr>";
				echo "<tr><th>Password</th><td>".$pass."</td><tr>";
				echo "<tr><th>E-mail</th><td>".$email."</td><tr>"; 
				echo "<tr><th>Birthday</th><td>".$birth."</td><tr>";
				echo "<tr><th>Age</th><td>".$age."</td><tr>";
				echo "<tr><th>Gender</th><td>".$gender."</td><tr>";
				echo "</table>"; } ?>
		</div>
		<?php if($_SERVER["REQUEST_METHOD"]=="POST") {
		echo "If all information is accurate, please click on button below.";
		} ?>
		<br>
		<a href="index.php"><button type="button" class="btn btn-info">Back</button></a>
		<input type="submit" name="signin" class="btn btn-success" value="Sign in" style="float:right;">
		</form>
	</div>

	</div>
</div>
</body>
</html>