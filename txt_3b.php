<?php
	include('config.php');
	
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	$rno = $_GET["id"];
	$arr= $_POST["info"];
	
	
	$first= $arr[0];
	$second= $arr[1];
	
	//para for co-scholastic: literary and creative
	$line=  "update student_report set DISPLAY_TEXT='$first' where ROLL_NO= '$rno' and PART_ID= '3B1'";
	mysql_query($line);
	
	
	//para for co-scholastic: literary and creative
	$line=  "update student_report set DISPLAY_TEXT='$second' where ROLL_NO= '$rno' and PART_ID= '3B2'";
	mysql_query($line);
	
	if(mysql_query($line)){
		echo 'yeah';
	}
	 
	
//	echo 'yeah';
	
	                                  
?>