<?php
	include('config.php');
	
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	$rno = $_GET["id"];
	$arr= $_POST["info"];
	
	
	//para for attitude and values: teachers
//	$line=  "update student_report set DISPLAY_TEXT='$arr[1]' where ROLL_NO= '$rno' and PART_ID= '2D1'";
	$line1=  'update student_report set DISPLAY_TEXT="'.$arr[0].'" where ROLL_NO= "'.$rno.'" and PART_ID= "2D1"';
	mysql_query($line1);
	
	if(mysql_query($line1)){
	echo 'yeah';
	}
	
	
	//para for attitude and values: school mates
	$line2=  "update student_report set DISPLAY_TEXT='$arr[1]' where ROLL_NO= '$rno' and PART_ID= '2D2'";
	mysql_query($line2);

	
	
	//para for attitude and values: school programme
	$line3=  "update student_report set DISPLAY_TEXT='$arr[2]' where ROLL_NO= '$rno' and PART_ID= '2D3'";
	mysql_query($line3);
	
	//para for value system
	$line4=  "update student_report set DISPLAY_TEXT='$arr[3]' where ROLL_NO= '$rno' and PART_ID= '2Dt'";
	mysql_query($line4);
	
	                                  
?>