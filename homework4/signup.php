<html>
<head>
	<title>Attend Job Fair!</title>
	<meta charset="UTF-8">
	<link href="jobfair.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
$check = true;
if(!isset($_POST["name"])||$_POST["name"]==""	
	||!isset($_POST["email"])||$_POST["email"]==""
	||!isset($_POST["interest"])||$_POST["interest"]==""
	||!isset($_POST["gender"])||$_POST["gender"]=="") { 
	$check = false; ?>
	<p class="title">Sorry</p>
    <p>You didn't fill out the form completely. 
    <a href="jobfair.html">Try agian?</a></p>
<?php } ?>
<?php
if($check) {
$okay_name = preg_match('/([a-zA-Z\s]){2,5}/', $_POST["name"]);
$okay = preg_match('/^[0-9a-zA-Z]([\-.\w]*[0-9a-zA-Z\-_+])*@([0-9a-zA-Z][\-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9}$/', $_POST["email"]);
 	if(!$okay||!$okay_name){
	$check = false; 
	} 
	if(!$check&&!$okay_name){?>

<p class="title">Sorry</p>
    <p> You didn't provide a e-mail address.
    <a href="jobfair.html">Try agian?</a></p>
<?php } 
if(!$okay_name&&!$check){?>
<p class="title">Sorry</p>
    <p> You didn't provide name.
    <a href="jobfair.html">Try agian?</a></p>
<?php }} ?>

<?php
if($check) {
$filename = 'list.txt';
$fp = fopen($filename,'r');
$content = fread($fp,filesize($filename));
$sign_user = explode("<br />",$content);
$granted = false;
foreach($sign_user as $each) {
	$info = explode(" : ",$each);
	if($_POST["name"]==trim($info[0]) && $_POST["email"]==trim($info[1])
		&& $_POST["interest"]==trim($info[2]) && $_POST["gender"]==trim($info[3])) {
		$granted = true;
		break;
	}
}
if($granted&&$check) { ?>
	<p class="title">Sorry</p>
	<p>You already enrolled in the Job Fair Event. </p>
<?php } else {
	$fp=fopen($filename,'a+');
	fwrite($fp,implode(" : ",$_POST));
	fwrite($fp,"<br />");
	fclose($fp);
	} 
} ?>
<?php if($check && !$granted) { ?>
<p class="title">Thanks, Job Seeker !</p>
<p>You successfully reserved a seat ! See you then ^.^</p>
<div class="item">Name : </div><?php echo $_POST["name"]; ?> <br>
<div class="item">E-mail : </div><?php echo $_POST["email"]; ?> <br>
<div class="item">Field of interest : </div><?php echo $_POST["interest"]; ?> <br>
<div class="item">Gender : </div><?php echo $_POST["gender"]; ?> <br>
<hr><br>
<div id="item">Current reservation list</div>
<br><br>
<?php echo $content; ?>
<?php } ?>
</body>
</html>