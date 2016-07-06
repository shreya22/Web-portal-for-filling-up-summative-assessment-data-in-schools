<?php

	include('config.php');
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	$query= "select * from class";
	$exe= mysql_query($query);
	$num_class= mysql_num_rows($exe);
	
	$q_sec= "select * from section";
	$exe_sec= mysql_query($q_sec);
	
	$arr= array(); $j=1; $p=1; $i=1;
	for($i=1; $i<=$num_class; $i++)
	{
		$q_sec= "select * from section where class_id= '$i'";
		$exe_sec= mysql_query($q_sec);
		$p= $i;
		while($row = mysql_fetch_assoc($exe_sec)){
			$val= $row['section'];
			$arr[$i][$j]= $val;
			$j++;
		}
		$j=1;
	}
	
	$cls;
	if(isset($_POST['info'])){
		if($_POST['info'] == "Class 9")
		{
			$cls=1;
		}else if($_POST['info'] == "Class 10"){
			$cls= 2;
		}else{
			$cls= null;
		}
		
		if(isset($arr[$cls])){
			for($i=1; $i<=count($arr[$cls]); ++$i)
			{
				echo "<option value='".$arr[$cls][$i]."'>".$arr[$cls][$i]."</option>";
			}
		}
	}
															
	
	
?>