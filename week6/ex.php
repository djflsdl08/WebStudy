<!DOCTYPE html>

<?php
$expire = time()+3600;
setcookie("user","Ye Jin",$expire);
if(isset($_COOKIE["user"]))
	$user=$_COOKIE["user"];
else 
	$user = "guest";
if(!isset($_COOKIE['visits']))
	$visits=0;
else
	$visits = $_COOKIE['visits'] + 1;
setcookie("visits",$visits,$expire);
?>
<?php
session_start();
if(isset($_SESSOIN['views']))
	$_SESSOIN['views']=$_SESSOIN['view']+1;
else
	$_SESSOIN['views']=1;
echo "Views=".$_SESSOIN['views'];
?>
<html>
<head>
<title>Week6</title>
</head>
<body>
<h2>김예진</h2>
<form action="upload_file.php" method="post" enctype="multipart/form-data">
<label for="file">Filename : </label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
<hr><hr>

<?php
echo $_COOKIE["user"]."<br>";
print_r($_COOKIE);
?>
<hr><hr>
<?php
if(isset($_COOKIE["user"]))
	echo "Welcome " . $_COOKIE["user"] . "!<br>";
else
	echo "Welcome guest!<br>";
?>
<hr><hr>
<form action="welcome.php" method="post">
Name: <input type="text" name="name2">
Age: <input type="text" name="age2">
<input type ="submit">
</form>
<hr><hr>
<?php
echo "Welcome " . $user . "!<br>";
if($visits>1)
	echo "You visited this site " . $visits . "times.";
else
	echo "Welcome to this site ! This is your first visit !";
?>
<hr><hr>
<?php
echo "Pageviews=".$_SESSOIN['views'];
?>
<?php
session_destroy();
?>
<hr><hr>
<form action="login.php" method="post">
    <input type="text" name="name" /> Name <br />
    <input type="password" name="pass" /> Password 
    <br />
<input type="submit" name="submit" value="Login" />
</form>
</body>
</html>