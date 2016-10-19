<!DOCTYPE html>
<?php
/*
session_start();
if(!isset($_SESSION["login"])) {
	header("Location:front.php");
} top.php 에서 작성 */
	require("top.php");
?>
<html>
<head>
<meta charse="UTF-8" />
<title>Login Sample Code</title>
</head>
<body>
<h1> <?=$_SESSION["login"]?>'s Page after logged-in : page 1 </h1>
<ul>
	<li> This is page 1 : one </li>
    <li> This is page 1 : two </li>
    <li> This is page 1 : three </li>
	<li> This is page 1 : four </li>
    <li> This is page 1 : five </li>
</ul>
	<a href = "page-2.php"><b>go to Page 2</b></a> <br>
	<hr>
	<?php
		require("bottom.php");
	?>
</body>
</html>
