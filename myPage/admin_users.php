<!DOCTYPE html>
<?php
session_start();
$con = mysqli_connect('localhost','root','','yejin_db');
if(!isset($_SESSION['admin_login']))
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
<title>Admin_users page</title>
<style>
table {
	text-align: center;
}
tbody tr:hover {
	background-color: lightgray;
}
</style>
<?php
$editId = $editPass = "";

if(isset($_POST['editbutton'])) {
	$editId = $_POST['editID'];
	$editPass = $_POST['editPass'];
	mysqli_query($con,"UPDATE users SET password='$editPass' WHERE id='$editId'"); 
}
?>
</head>
<body>
<br><br>
<div class="container">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading" align="center">
				<h1>Admin Panel for Users Management</h1>
			</div>
			<div class="panel-body" align="center">
			<table border="2">
			<tr><thead>
			<th>Id</th><th>Username</th><th>Password</th><th>E-mail</th><th>Birthday</th><th>Age</th><th>Gender</th><th>Delete</th><th>Edit</th>
			</tr></thead><tbody><form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<?php
			$q = "SELECT * FROM users";
			$result = mysqli_query($con,$q);
			while($row = mysqli_fetch_array($result)) {
				$id = $row[0];
				$username = $row[1];
				$password = $row[2];
				$email = $row[3];
				if($row[4]=="0000-00-00")
					$birth = "";
				else
					$birth = $row[4];
				if($row[5]=="0")
					$age="";
				else
					$age = $row[5];
				$gender = $row[6];
			?>                
			<tr><td><?php echo $id; ?></td><td><?php echo $username; ?></td>
			<td><?php echo $password; ?></td><td><?php echo $email; ?></td>
			<td><?php echo $birth; ?></td><td><?php echo $age; ?></td>
			<td><?php echo $gender; ?></td>
			<td><a href="delete.php?del=<?= $id ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
			<td><input type="radio" name="editID" value="<?php echo $id; ?>"></td></tr>
			<?php } ?>
			</tbody></table>
			</div><center>
			<input type="text" name="editPass" placeholder="Password">
			<button type="submit" class="btn btn-default btn-sm" name="editbutton">
          <span class="glyphicon glyphicon-pencil"></span> Edit Password
        </button>
        </center></form><br>
		</div><br>
	<a href="logout.php"><button type="button" class="btn btn-success" style="float:right">Logout</button></a>
	</div>                    
</div>                        
</body>                       
</html>                       