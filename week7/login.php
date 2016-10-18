<?php

if(!isset($_POST["user"])||$_POST["user"]=="") {
	die("Error:missing required parameter !!! ");
}
$user = $_POST["user"];
$pass = $_POST["pass"];

$granted = false;
$userfile = "users.txt";
$users = explode("\n",file_get_contents($userfile));
foreach($users as $each) {
	$info = explode(":",$each);
	if($user == trim($info[0])&& $pass == trim($info[1])) {
		$granted = true;
		break;
	}
}
session_start();
//echo $user . ":" . $pass . " has been " . $granted;
if($granted) {
	$_SESSION["login"] = $user;
	header("Location:page-1.php");
}
else {
	header("Location:front.php");
}
?>