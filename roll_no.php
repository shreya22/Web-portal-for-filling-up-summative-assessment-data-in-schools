<?php
include('header.php');
include('login_check.php');

$sno= 'select * from student_details where section_id= '.$_GET['id'].';';
$exe_sno= mysql_query($sno);


$nav= 'select * from section where id='.$_GET['id'];
$e_nav = mysql_query($nav);
$res= mysql_fetch_assoc($e_nav);

if($res['class_id'] == 1){
	$cls= 9;
}else{
	$cls= 10;
}

?>

<!-- navigation tip... -->
<p><i>&nbsp;&nbsp;<a href="index.php">class <?php echo $cls; ?></a> / <a href="section.php?id=<?php echo $res['class_id']; ?>">section <?php echo $res['section']; ?></i></p>


<p> <h1 class="text-center">Select Roll Number</h1> <br> <br>
	<ul class="col-md-offset-3" style="width:600px">
		
			<?php
			$chk=0;
				while($row = mysql_fetch_assoc($exe_sno))
				{
					if($row['check'] == 0){
						$chk = null;
					}else{
						$chk = 'entered';
					}
				
					echo '<a href="studentpage.php?id='.$row['roll_no'].'">';
					echo '<li class="list-group-item"><span class="badge">'.$chk.'</span>';
					echo 'Roll No- '.$row['roll_no'];
					echo '</li></a>';
				}
			?>
		
			  
		
	</ul>
	
	
<?php 
include('footer.php');

?>