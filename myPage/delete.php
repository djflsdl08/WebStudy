<?php
$con = mysqli_connect('localhost','root','','yejin_db');
$delete_id = $_GET['del'];
$q = "SELECT * FROM users WHERE id='$delete_id'";
$result = mysqli_query($con,$q);
$row = mysqli_fetch_array($result);
$username = $row[1];

$query = "DELETE FROM users WHERE id='$delete_id'";
$query2 = "DELETE FROM upload WHERE user='$username'";
$query3 = "DELETE FROM twit WHERE username='$username'";

if(mysqli_query($con,$query)&&mysqli_query($con,$query2)&&mysqli_query($con,$query3))
	header("Location:admin_users.php");
?>