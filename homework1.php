<!DOCTYPE html>
<html>
<body>

<?php
echo "<h1>1.</h1><h2><a href=\"http://jun.hansung.ac.kr/SWP/\">Server Web Programming</a></h2><hr>";
?>

<?php
echo "<h1>2.</h1>";
$email = "jun@hansung.ac.kr";
echo "입력 >> ".$email."<br>";
$pos = strpos($email,"@");
echo "출력 >> ".substr($email,0,$pos);
echo "<hr>";
?>

<?php
$time = "072506";
echo "<h1>3.</h1>";
echo trim(chunk_split($time,2,":"),":")."<hr>";
?>

<?php
echo "<h1>4.</h1>";
$URL = "http://jun.hansung.ac.kr/SWP";
echo "입력 >> ".$URL."<br>";
$position = strrpos($URL,'/');
echo "출력 >> ".substr($URL,$position+1);
echo "<hr>";
?>

<?php
echo "<h1>5.</h1>";
echo "<h3>&lt;while문 사용&gt;</h3>";
?>
<?php $x = 7; while(--$x) { ?>
       <h<?= 7-$x ?>>Heading <?= 7-$x ?> example</h<?= 7-$x ?>>
     <?php } ?>
<?php
echo "<h3>&lt;do-while문 사용&gt;</h3>"
?>
<?php $a = 6; do { ?>
       <h<?= 7-$a ?>>Heading <?= 7-$a ?> example</h<?= 7-$a ?>>
     <?php }while(--$a) ?>
<?php
echo "<h3>&lt;for문 사용&gt;</h3>"
?>
<?php for ($i = 1; $i <= 6; $i++) { ?>
       <h<?= $i ?>>Heading <?= $i ?> example</h<?= $i ?>>
     <?php } ?>
<hr>

<?php
echo "<h1>6.</h1>";
?>
<table border="1">
<?php for ($k = 1; $k <= 3; $k++) { ?>
	<tr>
	<?php for ($l = 1; $l <= 5; $l++) { ?>
		<td><?=$k?> row - <?=$l?> column"</td>
	<?php } ?>
	</tr>
<?php } ?>
</table>
<hr>

<?php
echo "<h1>7.</h1>";
?>
<table border="1">
<?php for ($t = 1; $t <= 9; $t++) { ?>
	<tr>
	<?php for ($v = 1; $v <= 9; $v++) { ?>
		<td><?=$t?> * <?=$v?>=<?=($t*$v)?></td>
	<?php } ?>
	</tr>
<?php } ?>
</table>
<hr>

<?php
echo "<h1>8.</h1>";
$midterm=array("Kim"=>"98","Lee"=>"51","Park"=>"74","Hong"=>"26","Lim"=>"49","Min"=>"92","Seong"=>"67","Ho"=>"88","Gyeong"=>"75","Han"=>"17","Kang"=>"39","Jang"=>"58","Jo"=>"62","Jin"=>"81","Choi"=>"41","No"=>"73","So"=>"53","Ji"=>"95","Yoon"=>"19","Sim"=>"65");
arsort($midterm);
foreach($midterm as $key=>$value){
	echo "Student $key's score is &quot;$value&quot;"."<br>";
}
?>
<hr>

<?php
echo "<h1>9.</h1>";
function factorial($num){
	static $result=1;
	$result = $result * $num;
	if($num<2) {
		echo "1 = ";
		return 1;
	}else {
		echo $num."*";
		return factorial($num-1)*$num;
	}
}
echo "5! = ";
echo factorial(5)."<br>";
echo "10! = ";
echo factorial(10)."<br>";
echo "3! = ";
echo factorial(3)."<br>";
?>
<hr>


<?php
echo "<h1>10.</h1>";
function isPrime($num){
	$count=0;
	for($s=2;$s<$num;$s++){
		if($num%$s==0) $count++;
	}
	if($count==0) return 1;
	else return 0;
}
echo "18전달 >> ";
echo isPrime(18)."반환<br>";
echo "23전달 >> ";
echo isPrime(23)."반환";
?>
</body>
</html>