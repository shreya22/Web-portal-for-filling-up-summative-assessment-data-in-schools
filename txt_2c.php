<?php
	include('config.php');
	
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	$rno = $_GET["id"];
	
	
	$vp= $_POST["info"];
	
	
	//para for work education
	$line=  "update student_report set DISPLAY_TEXT='$vp' where ROLL_NO= '$rno' and PART_ID= '2Ct'";
	mysql_query($line);
	
	if(mysql_query($line)){
	echo 'yeah';
	}
	                                  
?>