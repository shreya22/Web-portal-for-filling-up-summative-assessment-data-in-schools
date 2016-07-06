<?php
session_start();
include('config.php');
include('header.php');

	if(isset($_SESSION['TEACHER_NAME'])){
		header("Location: index.php");
	}

	$cls= $_GET['class'];
	$sec= $_GET['section'];
	$log=0;
	
	
	$que= "select * from teachers where class='$cls' and section= '$sec';";
	$mys= mysql_query($que);
	$row= mysql_fetch_assoc($mys); 
	
	
	$q= "select * from section where class_id='$cls' and section= '$sec';";
	$sc= mysql_query($q);
	$sctn= mysql_fetch_assoc($sc);

	if(isset($_POST['tea_login'])){
		$pass= $_POST['pass'];
		if($pass == $row['password'])
		{
			$_SESSION['TEACHER_NAME']= $row['name'];
			header("Location: roll_no.php?id=".$sctn['id']);
	//	header("Location: roll_no.php");
		}else{
			echo 'invalid password!';
		}
	}
	
	
?>

	
	    <p> <h2 class="text-center">Welcome <b><?php echo $row['name']; ?> </h3></b> </p>
		<p> <h4 class="text-center">Please Log in to view your class details</h4> </p>
		
		<br><br>
		
	   <form name="myForm" action="<?php echo $_SERVER['REQUEST_URI'] ?>" method= "POST" onsubmit="return validateForm()" class="form-horizontal" role="form">
          
		   <!-- For Password -->
		   
		   <div class="form-group">
                  <label class="control-label col-md-2 col-md-offset-2" for="pwd">Password:</label>
                  <div class="col-md-4">          
                  <input type="password" name="pass" class="form-control" placeholder="Enter password" autofocus required>
                  </div>
            </div>
		    
			<div class="row" >
			
			
			<!-- For Submit Button -->
			
		    
                  <div class="col-md-offset-4 col-md-1">        
                  <button type="submit" class="btn btn-success " name="tea_login" > <span class="glyphicon glyphicon-log-in"></span> Login </button>
                  </div> 
        	
             </div>
             
		</form>


     <!-- Javascript Validations -->
	 
	 <script>
			
			function validateForm() {
		    var x = document.forms["myForm"]["username"].value;
		    if (x == null || x == "") {
		        alert("Username must be filled out");
		        return false;
		    }
			 
			var y = document.forms["myForm"]["pass"].value;
		    if (y == null || y == "") {
		        alert("Password must be filled out");
		        return false;
		    }
		}
	 </script>		
	 
	 <!-- End of Javascript Validations -->
	
<?php

include('footer.php');
?>