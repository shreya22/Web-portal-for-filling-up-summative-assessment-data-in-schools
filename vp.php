<?php
	$arr= $_POST['info'];
	include('config.php');
	
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	$ts= 'select * from indicators where sub_index="2C1";';
	$exe_ts= mysql_query($ts);
	$num= mysql_num_rows($exe_ts);
	
	$arrow = array();
	while($row= mysql_fetch_assoc($exe_ts))
		{
			$arrow[] = $row['indicator'];
		}
		
	$empty= 0;	
	for($i=0; $i<20; ++$i){
		if(($arr[$i] == null) || ($arr[$i] <1) || ($arr[$i] >5)){
			$empty=1;
		}
	}
	if($empty == 0){	
		
		
		$rno= $_GET["id"];
		$sum_va=0; //stores sum of all numeric entries of visual arts
		$avg_pa; //stores average of all numeric entries of visual arts
		
		for($x=0; $x<10; ++$x){
			$sum_va+= $arr[$x];
		}
		$avg_va= $sum_va/10;
		
		//update table with the numeric entries received in visual arts section
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
										MKS_TOT= '$sum_va',
										MKS_AVG= '$avg_va'
				where ROLL_NO= '$rno' and PART_ID= '2C1'";
		$mys= mysql_query($upd);
		
		
		
		$ts= 'select * from indicators where sub_index="2C2";';
		$exe_ts= mysql_query($ts);
		
		while($row= mysql_fetch_assoc($exe_ts))
			{
				$arrow[] = $row['indicator'];
			}
		
		$sum_pa=0; //stores sum of all numeric entries of perfroming arts
		$avg_pa; //stores average of all numeric entries of performing arts	
		
		for($x=10; $x<20; ++$x){
			$sum_pa+= $arr[$x];
		}
		$avg_pa= $sum_pa/10;
		
		//update table with the numeric entries received in performing arts section
		$upd= "update student_report set MKS0= '$arr[10]',
										MKS1= '$arr[11]',
										MKS2= '$arr[12]',
										MKS3= '$arr[13]',
										MKS4= '$arr[14]',
										MKS5= '$arr[15]',
										MKS6= '$arr[16]',
										MKS7= '$arr[17]',
										MKS8= '$arr[18]',
										MKS9= '$arr[19]',
										MKS_TOT= '$sum_pa',
										MKS_AVG= '$avg_pa'
				where ROLL_NO= '$rno' and PART_ID= '2C2'";
		$mys= mysql_query($upd);
		
		$m=0;
		for($i=0; $i<10; $i++)
		{
			$m= $i + 10;
			$a[$i]= $arr[$i] + $arr[$m];
		}
		$sum= $sum_va+$sum_pa;
		$avg= $avg_va+$avg_pa;
		//update table with the numeric entries in visual and performing arts section
		$upd= "update student_report set MKS0= '$a[0]',
										MKS1= '$a[1]',
										MKS2= '$a[2]',
										MKS3= '$a[3]',
										MKS4= '$a[4]',
										MKS5= '$a[5]',
										MKS6= '$a[6]',
										MKS7= '$a[7]',
										MKS8= '$a[8]',
										MKS9= '$a[9]',
										MKS_TOT= '$sum',
										MKS_AVG= '$avg'
				where ROLL_NO= '$rno' and PART_ID= '2Ct'";
		$mys= mysql_query($upd);
		
		
		$i=1; $j=0; $max=0; $cnt=0; $tmp=0;  $c=0;
		$para='';
		
		
		
		for($i=0; $i<2; ++$i){
			for($j=0; $j<10; ++$j)
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
		echo $para."\n";
		
	//	$para= $para."<br>";
		$para='';
		
		for($i=0; $i<2; ++$i){
			for($j=10; $j<20; ++$j)
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

		echo $para;
	
	}else{
		echo 'Invalid or NULL entry in one or more fields! Please recheck above entries.';
	}
	
?>