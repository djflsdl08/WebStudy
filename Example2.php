<!DOCTYPE html>
<html>
<body>

<?php
echo "<h2>PHP is fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to lear PHP!<br>";
echo "This"," string"," was", " made", " with multiple parameters.";
// print 함수는 오직 하나의 문자열만 출력 가능
?>

<?php
$txt = "Learn PHP";
$txt2 = "W3Schools.com";
$cars = array("Volve","BMW","Toyota");

echo $txt1;						//output : Lean PHP
echo "<br>";
echo "Study PHP at $txt2";		//output : study PHP at W3Schools.com
echo "My car is a {$cars[0]}";	// output : My car is a Volve
?>

<?PHP 		//print statement
print "<h2>PHP is fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!<br>";
?>

<?php
$txt = "Learn PHP";
$txt2 = "W3Schools.com";
$cars = array("Volve","BMW","Toyota");

print $txt1;						//output : Lean PHP
print "<br>";
print "Study PHP at $txt2";		//output : study PHP at W3Schools.com
print "My car is a {$cars[0]}";	// output : My car is a Volve
?>

//print 문으로 HTML 태그를 프린트 하는 것은 나쁜 스타일 이며 에러 발생이 쉽다.

<?PHP  			// " " 와 ' ' 모두 가능
$x = "Hello world!";			//output : Hello world!
echo $x;
echo "<br>";
$x = 'Hello world!';			//output : Hello world!
echo $x;
?>

<?php
$x = 5985;
var_dump($x);					//output : int(5985)
$x = -345;
var_dump($x);					//output : int(-345)
$x = 0x8C;
var_dump($x);					//output : int(140)
$x = 047;
var_dump($x);					//output : int(39)
?>

<?php
$x = 10.365;
var_dump($x);					//output : float(10.365)
$x = 2.4e3;
var_dump($x);					//output : float(2400)
$x = 8E-5
var_dump($x);					//output : float(8.0E-5)
?>

<?PHP 		//Array
$cars = array("Volve","BMW","Toyota");
var_dump($cars);
// output : array(3){[0]=>string(5) "Volve" [1]=>string(3) "BMW" [2]=>string(6) "Toyota"}
?>

<?php 		//Object
class Car {
	var $color;
	function Car($color = "green"){
		$this->color = $color;
	}
	function what_color(){
		return $this->color;
	}
}
function print_vars($obj){
	foreach(get_obgect_vars($obj) as $prop => $val) {
		echo "$prop = $val";
	}
}
$herbie = new Car("White");
echo "herbie : Properties "
print_vars($herbie);
?>

<?php 		// Null Value - 값이 없음
$x = "Hello world!";
$x = null;
var_dump($x);						// output : NULL
?>

<?php 		//strlen() function : return length (include space) - from 1
echo strlen("Hello world!");		// output :  12
?> 			// java equivalent : length

<?php 		//strpos() function : special text search (string position)
echo strpos("Hello world!","world"); 	// output : 6 (count from 0)
echo strpos("Good Morning?","good"); 	// output : FALSE
?>  		// java equivalent : indexOf

<?php  		//substr() function : return part of string (from index to last)
$rest = substr("abcdef",-1);  			//output : returns "f"
$rest = substr("abcdef",-2); 			//output : return "ef"
$rest = substr("abcdef",-3,1);			//output : return "d"
$rest = substr("abcdef",1); 			//output : return "bcdef"
$rest = substr("abcdefg",4,2); 			//output : return "ef"
?>          // java equivalent : substring

<?php 		//strtolower() funtion : make string lower
$str = "Mary Had A Little Lamb and She LoveD It So";
$str = strtolower($str);
echo $str;  				//output : mary had a little lamb and she loved it so
?>          // java equivalent : toLowerCase

<?php 		//strtoupper() function : make string upper
$str = "Mary Had A Little Lamb and She LoveD It So";
$str = strtoupper($str);
echo $str; 					//output : MARY HAD A LITTLE LAMB AND SHE LOVED IT SO
?>         // java equivalent : toUpperCase

<?php 		//trim function() : strip witespace or sqecial character
$text = "\t\t\tThese are a few words";
echo $text; 		        // output : 			These are a few words
$text = trim($texr,"\t");
echo $text; 				// output : These are a few words
echo trim(" abc,,,",","); 	// output : abc
?>		   // java equivalent : trim

<?php 		//explode() function : split a string by string
$pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ",$pizza);
$num = explode("|","one|two|three|four");
echo $pieces[0]; 				//output : piece1
echo $pieces[1];  				//output : piece2
echo $num[2]; 					//output : three
?>        // java equivalent : split

<?php      //implode() function : join array elements with a string
$array = array('lastname','email','phone');
echo implode(",",$array); 			//output : lastname,email,phone
?>        // java equivalent : join

<?php   	//strcmp() function
$var1 = "Hello";
$var2 = "Hello";
if(strcmp($var1,$var2)==0){
	echo "same";
}									//output : same
echo strcmp("5",5); 				//output : 0
?>        // java equivalent : compareTo

</body>
</html>