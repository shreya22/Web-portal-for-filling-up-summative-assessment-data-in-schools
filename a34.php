<?php
	$arr= $_POST['info'];
	include('config.php');
	
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	$rno= $_GET["id"];
	
	$sum=0; //stores sum of all numeric entries
	$avg; //stores average of all numeric entries
	
	$check=0;
	
	for($x=0; $x<sizeof($arr); ++$x){
		$sum+= $arr[$x];
		if(($arr[$x] < 1) || ($arr[$x] >5)) {
			$check=1;
		}
	}
	
	
	$avg= $sum/sizeof($arr);
	
	//update table with the numeric entries received
	$upd= "update student_report set MKS0= '$arr[0]',
									MKS1= '$arr[1]',
									MKS2= '$arr[2]',
									MKS3= '$arr[3]',
									MKS4= '$arr[4]',
									MKS5= '$arr[5]',
									MKS6= '$arr[6]',
									MKS7= '$arr[7]',
									MKS8= '$arr[8]',
									MKS9= '$arr[9]',
									MKS_TOT= '$sum',
									MKS_AVG= '$avg'
			where ROLL_NO= '$rno' and PART_ID= '3A4'";
	$mys= mysql_query($upd);
	
	$ts= 'select * from indicators where sub_index="3A4";';
	$exe_ts= mysql_query($ts);
	$num= mysql_num_rows($exe_ts);
	
	$i=1; $j=0; $max=0; $cnt=0; $tmp=0;  $c=0;
	$para='';
	
	$arrow = array();
	while($row= mysql_fetch_assoc($exe_ts))
		{
			$arrow[] = $row['indicator'];
		}
	
	for($i=0; $i<5; ++$i){
		for($j=0; $j<$num; ++$j)
		{
			if($max < $arr[$j])
			{
				$max= $arr[$j];
				$tmp= $j;
			}
		}
		$arr[$tmp] = -1;
		$max = 0;
		
		$para= $para.''.$arrow[$tmp].' ';
		
		
	}

	if($check == 0)
	{
		echo $para;
	}else{
		echo 'invalid or null entry / section not selected!';
	}
?>