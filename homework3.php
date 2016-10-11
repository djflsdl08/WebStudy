<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>1592004 김예진</title>
</head>
<body>
<h1>김예진 과제 #3</h1>
<h2>&lt; 1 &gt;</h2>
<?php
	$startClass = strtotime("Aug 29");
	echo "Start Class on : " . date("M d D", $startClass) . "<br>";

	$endClass = strtotime("+14 weeks", $startClass);
	$endClass = strtotime("Thursday", $endClass);
	echo "End Class on : " . date("M d D", $endClass) . "<br>";
?>
<br>
<table border="1">
	<caption>수업이 있는 날</caption>
	<thead>
		<tr><th>월요일</th><th>목요일</th></tr>
	</thead>
	<tbody>
	<?php $start = strtotime("Aug 29"); 
	 for($i=0;$i<15;$i++){ 
	 	
	 	$date = strtotime("+$i weeks",$start); ?>
		<tr><th><?php echo date("M d D",$date) ?></th>
		<?php $date = strtotime("Thursday",$date); ?>
			<th><?php echo date("M d D",$date) ?></th></tr>
	<?php }?>
	</tbody>
</table>
<hr><hr>

<h2>&lt; 2 &gt;</h2>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
		$mon = $_POST['month'];
		$day = $_POST['day'];
	}
?>
<?php
 echo "<h3>Today : ".date("M d D")."</h3>";
 ?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<fieldset>
	<legend>생일 입력</legend>
Month : <select name='month'>
<?php
$m = array("", "January", "February", "Mars", "April", "May", "June", "
	July", "August", "September", "October", "November", "December");
?>
<?php
	for($i = 1; $i <= 12; $i++) {
		echo "<option value='" . $i . "'>" . $i . "</option>";
	}
?>
</select>
<br><br>day : <select name='day'>
<?php
	for($j=1;$j<=31;$j++){
		echo "<option value='".$j."'>".$j."</option>";
	}
?>
</select>
<br><br>
<input type="submit" value="D-day">
</fieldset>
</form>
<hr>
<?php
	$birth = strtotime("$m[$mon] $day"); 
	$dday = ceil(($birth-time())/60/60/24); 
	if($dday<=0){
		$dday +=365 ;
	}
?>
<?php 
echo " <h2>D - ".$dday."!!!</h2>"; 
?>
</body>
</html>