<?php
	include('config.php');
	
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	$rno = $_GET["id"];
	$arr= $_POST["info"];
	
	
	$line=  "update `selected_3` set `3A1`='$arr[0]', `3A2`='$arr[1]', `3B1`='$arr[2]', `3B2`='$arr[3]' where `roll_no`= '$rno';";
//	$line= "select * from student_details;";
	mysql_query($line);
	
	if(mysql_query($line)){
		echo 'yeah';
	}
	
	                                  
?>