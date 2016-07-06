<?php
	include('config.php');
	
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	$rno = $_GET["id"];
	$arr= $_POST["info"];
	
	
	$ts= $arr[0];
	$skll= $arr[1];
	$es= $arr[2];
	
	//para for thinking skill;
	$line1=  "update student_report set DISPLAY_TEXT='$arr[0]' where ROLL_NO= '$rno' and PART_ID= '2A1'";
	mysql_query($line1);
	
	
	
	$arr[0]= ''.$arr[1];
	//$ts= ''.$sos; 
	//para for social skills
	$line2=  'update student_report set DISPLAY_TEXT="'.$arr[1].'" where ROLL_NO= "'.$rno.'" and PART_ID= "2A2"';
	mysql_query($line2);
	 
/*	if(mysql_query($line2))
	{
		echo 'yeah';
	}	 */
	
	//para for emotional skills
//	$line3=  "update student_report set DISPLAY_TEXT='$arr[2]' where ROLL_NO= '$rno' and PART_ID= '2A3'";
	$line3=  'update student_report set DISPLAY_TEXT="'.$arr[2].'" where ROLL_NO= "'.$rno.'" and PART_ID= "2A3"';
	mysql_query($line3);
	
	if(mysql_query($line3))
	{
		echo 'yeah';
	}

	                                  
?>