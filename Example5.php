<!DOCTYPE html>
<html>
<body>
<?php
echo "Today is " . date("Y/m/d") . "<br>";		//result : Today is 2016/10/01
echo "Today is " . date("Y.m.d") . "<br>";		//result : Today is 2016.10.01
echo "Today is " . date("Y-m-d") . "<br>";		//result : Today is 2016-10-01
echo "Today is " . date("1");					//result : Today is Saturday
?>
<hr><hr>
&copy; 2010 - <?php echo date("Y"); ?>
<hr><hr>
<?php
echo "The time is " . date("h:i:sa");
?>
<hr><hr>
<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>
<hr><hr>
<?php
$d = mktime(11,14,54,8,12,2014);
echo "Created date is " . date("Y-m-d h:i:sa",$d);
?>
<hr><hr>
<?php
$d2 = strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa",$d2);
?>
<hr><hr>
<?php
$d3 = strtotime("tomorrow");
echo date("Y-m-d h:i:sa",$d3) . "<br>";

$d4 = strtotime("next Saturday");
echo date("Y-m-d h:i:sa",$d4) . "<br>";

$d5 = strtotime("+3 Months");		// After 3 Months
echo date("Y-m-d h:i:sa",$d5) . "<br>";
?>
<hr><hr>
<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks",$startdate);

while($startdate < $enddate){
	echo date("M d", Satartdate) . "<br>";			// result : 매주 토요일이 6번 나옴
	$startdate = strtotime("+1 week",$startdate);
}
?>
<hr><hr>
<?php
$d6 = strtotime("July 04");
$d7 = ceil(($d6-time())/60/60/24);	// ceil -> 올림
echo $d7	// July 4일까지 며칠 남았는지 출력
?>
<hr><hr>
<h1>Welcom to my home page!</h1>
<p>some text</p>
<p>some more text</p>
<?php include 'footer.php'; ?>		// include file 'footer.php' - 1 line text
<hr><hr>
<div class = "menu">
<?php include 'menu.php'; ?>		// include file 'menu.php' - link
</div>
<h1>Welcom to my home page!</h1>
<p>some text</p>
<p>some more text</p>
<hr><hr>
<h1>Welcome to my home page!</h1>
<?php include 'vars.php'; 			// include file 'vars.php' - save vars color and car
echo "I love a $color $car.";
?>
<hr><hr>
<h1>Welcom to my home page!</h1>
<?php include 'noFileExists.php';	// 'noFileExists.php' is not exist.
echo "I have a $color $car.";		// result : I have a .
?>
<hr><hr>
<h1>Welcom to my home page!</h1>
<?php require 'noFileExists.php';	// 'noFileExists.php' is not exist.
echo "I have a $color $car.";		// result : 
?>
<hr><hr>
<?php
echo readfile("webdictionary.txt");	// only read file 'webdictionary.txt'
?>
<hr><hr>
<?php
$myfile = fopen("webdictionary.txt","r") or die("Unable to open file!");	
echo fread($myfile,filesize("webdictionary.txt"));		//filesize 만큼 myfile을 읽음
fclose($myfile);
?>
<hr><hr>
<?php
$myfile2 = fopen("webdictionary.txt","r") or die("Unable to open file!");	
echo fgets($myfile2);		// read single line
fclose($myfile2);
?>
<hr><hr>
<?php
$myfile3 = fopen("webdictionary.txt","r") or die("Unable to open file!");
while(!feof($myfile3)){		// Output one line until end-of-file
	echo fgets($myfile3)."<br>";
}
fclose($myfile3);
?>
<hr><hr>
<?php
$myfile4 = fopen("webdictionary.txt","r") or die("Unable to open file!");
while(!feof($myfile4)){		// Output one character until end-of-file
	echo fgetc($myfile4)."<br>";		// read single character
}
fclose($myfile4);
?>
<hr><hr>
<?php
$myfile5 = fopen("newfile.txt","w") or die("Unable to open file!");
$txt3 = "John Doe\n";
fwrite($myfile5,$txt3);
$txt3 = "Jane Doe\n";
fwrite($myfile5,$txt3);
fclose($myfile5);			//result : John Doe와 Jane Doe 모두 쓰여짐
?>
<hr><hr>
<?php
$myfile6 = fopen("newfile.txt","w") or die("Unable to open file!");
$txt4 = "Mickey Mouse\n";
fwrite($myfile6,$txt4);
$txt4 = "Minnie Mouse\n";
fwrite($myfile6,$txt4);
fclose($myfile6);			//result : Mockey Mouse와 Minnie Mouse로 교체 - rewrite
?>
</body>
</html>