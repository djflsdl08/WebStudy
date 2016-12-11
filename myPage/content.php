<!DOCTYPE HTML>
<?php
session_start();
if(!isset($_SESSION['login']))
	header("Location:index.php");

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
<title>Content Page</title>
<style>
#div {
	display: inline-block;
	margin:10px;
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
      <span class="glyphicon glyphicon-search"></span>Search </button></a></center><br><br>
    <div class="well">
    <center>
    <div id="div">
    <h3>NewYork</h3>
    <p>Let's travel to New York in U.S.A</p>
    <img src="shake.jpeg" class="img-circle" alt="Cinque Terre" width="304" height="236">
    </div>
    <div id="div">
    <h3>Seoul</h3>
    <p>Let's travel to Seoul in Korea</p>
    <img src="naksan.png" class="img-circle" alt="Cinque Terre" width="304" height="236">
    </div>
    <div id="div">
    <h3>St.Louis</h3>
    <p>Let's travel to St.Louis in U.S.A</p>
    <img src="stLouis.jpeg" class="img-circle" alt="Cinque Terre" width="304" height="236">
    </div>
    </center>
</div>
</body>
</html>