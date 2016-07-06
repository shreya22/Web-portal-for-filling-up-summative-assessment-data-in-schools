<?php
session_start();
	include('config.php');
	
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);


$section_id=$_GET['sid'];
$rno= $_GET['id'];
				$chk= "update `student_details` set `check`=1 where roll_no= '$rno';";
			
				$q= mysql_query($chk);
				
				if($q){
				header("Location: http://localhost/bsp/roll_no.php?id=".$section_id);
				}else{
					echo 'hadd h yar!';
				}
				
?>