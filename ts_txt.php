<?php
	include('config.php');
	
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	$rno = $_GET["id"];
	$ts= $_POST["info"];
	
	
	//para for thinking skills
	$line=  "update student_report set DISPLAY_TEXT='$ts' where ROLL_NO= '$rno' and PART_ID= '2A1'";
	mysql_query($line);
	echo 'done';
						
?>