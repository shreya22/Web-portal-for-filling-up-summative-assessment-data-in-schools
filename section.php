<?php
include('header.php');
include('login_check.php');

//selecting number of sections in class
	$que= 'select * from section where class_id = '.$_GET['id'];
	$exe= mysql_query($que);

	if($_GET['id'] == 1){
		$cls= 9;
	}else{
		$cls= 10;
	}
	
?>

<!-- navigation tip... -->
<p><i>&nbsp;&nbsp;<a href="index.php">class <?php echo $cls; ?></a></i></p>

<p> <h1 class="text-center">Select Section</h1> <br> <br>
	
			 <ul class="col-md-offset-3" style="width:600px">
				  
				  <?php
					while($row= mysql_fetch_assoc($exe))
					{
						$stu= 'select * from student_details where class_id='.$_GET['id'].' and section_id= '.$row['id'].';';
						$stu_exe = mysql_query($stu);
						$num_sec= mysql_num_rows($stu_exe);
						
						$s= "select * from section where id='".$row['id']."';";
						$sc= mysql_query($s);
						$sectn= mysql_fetch_assoc($sc);
						
						echo '<li class="list-group-item"><span class="badge">'.$num_sec.' students</span>';
						
						if(isset($_SESSION['TEACHER_NAME'])){
							echo '<a href="roll_no.php?id='.$row['id'].'"><button class="btn btn-primary" type="button">'.$cls.'th '.$row['section'].'</button></a>';
						}else{
							echo '<a href="teachers_login.php?class='.$_GET['id'].'&section='.$sectn['section'].'"><button class="btn btn-primary" type="button">'.$cls.'th '.$row['section'].'</button></a>';
						}
						echo '</li>';
					
					}
				  ?>
				  
				 
			<div class="row" >
			</ul>
			
             
    </div>
<?php 
include('footer.php');

?>