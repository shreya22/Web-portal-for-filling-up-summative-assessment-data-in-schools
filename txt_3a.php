<?php
	include('config.php');
	
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	$rno = $_GET["id"];
	$arr= $_POST["info"];
	
	
	$a31= $arr[0];
	$a32= $arr[1];
	$a33= $arr[2];
	$a34= $arr[3];
	
	//para for co-scholastic: literary and creative
//	$line=  "update student_report set DISPLAY_TEXT='$a31' where ROLL_NO= '$rno' and PART_ID= '3A1'";
	$line=  'update student_report set DISPLAY_TEXT="'.$arr[0].'" where ROLL_NO= "'.$rno.'" and PART_ID= "3A1"';
	mysql_query($line);
	
	if(mysql_query($line)){
	echo 'yeah';
	}
	
	//para for co-scholastic: scientific skills
	$line=  "update student_report set DISPLAY_TEXT='$a32' where ROLL_NO= '$rno' and PART_ID= '3A2'";
	mysql_query($line);
	
	
	//para for co-scholastic: information and communication technology
	$line=  "update student_report set DISPLAY_TEXT='$a33' where ROLL_NO= '$rno' and PART_ID= '3A3'";
	mysql_query($line);
	
	//para for co-scholastic: organisational and creative skills
	$line=  "update student_report set DISPLAY_TEXT='$a34' where ROLL_NO= '$rno' and PART_ID= '3A4'";
	mysql_query($line);
	
	
	if(mysql_query($line)){
		echo 'yeah';
	}
	 
	
//	echo 'yeah';
	
	                                  
?>