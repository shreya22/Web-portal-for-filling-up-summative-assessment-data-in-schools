<?php
include('header.php');
include('login_check.php');

				$cls9 =1;
				$cls10=2;
				
				//selecting all students of class 9
				$q9= "select * from student_details where class_id='1'";
				$exe9= mysql_query($q9);
				$num9= mysql_num_rows($exe9);
				
				//selecting all students of class 10
				$q10= "select * from student_details where class_id='2'";
				$exe10= mysql_query($q10);
				$num10= mysql_num_rows($exe10);

?>

<p> <h1 class="text-center">Select Class</h1> <br> <br>
	
			 <ul class="col-md-offset-3" style="width:600px">
			  <li class="list-group-item"><span class="badge">Total students- <?php echo $num9; ?></span> 
				<a href="section.php?id=<?php echo $cls9; ?>"><button class="btn btn-primary" type="button">Class 9</button></a>
			  </li>
			  
			  <li class="list-group-item"><span class="badge">Total students- <?php echo $num10; ?></span> 
				 <a href="section.php?id=<?php echo $cls10; ?>"><button class="btn btn-primary" type="button">Class 10</button></a>
			  </li>
			<div class="row" >
			</ul>
			
             
    </div>

	
<?php
include('footer.php');
?>