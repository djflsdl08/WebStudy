<!DOCTYPE html>
<html>
<body>

<?php
define("GREETING","Welcome to W3Schools.com!");
echo GREETING;						// outputs : Welcome to W3Schools.com!
?>

<?php
define("GREETING","Welcome to W3Schools.com!",true);
echo greeting;						// outputs : Welcome to W3Schools.com!
?>

<?php
$x = 10;
$y = 6;
echo ($x + $y);			// outputs : 16
echo ($x - $y);			// outputs : 4
echo ($x * $y);			// outputs : 60
echo ($x / $y);			// outputs : 1.6666666666667
echo ($x % $y);			// outputs : 4
?>

<?php
$x = 10;
echo $x;				// outputs : 10

$y = 20;
$y += 100;				
echo $y;				// outputs : 120

$z = 50;
$z -= 25;
echo $z; 				// outputs : 25

$i = 5;
$i *= 6;
echo $i;				// outputs : 30

$j = 10;
$j /=5;
echo $j;				// outputs : 2

$k = 15;
$k %= 4;
echo $k;				// outputs : 3
?>

<?php
$a = "Hello";
$b = $a . " world!";
echo $b;				// outputs : Hello world!

$x = "Hello";
$x .= " world!";
echo $x;				// outputs : Hello world!
?>

<?php
$x = 10;
echo ++$x;				// outputs : 11

$y = 10;
echo $y++;				// outputs : 10

$z = 5;
echo --$z;				// outputs : 4

$i = 5;
echo $i--;				// outputs : 5
?>

<?php
$x = 100;
$y = "100";

var_dump($x == $y);		// outputs : bool(true)
var_dump($x === $y);	// outputs : bool(false)
var_dump($x != $y);		// outputs : bool(false)
var_dump($x !== $y);	// outputs : bool(true)

$a = 50;
$b = 80;

var_dump($a > $b);		// outputs : bool(false)
var_dump($a < $b);		// outputs : bool(true)
?>

<?php
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$z = $x + $y;		// union of $x and $y

var_dump($x == $y);		// outputs : bool(false)
var_dump($x === $y);	// outputs : bool(false)
var_dump($x != $y);		// outputs : bool(true)
var_dump($x <> $y);		// outputs : bool(true)
var_dump($x !== $y);	// outputs : bool(true)
?>

<?php
$t = data("H");		// 현재시간을 나타내는 함수
if($t < "20"){
	echo "Have a good day!";
}
?>

<?php
$t = data("H");
if($t < "20"){
	echo "Have a good day!";
}
else {
	echo "Hava a good night!";
}
?>

<?php
$t = data("H");
if($t < "10"){
	echo "Have a good morning";
}
else if($t < "20"){
	echo "Have a good day!";
}
else {
	echo "Hava a good night!";
}
?>

<?php
$favcolor = "red";
switch($favcolor){
	case "red" : echo "Your favorite color is red!"; break;
	case "blue" : echo "Your favorite color is blue!"; break;
	case "green" : echo "Your favorite color is green!"; break;
	default : echo "Your favorite color is neither red, blue, or green!";
}
?>

<?php
$x = 1;
while($x<=5){
	echo "The number is : $x <br>";
	$x++;
}									// 5회 반복 출력
?>

//do...while 문은 적어도 1회 반복
<?php
$x = 1;
do {
	echo "The number is : $x <br>";
	$x ++;
}while($x<0);						// 1회 출력
?>

<?php
for($x = 0;$x <= 10;$x++){
	echo "The number is : $x <br>";
}									// 10 회 반복 출력
?>

<?php
$colors = array("red","green","blue","yellow");
foreach($colors as $value){
	echo "$value <br>";
}									// red, green, blue, yellow 차례로 출력
?>

<?php
function writeMsg() {
	echo "Hello world!";
}
writeMsg();		// call the function
?>									// output : Hello world!

<?php
function familyName($fname){
	echo "$fname Yejin <br>";
}
familyName("Kim");
familyName("Lee");
?>									// output : Kim Yejin, Lee Yejin 차례로 출력

<?php
function familyName2($fname,$year){
	echo "$fname Yejin. Born in $year <br>";
}
familyName2("Kim","1996");
familyName2("Lee","1993");
?>			// output : Kim Yejin. Born in 1996, Lee Yejin. Born in 1993 차례로 출력

<?php
function setHeight($minheight = 50){
	echo "height = $minheight <br>";
}
setHeight(350);
setHeight();
setHeight(70);
?>	  				// output : height = 350, height = 50, height = 70 차례로 출력

<?php
function sum($x,$y){
	$z = $x + $y;
	return $z;
}
echo "5+10=" . sum(5,10) . "<br>";		// outputs : 5+10=15
echo "8+12=" . sum(8,12) . "<br>";		// outputs : 8+12=20
?>

<?php
$cars = array("Volvo","BMW","Toyota");
echo "I like" . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>			// outputs : I like Volve, BMW and Toyota.

<?php
$cars = array("Volvo","BMW","Toyota");
echo count($cars);						// outputs : 3
?>

<?php
$cars = array("Volvo","BMW","Toyota");
$arrlength = count($cars);

for($x=0;$x<$arrlength;$x++){
	echo $cars[$x];
	echo " "
}										// outputs : Volve BMW Toyota
?>

<?php
$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>										// outputs : Peter is 35 years old.

<?php
$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
foreach($age as $x=>$x_value){
	echo "key=".$x.", value=".$x_value;
	echo "<br>";
}							// key = Peter, value = 35
?>							// key = Ben, value = 37
							// key = Joe, value = 43    출력
<?php
$cars2 = array(
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Saab",17,15)
);
echo $cars2[2][0]." : In stock: ".$cars2[2][1].", sold : ".$cars2[2][2].".<br>";
// outputs : Saab : In stock: 17, sold : 15.
for($row =0;$row<4;$row++){
	echo "<b>Row number $row</b>";
	echo "<ul>";
	for($col=0;$col<3;$col++){
		echo "<li>".$cars[$row][$col]."</ul>";
	}
	echo "</ul>";
}							// print array
?>

//sort() - ascending order
<?php
$cars3 = array("Volvo","BMW","Toyota");
$numbers = array(4,2,6,10,8);
sort($cars3);
sort($numbers);
for($x=0;$x<count($cars3);$x++){
	echo $cars[$x];
}							//BMW, Toyota, Volvo 순서로 출력
// numbers를 출력하면 2,4,6,7,10 순서로 출력됨
?>

//rsort() - descending order
<?php
$cars3 = array("Volvo","BMW","Toyota");
$numbers = array(4,2,6,10,8);
rsort($cars3);
rsort($numbers);
for($x=0;$x<count($cars3);$x++){
	echo $cars[$x];			
}							//Volvo, Toyota, BMW 순서로 출력
// numbers 를 출력하면 10 8 6 4 2 순서로 출력됨
?>

//asort() - ascending order about value
//ksort() - ascending order about key
//arsort() - descending order about value
//krsort() - descending order about key
<?php
$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
// age 를 출력하면 Peter, Ben, Joe 순서로 출력
ksort($age);
// age 를 출력하면 Ben, Joe, Peter 순서로 출력
arsort($age);
// age 를 출력하면 Joe, Ben, Peter 순서로 출력
krsort($age);
// age 를 출력하면 Peter, Joe, Ben 순서로 출력
?>

</body>
</html>