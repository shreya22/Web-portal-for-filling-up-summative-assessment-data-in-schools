<?php
session_start();

	include('header.php');
	
	if(isset($_SESSION['username']))
	{
		header("Location: index.php");
	}
	
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$pass= $_POST['pass'];
		
		$log= "select * from systemuser where username='".$username."' and password= '".$pass."';";
		$exe= mysql_query($log);
		$num= mysql_num_rows($exe);
		
		if($num == 1)
		{
			header("Location: index.php");
		}
		else{
			echo 'Invalid username or password!';
		}
		
		$_SESSION['username']= $username;
	}
	
?>

	
	    <p> <h1 class="text-center">System Login </h1> <br> <br>
	
	   <form name="myForm" action="login.php" method= "POST" onsubmit="return validateForm()" class="form-horizontal" role="form">
			
			<!-- For Mobile Number -->
			
			<div class="form-group">
		     		<label class="control-label col-md-2 col-md-offset-2" for="Mobile number" id="inputWarning" > Username: </label>
					<div class="col-md-4">
					<input type="text" name="username" class="form-control" id="email" placeholder="Enter Username">
					</div>
            </div>
          
		   <!-- For Password -->
		   
		   <div class="form-group">
                  <label class="control-label col-md-2 col-md-offset-2" for="pwd">Password:</label>
                  <div class="col-md-4">          
                  <input type="password" name="pass" class="form-control" placeholder="Enter password">
                  </div>
            </div>
		    
			<div class="row" >
			
			
			<!-- For Submit Button -->
			
		    
                  <div class="col-md-offset-4 col-md-1">        
                  <button type="submit" class="btn btn-success " name="login" > <span class="glyphicon glyphicon-log-in"></span> Login </button>
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