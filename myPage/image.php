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
<title>Upload Page</title>
<style>
.btn-group {
	float:right;
}
</style>
</head>
<body>
<br><br>
<div class="container">
<div class="btn-group">
		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span></button>
		<a href="twitter.php"><button type="button" class="btn btn-primary">Twitter</button></a>
		<a href="allContent.php"><button type="button" class="btn btn-primary">Content</button></a>
		<a href="repository.php"><button type="button" class="btn btn-primary">Repository</button></a>
		<ul class="dropdown-menu" role="menu">
			<li><a>Signed in as <?php echo $username; ?></a></li>
			<li><a href="content.php">Home</a></li>
			<li><a href="edituser.php">Edit profile</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
</div><br><br><br>
<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Travel Notes With Yejin</h4>
				<h1 align="center">Upload</h1></div>
			<div class="panel-body">
				<form method="POST" action="image.php" enctype="multipart/form-data">
				FILE : <input type="file" name="image" multiple /><br />
						<div class="form-group">
  						<label for="comment">Comment:</label>
  						<textarea class="form-control" rows="5" name="comment"></textarea>
						</div>
					   	<input type="submit" class="btn btn-default" value="Upload" style="float:right">
				</form><br><br><hr>
				<?php
				$con = mysqli_connect('localhost','root','','yejin_db');	
				$file = $_FILES['image']['tmp_name'];

				if(!isset($file))
					echo "Please select an image!";
				else {
					$data = addslashes(file_get_contents($_FILES['image']['tmp_name']));
       				$name = addslashes($_FILES['image']['name']);
 			       	$size = getimagesize($_FILES['image']['tmp_name']);
 			       	$comment = addslashes($_POST['comment']);
					if($size == FALSE)
						echo "That's not an image!";
					else {
						$sql = "INSERT INTO upload(name,data,user,comment) VALUES('$name','$data','$username','$comment')";
						if(!mysqli_query($con,$sql))
							echo "Problem in uploading image!";
						else {
							echo "<script>alert('File uploaded successfully!')</script><center><p>Your image : $name</p>";
						}
					}
				}
				if(isset($file)) {
				?><br><br>
				<textarea class='form-control'><?php echo $_POST['comment'];?></textarea></center>
			<?php } ?>
			</div>
		</div>
</div>
</div>
</body>
</html>