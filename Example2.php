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
$txt = "Lean PHP";
$txt2 = "W3Schools.com";
$cars = array("Volve","BMW","Toyota");

echo $txt1;						//output : Lean PHP
echo "<br>";
echo "Study PHP at $txt2";		//output : study PHP at W3Schools.com
echo "My car is a {$cars[0]}";	// output : My car is a Volve
?>

<?php
print "<h2>PHP is fun!</h2>";
print "Hello world!<br>";
print "I'm about to lear PHP!<br>";
?>

<?php
$txt = "Lean PHP";
$txt2 = "W3Schools.com";
$cars = array("Volve","BMW","Toyota");

print $txt1;						//output : Lean PHP
print "<br>";
print "Study PHP at $txt2";		//output : study PHP at W3Schools.com
print "My car is a {$cars[0]}";	// output : My car is a Volve
?>

</body>
</html>