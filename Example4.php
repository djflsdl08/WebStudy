<!DOCTYPE html>
<html>
<body>
<h2> 김예진 </h2>
 
<?php
echo "<br><h3>상수(Constant)</h3>";
define("GREETING","Welcome to W3Schools.com!");
echo GREETING;
?>
 
<?php
define("GREETING","Welcome to W3Schools.com!",true);
echo "<br><br>".greeting . "<hr><hr>";
?>
 
<?php
echo "<h3>Arithmetic Operators</h3>";
$x = 10;
$y = 6;
echo "변수 x = $x<br>";
echo "변수 y = $y<br>";
echo "<br>x + y = ".($x + $y);
echo "<br>x - y = ".($x - $y);
echo "<br>x * y = ".($x * $y);
echo "<br>x / y = ".($x / $y);
echo "<br>x % y = ".($x % $y)."<hr><hr>";
?>
 
<?php
echo "<h3>Assignment Operators</h3>";
$x = 10;
echo "변수 x = $x<br><br>";
 
$y = 20;
echo "변수 y = $y<br>";
$y+=100;
echo "y+=100을 한 결과 >> $y<br><br>";
 
$z = 50;
echo "변수 z = $z<br>";
$z -=25;
echo "z-=25를 한 결과 >> $z<br><br>";
 
$i = 5;
echo "변수 i = $i<br>";
$i *=6;
echo "i*=6를 한 결과 >> $i<br><br>";
 
$j = 10;
echo "변수 j = $j<br>";
$j /= 5;
echo "j/=5를 한 결과 >> $j<br><br>";
 
$k = 15;
echo "변수 k = $k<br>";
$k %=4;
echo "k%=4를 한 결과 >> $k<hr><hr>";
?>
 
<?php
echo "<h3>String Operators</h3>";
$a = "Hello";
echo "변수 a는 >> $a";
$b = $a . " world!";
echo "<br>변수 b = a . ' world!' 한 결과 >> $b<br><br>";
 
$x = "Hello";
echo "변수 x는 >> $x";
$x .= " world!";
echo "<br>변수 x .= ' world!'를 한 결과 >> ". $x . "<hr><hr>";
?>
 
<?php
echo "<h3>Increment/Decrement Operators</h3>";
$x = 10;
echo "변수 x는 >> " . $x;
echo "<br>++x = " . ++$x . "<br><br>";
 
$y = 10;
echo "변수 y는 >> " . $y;
echo "<br>y++ = " . $y++."<br><br>";
 
$z = 5;
echo "변수 z는 >> " . $z;
echo "<br>--z = " . --$z . "<br><br>";
 
$i = 5;
echo "변수 i는 >> " . $i;
echo "<br>i-- = " . $i-- . "<hr><hr>";
?>
 
<?php
echo "<h3>Comparison Operators</h3>";
$x = 100;
echo "int형 변수 x는 >> " . $x . "<br>";
$y = "100";
echo "string형 변수 y는 >> " . $y . "<br><br>";
 
echo "var_dump(x == y)의 결과 >> ";
var_dump($x == $y);
echo "<br>var_dump(x===y)의 결과 >> ";
var_dump($x===$y);
echo "<br>var_dump(x!=y)의 결과 >> ";
var_dump($x!=$y);
echo "<br>var_dump(x!==y)의 결과 >> ";
var_dump($x!==$y);
echo "<br><br>";
 
$a = 50;
$b = 90;
echo "변수 a = $a<br>변수 b = $b<br><br>";
echo "var_dump(a>b)의 결과 >> ";
var_dump($a > $b);
echo "<br>var_dump(a<b)의 결과 >> ";
var_dump($a < $b);
echo "<hr><hr>";
?>
 
<?php
echo "<h3>Array Operators</h3>";
$x = array("a"=>"red","b"=>"green");
echo "배열 x는 >> <br>";
var_dump($x);
echo "<br><br>";
$y = array("c"=>"blue","d"=>"yellow");
echo "배열 y는 >> <br>";
var_dump($y);
echo "<br><br>";
echo "배열 z = x+y >> <br>" ;
$z = $x + $y;
var_dump($z);
echo "<br><br>";
echo "var_dump(x==y)의 결과 >> ";
var_dump($x==$y);
echo "<br>";
echo "var_dump(x===y)의 결과 >> ";
var_dump($x===$y);
echo "<br>";
echo "var_dump(x!=y)의 결과 >> ";
var_dump($x!=$y);
echo "<br>";
echo "var_dump(x<>y)의 결과 >> ";
var_dump($x<>$y);
echo "<br>";
echo "var_dump(x!==y)의 결과 >> ";
var_dump($x!==$y);
echo "<hr><hr>";
?>
 
<?php
echo "<h3>Conditional Statements - if</h3>";
$t = date("H");
if($t < "20"){
	echo "Have a good day!<hr><hr>";
}
?>
 
<?php
echo "<h3>Conditional Statements - if...else</h3>";
$t = date("H");
if($t < "20"){
	echo "Have a good day!<hr><hr>";
}
else {
	echo "Hava a good night!<hr><hr>";
}
?>
 
<?php
echo "<h3>Conditional Statements - if...elseif...else</h3>";
$t = date("H");
if($t<"10"){
	echo "Have a good morning!<hr><hr>";
}
elseif($t < "20"){
	echo "Have a good day!<hr><hr>";
}
else {
	echo "Hava a good night!<hr><hr>";
}
?>
 
<?php
echo "<h3>Conditional Statements - switch</h3>";
$favcolor = "red";
switch($favcolor){
	case "red":
	echo "Your favorite color is red!"; break;
	case "blue":
	echo "Your favorite color is blue!"; break;
	case "green":
	echo "Your favorite color is green!"; break;
	default:
	echo "Your favorite color is neither red,blue, or green!";
}
echo "<hr><hr>";
?>
 
<?php
echo "<h3>While Loop</h3>";
$x = 1;
while($x<=5){
	echo "The number is : $x <br>";
	$x++;
}
echo "<hr><hr>";
?>
 
<?php
echo "<h3>do...While Loop</h3>";
$x = 1;
do{
	echo "The number is : $x <br>";
	$x++;
}while($x<=5);
echo "<br>do...while 문은 적어도 한 번이상 실행한다.<br>";
$x = 6;
do{
	echo "The number is : $x <br>";
	$x++;
}while($x<=5);
 
echo "<hr><hr>";
?>
 
<?php
echo "<h3>for Loop</h3>";
for($x=0;$x<=10;$x++){
	echo "The number is : $x <br>";
}
echo "<hr><hr>";
?>
 
<?php
echo "<h3>foreach Loop</h3>";
$colors = array("red","green","blue","yellow"); 
foreach ($colors as $value){
  echo "$value <br>";
}
echo "<hr><hr>";
?>
 
<?php
function writeMsg(){
	echo "Hello world!";
}
writeMsg();
echo "<hr><hr>";
?>
 
<?php
echo "<h3>함수 인수</h3>";
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
echo "<br>";
function familyName2($fname,$year){
	echo "$fname Refsnes. Born in $year <br>";
}
familyName2("Hege","1975");
familyName2("Stale","1978");
familyName2("Kai Jim","1983");
echo "<hr><hr>";
?>
 
<?php
echo "<h3>기본(Default) 인수 값</h3>";
function setHeight($minheight=50){
	echo "The height is : $minheight <br>";
}
 
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
echo "<hr><hr>";
?>
 
<?php
echo "<h3>Returning values</h3>";
function sum($x,$y){
	$z=$x+$y;
	return $z;
}
 
echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4)."<hr><hr>";
?>
 
<?php
echo "<h3>Arrays</h3>";
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<hr><hr>";
?>
 
<?php
echo "<h3>배열의 길이얻기-count()함수</h3>";
$cars = array("Volvo","BMW","Toyota");
echo "배열 cars는 >> <br>";
var_dump($cars);
echo "<br>count(cars)의 결과는 >> " . count($cars);
echo "<hr><hr>";
?>
 
<?php
echo "<h3>배열에서 loop돌기</h3>";
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
 
for($x=0;$x<$arrlength;$x++){
  echo $cars[$x];
  echo "<br>";
}
echo "<hr><hr>"; 
?>
 
<?php
echo "<h3>연계배열</h3>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<hr><hr>";
?>
 
<?php
echo "<h3>연계배열을 통한 loop반복</h3>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
 
foreach($age as $x=>$x_value){
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<hr><hr>"
?>
 
<?php
echo "<h3>2차원 배열</h3>";
$cars = array(
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<hr><hr>";
?>
 
<?php
echo "<h3>2차원 배열의 이중Loop</h3>";
for ($row = 0; $row < 4; $row++){
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++){
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
echo "<hr><hr>";
?>
 
<?php
echo "<h3>오름차순 배열정렬-sort()</h3>";
$cars=array("Volvo","BMW","Toyota");
sort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";
$numbers=array(4,6,2,22,11);
sort($numbers);
$length = count($numbers);
for($x=0;$x<$length;$x++){
	echo $numbers[$x];
	echo "<br>";
}
echo "<hr><hr>";
?>
 
<?php
echo "<h3>내림차순 배열정렬-rsort()</h3>";
$cars=array("Volvo","BMW","Toyota");
rsort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";
$numbers=array(4,6,2,22,11);
rsort($numbers);
$length = count($numbers);
for($x=0;$x<$length;$x++){
	echo $numbers[$x];
	echo "<br>";
}
echo "<hr><hr>";
?>
 
<?php
echo "<h3>값(Value)에 대한 오름차순 배열 정렬-asort()</h3>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<hr><hr>";
?>
 
<?php
echo "<h3>키(Key)에 대한 오름차순 배열 정렬-ksort()</h3>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<hr><hr>";
?>
 
<?php
echo "<h3>값(Value)에 대한 내림차순 배열 정렬-arsort()</h3>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<hr><hr>";
?>
 
<?php
echo "<h3>키(Key)에 대한 내림차순 배열 정렬-krsort()</h3>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<hr><hr>";
?>
</body>
</html>