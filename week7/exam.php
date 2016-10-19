
<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title></title>
  </head>
  <body>
    <h2>PHP Midterm Exercises</h2>
	
    <p>1. 사용자 입력을 받아 PHP echo 문으로 표시하는 간단한 HTML form 을 작성하시오.</p>
    <p><strong>Please input your name</strong> : 
      <form method="get" action="<?=$_SERVER['PHP_SELF']?>" > <? php // 밑에 php code ?>
        <input maxlength="10" value=" " name="name" type="text">
        <input value="Submit" name="submit" type="submit"> 
      </form> <br>
	  <?php
	  if(isset($_GET['submit'])) {
		  $name = $_GET['name'];
		  echo "Hello <b>". $name."</b> !";
	  }
	  ?>
       
    </p>
    <p>2. 사용자로부터 행과 열의 크기를 입력 받아 table 을 표시하는 PHP 코드를 작성하시오.</p>
    <p><strong>Please input the size of table row and column</strong> : 
      <form method="get" action="<?=$_SERVER['PHP_SELF']?>" >
        Row : <input name="row" type="number" min="1" max="20"> / Column : <input name="col" type="number" min="1" max="20">
        <input value="Submit" name="submit2" type="submit"> 
      </form> <br>
	  <?php
	  if(isset($_GET['submit2'])) {
		  $row = $_GET['row'];
		  $col = $_GET['col'];
		  echo "<table border='1'>";
		  for($r=1;$r<=$row;$r++) {
			  echo "<tr>";
			  for($c=1;$c<=$col;$c++) {
				  echo "<td> $r : $c </td>";
			  }
			  echo "</tr>";
		  }
		  echo "</table>";
	  }
	  ?>
       
    </p>
     <p>3. 다음의 코드는, 텍스트 파일("names.txt")에서 특정 문자를 특정 개수 가진 것을 찾아 내는 코드입니다. 빈 칸을 완성하시오.</p>
    <h4>names.txt</h4> 
        Helene Martin<br>
        Marty Stepp<br>
        Stuart Reges<br>
        Robert Purple<br>
        Bob Loblaw<br>
        Jun Ji<br>
        Andrew Ji<br>
        Jenny Ji<br>
        Hong Kildong<br>
      <br><br>

       <form method="get" action="<?=$_SERVER['PHP_SELF']?>" >
        Letter : <input name="letter" type="text" size="2"> / 
        Number : <input name="times" type="number" min="1" max="10">
        <input value="Submit" name="submit3" type="submit"> 
      </form> <br>
	<?php
	if ( !isset($_GET["letter"]) || !isset($_GET["times"]) || strlen($_GET["letter"]) != 1 || $_GET["times"] <= 0) {
		die("invalid request");
	}
	$letter = strtolower($_GET['letter']); // (1) letter 의 입력값을 모두 소문자로 변환 
	$times = (int)$_GET['times']; // (2) times 의 입력값을 int 로 타입변환 
	$matches = 0; 
	foreach (file("names.txt", FILE_IGNORE_NEW_LINES) as $line) {
		$lowerline = strtolower($line); // (3) $line 의 값을 모두 소문자로 변환 
		$count = 0;
		for ($i = 0; $i < strlen($line); $i++) { // (4) 루프를 문자열 길이까지 반복 
			$ch = $lowerline[$i]; // (5) $i 번째 문자를 $ch 에 할당 
			if ($ch == $letter) {
				$count++; // (6) $count 를 하나 증가 
			}
		}
		if ($count >= $times) { // (7) $count 가 $times 보다 같거나 큰 지를 확인 
		$matches++;
	?>
	<p><strong><?= $line ?></strong>  contains '<?= $letter ?>' exactly <?= $times ?> times.</p>
	<?php
		}
	}
	if ($matches == 0) {
	?>
	<p>No names contained '<?= $letter ?>' enough times.</p>
	<?php 
	}
	?>

  </body>
</html>
