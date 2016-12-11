<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login']))
	header("Location:index.php");
$username = $_SESSION['login'];
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
<title>Repository Page</title>
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
      <span class="glyphicon glyphicon-search"></span>Search </button></a></center><br><br>
    <div class="well">
    <?php echo "<h3>".$_SESSION['login'] . "'s Repository</h3>"; ?>
	<hr>
	<?php
	$con = mysqli_connect('localhost','root','','yejin_db');
	$q = "SELECT * FROM upload WHERE user='$username'";
	$result = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result)) {
		$name = addslashes($row[1]);
		$comment = $row[4];
	?>
	<center>
		<h4><?php echo $name;?></h4>
		<img src=<?php echo "data:image/jpeg;base64,". base64_encode($row['data']) . "";?> width="250" height="200" alt="<?php echo $name;?>">
		<div><?php echo $comment; ?></div><br>
	</center>
	<?php } ?>
    </div>
</div>
</body>
</html>