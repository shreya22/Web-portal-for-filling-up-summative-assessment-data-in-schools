<?php
	$arr= $_POST['info'];
	include('config.php');
	
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	$rno= $_GET["id"];
	
	$empty= 0;
	for($i=0; $i<40; ++$i){
		if(($arr[$i] == null) || ($arr[$i] <1) || ($arr[$i] >5)){
			$empty=1;
		}
	}
	if($empty == 0){
	
	
		$sum=0; //stores sum of all numeric entries
		$avg; //stores average of all numeric entries
		
		//2Da.......................................................................................................
		for($x=0; $x<4; ++$x){
			$sum+= $arr[$x];
		}
		$avg= $sum/4;
		
		//update table with the numeric entries received
		$upd= "update student_report set MKS0= '$arr[0]',
										MKS1= '$arr[1]',
										MKS2= '$arr[2]',
										MKS3= '$arr[3]',
										MKS_TOT= '$sum',
										MKS_AVG= '$avg'
				where ROLL_NO= '$rno' and PART_ID= '2Da'";
		$mys= mysql_query($upd);
		
		$sum=0; $avg=0;
		//2Db.......................................................................................................
		for($x=4; $x<8; ++$x){
			$sum+= $arr[$x];
		}
		$avg= $sum/4;
		
		//update table with the numeric entries received
		$upd= "update student_report set MKS0= '$arr[4]',
										MKS1= '$arr[5]',
										MKS2= '$arr[6]',
										MKS3= '$arr[7]',
										MKS_TOT= '$sum',
										MKS_AVG= '$avg'
				where ROLL_NO= '$rno' and PART_ID= '2Db'";
		$mys= mysql_query($upd);
		
		$sum=0; $avg=0;
		//2Dc.......................................................................................................
		for($x=8; $x<12; ++$x){
			$sum+= $arr[$x];
		}
		$avg= $sum/4;
		
		//update table with the numeric entries received
		$upd= "update student_report set MKS0= '$arr[8]',
										MKS1= '$arr[9]',
										MKS2= '$arr[10]',
										MKS3= '$arr[11]',
										MKS_TOT= '$sum',
										MKS_AVG= '$avg'
				where ROLL_NO= '$rno' and PART_ID= '2Dc'";
		$mys= mysql_query($upd);
		
		$sum=0; $avg=0;
		//2Dd.......................................................................................................
		for($x=12; $x<16; ++$x){
			$sum+= $arr[$x];
		}
		$avg= $sum/4;
		
		//update table with the numeric entries received
		$upd= "update student_report set MKS0= '$arr[12]',
										MKS1= '$arr[13]',
										MKS2= '$arr[14]',
										MKS3= '$arr[15]',
										MKS_TOT= '$sum',
										MKS_AVG= '$avg'
				where ROLL_NO= '$rno' and PART_ID= '2Dd'";
		$mys= mysql_query($upd);
		
		$sum=0; $avg=0;
		//2De.......................................................................................................
		for($x=16; $x<20; ++$x){
			$sum+= $arr[$x];
		}
		$avg= $sum/4;
		
		//update table with the numeric entries received
		$upd= "update student_report set MKS0= '$arr[16]',
										MKS1= '$arr[17]',
										MKS2= '$arr[18]',
										MKS3= '$arr[19]',
										MKS_TOT= '$sum',
										MKS_AVG= '$avg'
				where ROLL_NO= '$rno' and PART_ID= '2De'";
		$mys= mysql_query($upd);
		
		$sum=0; $avg=0;
		//2Df.......................................................................................................
		for($x=20; $x<24; ++$x){
			$sum+= $arr[$x];
		}
		$avg= $sum/4;
		
		//update table with the numeric entries received
		$upd= "update student_report set MKS0= '$arr[20]',
										MKS1= '$arr[21]',
										MKS2= '$arr[22]',
										MKS3= '$arr[23]',
										MKS_TOT= '$sum',
										MKS_AVG= '$avg'
				where ROLL_NO= '$rno' and PART_ID= '2Df'";
		$mys= mysql_query($upd);
		
		$sum=0; $avg=0;
		//2Dg.......................................................................................................
		for($x=24; $x<28; ++$x){
			$sum+= $arr[$x];
		}
		$avg= $sum/4;
		
		//update table with the numeric entries received
		$upd= "update student_report set MKS0= '$arr[24]',
										MKS1= '$arr[25]',
										MKS2= '$arr[26]',
										MKS3= '$arr[27]',
										MKS_TOT= '$sum',
										MKS_AVG= '$avg'
				where ROLL_NO= '$rno' and PART_ID= '2Dg'";
		$mys= mysql_query($upd);
		
		$sum=0; $avg=0;
		//2Dh.......................................................................................................
		for($x=28; $x<32; ++$x){
			$sum+= $arr[$x];
		}
		$avg= $sum/4;
		
		//update table with the numeric entries received
		$upd= "update student_report set MKS0= '$arr[28]',
										MKS1= '$arr[29]',
										MKS2= '$arr[30]',
										MKS3= '$arr[31]',
										MKS_TOT= '$sum',
										MKS_AVG= '$avg'
				where ROLL_NO= '$rno' and PART_ID= '2Dh'";
		$mys= mysql_query($upd);
		
		$sum=0; $avg=0;
		//2Di.......................................................................................................
		for($x=32; $x<36; ++$x){
			$sum+= $arr[$x];
		}
		$avg= $sum/4;
		
		//update table with the numeric entries received
		$upd= "update student_report set MKS0= '$arr[32]',
										MKS1= '$arr[33]',
										MKS2= '$arr[34]',
										MKS3= '$arr[35]',
										MKS_TOT= '$sum',
										MKS_AVG= '$avg'
				where ROLL_NO= '$rno' and PART_ID= '2Di'";
		$mys= mysql_query($upd);
		
		$sum=0; $avg=0;
		//2Dj.......................................................................................................
		for($x=36; $x<40; ++$x){
			$sum+= $arr[$x];
		}
		$avg= $sum/4;
		
		//update table with the numeric entries received
		$upd= "update student_report set MKS0= '$arr[36]',
										MKS1= '$arr[37]',
										MKS2= '$arr[38]',
										MKS3= '$arr[39]',
										MKS_TOT= '$sum',
										MKS_AVG= '$avg'
				where ROLL_NO= '$rno' and PART_ID= '2Dj'";
		$mys= mysql_query($upd);
		
		
		$sum=0; $avg=0;
		$sum1=0; $sum2=0; $sum3=0; $sum4=0;
		$avg1=0; $avg2=0; $avg3=0; $avg4=0;
		
		//updation of total of value system field.......................................................................................................
		for($x=0; $x<40; $x= $x+4){
			$sum1+= $arr[$x];
			$sum2+= $arr[$x+1];
			$sum3+= $arr[$x+2];
			$sum4+= $arr[$x+3];
		}
		
		$sum= $sum1 + $sum2 + $sum3 + $sum4;
		$avg= $sum/4;
		
		//update table with the numeric entries received
		$upd= "update student_report set MKS0= '$sum1',
										MKS1= '$sum2',
										MKS2= '$sum3',
										MKS3= '$sum4',
										MKS_TOT= '$sum',
										MKS_AVG= '$avg'
				where ROLL_NO= '$rno' and PART_ID= '2Dt'";
		$mys= mysql_query($upd);
			//data entry part over of all 10 fields
		
		
		
		$i=1; $j=0; $max=0; $cnt=0; $tmp=0;  $c=0;
		$para='';
		
		$ts= 'select * from indicators where sub_index like "2D2%";';
		$exe_ts= mysql_query($ts);
		$num= mysql_num_rows($exe_ts);
		
		
		$para1=''; $para2=''; $para3=''; $para4=''; $para5='';  $para6=''; $para7=''; $para8=''; $para9=''; $para10=''; 
		
		$arrow = array();
		while($row= mysql_fetch_assoc($exe_ts))
			{
				$arrow[] = $row['indicator'];
			}
		
		for($i=0; $i<2; ++$i){
		//para1
			for($j=0; $j<4; ++$j)
			{
				if($max < $arr[$j])
				{
					$max= $arr[$j];
					$tmp= $j;
				}
			}
			$arr[$tmp] = -1;
			$max = 0;
			$para1= $para1.''.$arrow[$tmp].' ';
			
		//para2
			for($k=4; $k<8; ++$k)
			{
				if($max < $arr[$k])
				{
					$max= $arr[$k];
					$tmp= $k;
				}
			}
			$arr[$tmp] = -1;
			$max = 0;
			$para2= $para2.''.$arrow[$tmp].' ';
			
		//para3
			for($l=8; $l<12; ++$l)
			{
				if($max < $arr[$l])
				{
					$max= $arr[$l];
					$tmp= $l;
				}
			}
			$arr[$tmp] = -1;
			$max = 0;
			$para3= $para3.''.$arrow[$tmp].' ';
			
		//para4
			for($m=12; $m<16; ++$m)
			{
				if($max < $arr[$m])
				{
					$max= $arr[$m];
					$tmp= $m;
				}
			}
			$arr[$tmp] = -1;
			$max = 0;
			$para4= $para4.''.$arrow[$tmp].' ';
			
		//para5
			for($n=16; $n<20; ++$n)
			{
				if($max < $arr[$n])
				{
					$max= $arr[$n];
					$tmp= $n;
				}
			}
			$arr[$tmp] = -1;
			$max = 0;
			$para5= $para5.''.$arrow[$tmp].' ';
			
		//para6
			for($o=20; $o<24; ++$o)
			{
				if($max < $arr[$o])
				{
					$max= $arr[$o];
					$tmp= $o;
				}
			}
			$arr[$tmp] = -1;
			$max = 0;
			$para6= $para6.''.$arrow[$tmp].' ';	
			
		//para7
			for($p=24; $p<28; ++$p)
			{
				if($max < $arr[$p])
				{
					$max= $arr[$p];
					$tmp= $p;
				}
			}
			$arr[$tmp] = -1;
			$max = 0;
			$para7= $para7.''.$arrow[$tmp].' ';
			
		//para8
			for($q=28; $q<32; ++$q)
			{
				if($max < $arr[$q])
				{
					$max= $arr[$q];
					$tmp= $q;
				}
			}
			$arr[$tmp] = -1;
			$max = 0;
			$para8= $para8.''.$arrow[$tmp].' ';
			
		//para9
			for($r=32; $r<36; ++$r)
			{
				if($max < $arr[$r])
				{
					$max= $arr[$r];
					$tmp= $r;
				}
			}
			$arr[$tmp] = -1;
			$max = 0;
			$para9= $para9.''.$arrow[$tmp].' ';
			
		//para10
			for($s=36; $s<40; ++$s)
			{
				if($max < $arr[$s])
				{
					$max= $arr[$s];
					$tmp= $s;
				}
			}
			$arr[$tmp] = -1;
			$max = 0;
			$para10= $para10.''.$arrow[$tmp].' ';
			
		}

		$para= $para1."\n".$para2."\n".$para3."\n".$para4."\n".$para5."\n".$para6."\n".$para7."\n".$para8."\n".$para9."\n".$para10;
		
		//updating the table with the paragraph
	//	$line=  "update student_report set DISPLAY_TEXT='$para' where ROLL_NO= '$rno' and PART_ID= '2B1'";
	//	mysql_query($line);
		
		echo $para;
	}	
	else{
		echo 'Invalid or NULL entry in one or more fields! Please recheck above entries.';
	}
	
?>