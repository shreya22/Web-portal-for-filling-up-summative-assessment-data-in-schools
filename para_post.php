<?php
	include('config.php');
	
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	$rno = $_GET["id"];
	$arr= $_POST["info"];
	
	
	$ts= $arr[0];
	$ss= $arr[1];
	$es= $arr[2];
	$we= $arr[3];
	$vp= $arr[4];
	$avt= $arr[5];
	$avsm= $arr[6];
	$avsp= $arr[7];
	$vs= $arr[8];
	$a31= $arr[9];
	$a32= $arr[10];
	$a33= $arr[11];
	$a34= $arr[12];
	
	//para for thinking skills
	$line=  "update student_report set DISPLAY_TEXT='$ts' where ROLL_NO= '$rno' and PART_ID= '2A1'";
	mysql_query($line);
	
	//para for social skills
	$line=  "update `student_report` set DISPLAY_TEXT='$ss' where ROLL_NO= '$rno' and PART_ID= '2A2'";
	mysql_query($line);
	
	if(mysql_query($line)){
		echo 'yes';
	}else{
		echo 'no';
	} 
	
	//para for emotional skills
	$line=  "update student_report set DISPLAY_TEXT='$es' where ROLL_NO= '$rno' and PART_ID= '2A3'";
	mysql_query($line);
	
	//para for work education
	$line=  "update student_report set DISPLAY_TEXT='$we' where ROLL_NO= '$rno' and PART_ID= '2B1'";
	mysql_query($line);
	
	//para for visual and performing arts
	$line=  "update student_report set DISPLAY_TEXT='$vp' where ROLL_NO= '$rno' and PART_ID= '2Ct'";
	mysql_query($line);
	
	//para for attitude and values: teachers
	$line=  "update student_report set DISPLAY_TEXT='$avt' where ROLL_NO= '$rno' and PART_ID= '2D1'";
	mysql_query($line);
	
	//para for attitude and values: school mates
	$line=  "update student_report set DISPLAY_TEXT='$avsm' where ROLL_NO= '$rno' and PART_ID= '2D2'";
	mysql_query($line);
	
	//para for attitude and values: school programme
	$line=  "update student_report set DISPLAY_TEXT='$avsp' where ROLL_NO= '$rno' and PART_ID= '2D3'";
	mysql_query($line);
	
	//para for value system
	$line=  "update student_report set DISPLAY_TEXT='$vs' where ROLL_NO= '$rno' and PART_ID= '2Dt'";
	mysql_query($line);
	
	//para for co-scholastic: literary and creative
	$line=  "update student_report set DISPLAY_TEXT='$a31' where ROLL_NO= '$rno' and PART_ID= '3A1'";
	mysql_query($line);
	
	//para for co-scholastic: literary and creative
	$line=  "update student_report set DISPLAY_TEXT='$a32' where ROLL_NO= '$rno' and PART_ID= '3A2'";
	mysql_query($line);
	
	//para for co-scholastic: literary and creative
	$line=  "update student_report set DISPLAY_TEXT='$a33' where ROLL_NO= '$rno' and PART_ID= '3A3'";
	mysql_query($line);
	
	//para for co-scholastic: literary and creative
	$line=  "update student_report set DISPLAY_TEXT='$a34' where ROLL_NO= '$rno' and PART_ID= '3A4'";
	mysql_query($line);
	
	
	
	                                  
?>