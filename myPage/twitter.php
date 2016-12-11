<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login']))
	header("Location:index.php");
$username=$_SESSION['login'];
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
<title>Twitter Page</title>
<style>
#div {
	float:left;
	width:91%;
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
		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span>
		<a href="twitter.php"><button type="button" class="btn btn-primary">Twitter</button></a>
		<a href="allContent.php"><button type="button" class="btn btn-primary">Content</button></a>
		<a href="repository.php"><button type="button" class="btn btn-primary">Repository</button></a>
		<a href="image.php"><button type="button" class="btn btn-primary">Upload</button></a>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a>Signed in as <?php echo $_SESSION['login']; ?></a></li>
			<li><a href="content.php">Home</a></li>
			<li><a href="edituser.php">Edit profile</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div><a href="search.php">
	<button type="button" class="btn btn-info" style="float:right">
      <span class="glyphicon glyphicon-search"></span>Search </button></a></center><br><br>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div id ="div" class="input-group">
      <span class="input-group-addon"><?php echo $username; ?></span>
      <input type="text" class="form-control" name="msg" placeholder="Enter Text">
      </div>
      <input type="submit" name="submit" value="Write" class="btn btn-success">
      </form>
      <?php
      $con = mysqli_connect('localhost','root','','yejin_db');
      $q = "SELECT * FROM twit ORDER BY id DESC";
      $result = mysqli_query($con,$q);
      $count = 0;
      while($row = mysqli_fetch_array($result)) {
      	$name = $row[1];
      	$text = $row[2];
      	$count++;
      	if($count%2==1) {
      ?>
      <div class="media">
   	 	<div class="media-left">
      	<img src="img.png" class="media-object" style="width:60px">
    	</div>
    	<div class="media-body">
    		<h4 class="media-heading" style="float:left"><?php echo $name; ?></h4><br>
      		<p style="float:left"><?php echo $text;?></p>
    	</div>
  	  </div>
  	  <hr>
      <?php }
      else { ?>
      	<div class="media">
    		<div class="media-body">
      			<h4 class="media-heading" style="float:right"><?php echo $name; ?></h4><br>
      			<p style="float:right"><?php echo $text;?></p>
    		</div>
    		<div class="media-right">
      		<img src="img.png" class="media-object" style="width:60px">
    		</div>
  		</div>
      <?php } } ?>
      <?php
      if(isset($_POST['submit'])) {
      	$enterText = addslashes($_POST['msg']);
      	$inq = "INSERT INTO twit(username,enterText) VALUES('$username','$enterText')";
      	if(mysqli_query($con,$inq))
      		header("Location:twitter.php");
      }
      ?>
</div>
</body>
</html>