<?php
	include('config.php');
	
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	$rno = $_GET["id"];
	$arr= $_POST["info"];
	
	$sum=0; $i=0;
	for($i=0; $i<count($arr); ++$i){
		$sum+= $arr[$i];
	}
	
	
	$line=  "update `student_details` set `NA_GR`='$sum', `check`=1 where `ROLL_NO`= '$rno';";
//	$line= "select * from student_details;";
	mysql_query($line);
	
	if(mysql_query($line)){
		echo 'yeah';
	}
	
	                                  
?>