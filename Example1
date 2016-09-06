<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php    //<?와 php사이에 빈칸이 있으면 error!
echo "Hello World!";	//echo : 웹 페이지에 텍스트 출력
?>

<?php 	//comments
// This is a single line comment

# This is also a single line comment

/*
This is a multiple lines comment block
that spans over more than
ont line
*/
?>

<?php 	//function,classes,keywords : 대 소문자 구분x
ECHO "Hello World!<br>";	// outputs : Hello World!
echo "Hello World!<br>";	// outputs : Hello World!
EcHo "Hello World!<br>";	// outputs : Hello World!
?>

<?php
$color = "red";		//변수 앞에 $
echo "My car is " . $color . "<br>";	// outputs: My car is red
echo "My house is " . $COLOR . "<br>";	// outputs : My house is
echo "My boat is " . $coLOR . "<br>";	// outputs : My boat is 
?>

<?php
$x = 5;
$y = 6;
$z = $x + $y;
echo $z;		// outputs : 11
?>

<?php
$txt = "Hello world!";
echo "txt Variable is $txt";		// outputs : txt Variable is Hello world!
?>

<?php
$x = 5;		//global scope

function myTest(){
	$y =10;
	echo "<p>Test variables inside the function:<p>";
	echo "Variable x is : $x";			// outputs : Variable x is :
	echo "<br>";
	echo "Variable y is : $y";			// outputs : Variable y is : 10
}
myTest();

echo "<p>Test Variables outside the function:<p>";
echo "Variable x is : $x";				// outputs : Variable x is : 5
echo "<br>";
echo "Variable y is : $y";				// outputs : Variable y is : 
?>

<?php
$x = 5;
$y = 10;

function myTest2(){
	global $x,$y;
	$y = $x + $y;
}
myTest2();
echo $y;			// outputs : 15
?>

<?php
$x = 5;
$y = 10;

function myTest3(){
	$GLOBALS['y']=$$GLOBALS['x']+$GLOBALS['y'];
}
myTest3();
echo $y;			// outputs : 15
?>

<?php
function myTest4(){
	static $x=0;
	echo $x;
	$x++;
}
myTest4();		// outputs : 0
myTest4();		// outputs : 1
myTest4();		// outputs : 2
?>

</body>
</html>