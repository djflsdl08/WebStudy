<!DOCTYPE html>
<head>
</head>

<body>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<fieldset>
<legend>Order Form</legend>
<input type="text" size="2" name="cookie">
<img src="http://jun.hansung.ac.kr/SWP/HW/Order/cookie.gif" width="50" height="50"> Cookie X $1.50
<br>
<input type = "text" size = "2" name = "CandyBar">
<img src="http://jun.hansung.ac.kr/SWP/HW/Order/snickers.jpg" width = "30" height = "50"> Candy Bar X $2.00
<br>
shipping : <input type = "radio" name = "shipping" value = "1"> Regular ($6)
		   <input type = "radio" name = "shipping" value = "2"> Express ($10)
		   <br>
Donation : <input type = "checkbox" name = "donate" value ="1"> $5 extra
<br><br>
<input type="submit" name ="button" value ="Buy Now!">
</fieldset>
</form>
<hr>
<?php if($_POST['button']){?>
<fieldset>
<legend>Your Order</legend>
<?php if(isset($_POST['cookie'])) {
	$num = $_POST['cookie'];?>
	<?php for($i = 0;$i<$num;$i++){ ?>
		<img src="http://jun.hansung.ac.kr/SWP/HW/Order/cookie.gif" width="50" height="50">
		<?php $total += 1.5;?>	<?php } ?>
<?php } ?>
<?php if(isset($_POST['CandyBar'])) {
	$num2 = $_POST['CandyBar'];?>
	<?php for($j = 0;$j<$num2;$j++){ ?>
		<img src="http://jun.hansung.ac.kr/SWP/HW/Order/snickers.jpg" width="50" height="50">
		<?php $total += 2.00;?>
	<?php } ?>
<?php } ?><br><br>
<?php 
if($_POST['shipping']=="1")
	$total += 6;
else if($_POST['shipping']=="2")
	$total += 10;
if($_POST['donate']=="1"){
	$total += 5;
	$donate = 1;
}
?>
Total order cost : <b>$<?= $total ?></b>
<?php if($donate == 1)
	 echo "<br><br>Thank you for your donation!";
 ?>
</fieldset>
<?php } ?>
</body>
</html>