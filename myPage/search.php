<!DOCTYPE html>
<?php
session_start();
if(!isset($_POST['login']))
	header("Locagion:index.php");

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
	<title>Search Page</title>
	<style>
	.b {
		float:left;
		font-weight: bold;
		text-align: right;
		width:45%;
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
    <center><form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="search">
    <button type="submit" class="btn btn-default" name="submit">
      <span class="glyphicon glyphicon-search"></span> Search
    </button>
    </form></center>
    <hr>
    <?php
    $count = 0;
    $con = mysqli_connect('localhost','root','','yejin_db');
    if(isset($_POST['submit'])) {
    	$search = $_POST['search'];
    	if($search=="")
    		header("Location:search.php");
    	echo "<script>alert('Search $search...')</script>";
    	$quser = "SELECT * FROM users WHERE username='$search'";
    	$result = mysqli_query($con,$quser);
    	if($row = mysqli_fetch_array($result)) {
    		$count++;
    		if($row[4]=="0000-00-00")
    			$row[4]="";
    		if($row[5]=="0")
    			$row[5]="";

    		echo "<h3>username = $search</h3><br>";
    		echo "<div class='well'>
    		<span class='b'> username </span> = ".$row[1]."<br>
    		<span class='b'> email </span> = ".$row[3] ."<br>
    		<span class='b'> birthday </span> = ".$row[4]."<br>
    		<span class='b'> age </span> = ".$row[5]."<br>
    		<span class='b'> gender </span> = ".$row[6]."
    		</div>";
    	
    		$qtwit = "SELECT * FROM twit WHERE username='$search'";
    		$result2 = mysqli_query($con,$qtwit);
    		echo "<h3>Twitter</h3><div class = 'well'>";
    		while($row2 = mysqli_fetch_array($result2)) {
    			echo "<span class='b'> username </span> = ".$row2[1]."<br>
    			<span class='b'> Text </span> = ".$row2[2]."<br>";
    		}
    		echo "</div>";

    		$qupload = "SELECT * FROM upload WHERE user = '$search'";
    		$result3 = mysqli_query($con,$qupload);
    		echo "<h3>Upload Image</h3><div class='well'>";
    		while($row3 = mysqli_fetch_array($result3)) {
    			echo "<span class='b'> imgae name </span> = ".$row3[1]."<br><span class='b'> comment </span> = ". $row3[4]."<br>";
    		}
    		echo "</div>";
    	}
    	else {
    		$qtwit2 = "SELECT * FROM twit";
    		$result4 = mysqli_query($con,$qtwit2);
    		echo "<h3>Twitter</h3><div class='well'>";
    		while($row4 = mysqli_fetch_array($result4)) {
    			$piece = explode(" ",$row4[2]);
    			$len = count($piece);
    			while($len!=-1) {
    				if($piece[count($piece)-$len]==$search)
    					echo "<span class='b'> username </span> = ".$row4[1]."<br>
    						<span class='b'> Text </span> = ".$row4[2]."<br>";
    						$len--;
    			}
    		}
    		echo "</div>";

    		$qupload2 = "SELECT * FROM upload";
    		$result5 = mysqli_query($con,$qupload2);
    		echo "<h3>Upload Image</h3><div class='well'>";
    		while($row5 = mysqli_fetch_array($result5)) {
    			$piece2 = explode(".jpeg",$row5[1]);
    			if($piece2[0]==$search)
    				echo "<span class='b'> imgae name </span> = ".$row5[1]."<br>
    				<span class='b'> username </span> = ".$row5[3]."<br>
    				<span class='b'> comment </span> = ". $row5[4]."<br>";
    		}
    		echo "</div>";
    	}
    }
    ?>
    </div>
</div>
</body>
</html>