<?php
if(isset($_FILES)) {
	$file = $_FILES["file"];
	// print_r($file);
	$error = $file["error"];
	$name = $file["name"];
	$size = $file["size"];
	$type = $file["type"];
	$tmp_name = $file["tmp_name"];
	if($error>0) {
		echo "Error : " . $error . "<br>";
	}
	else {
		echo "Upload : " . $name . "<br>";
		echo "Type : " . $type . "<br>";
		echo "Size : " . ($size/1024/1024) . " Mb<br>";
		echo "Stored in : " . $tmp_name . "<br>";
	}
}
else {
	echo "File is not selected";
}
?>
<?php
$allowedExts = array("gif","jpeg","jpg","png");
if(isset($_FILES)) {
	$file = $_FILES["file"];
	$error = $file["error"];
	$name = $file["name"];
	$type = $file["type"];
	$size = $file["size"];
	$tmp_name = $file["tmp_name"];

	if($error > 0) {
		echo "Error: " . $error . "<br>";
	}
	else {
		$temp = explode(".",$name);
		//print_r($temp);
		$extension = end($temp);
		//echo $extension;

		if((($size/1024/1024)<2.) && in_array($extension,$allowedExts)) {
			echo "Upload: " . $name . "<br>";
			echo "Type: " . $type . "<br>";
			echo "Size: " . ($size/1024/1024) . " Mb<br>";
			echo "Stored in: " . $tmp_name;
		}
		else {
			echo ($size/1024/1024) . " Mbyte is bigger than 2 Mb ";
			echo $extension . "format file is not allowed to upload ! ";
		}
	}
}
else {
	echo "File is not selected";
}
?>
<?php
$allowedExts2 = array("gif","jpeg","jpg","png");
if(isset($_FILES)) {
	$file = $_FILES["file"];
	$error = $file["error"];
	$name = $file["name"];
	$type = $file["type"];
	$size = $file["size"];
	$tmp_name = $file["tmp_name"];

	if($error > 0) {
		echo "Error: " . $error . "<br>";
	}
	else {
		$temp = explode(".",$name);
		//print_r($temp);
		$extension = end($temp);
		//echo $extension;

		if((($size/1024/1024)<2.) && in_array($extension,$allowedExts)) {
			if(file_exists("uploat/".$name)) {
				echo $name . " already exists. ";
			}
			else {
				move_uploaded_file($tmp_name, "upload/".$name);
				echo "Stored in : " . "upload/" . $name;
			}
		}
		else {
			echo ($size/1024/1024)." Mbyte is bigger than 2 Mb ";
			echo $extension . "format file is not allowed to upload ! ";
		}
	}
}
else {
	echo "File is not selected";
}
?>