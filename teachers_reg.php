<?php
session_start();

	include('header.php');
	
	$query= "select * from class";
	$exe= mysql_query($query);
	$num_class= mysql_num_rows($exe);
	$alert='';
	if(isset($_POST['register'])){
		$name= $_POST['name'];
		$phone= $_POST['phone'];
		$pwd= $_POST['pass'];
		$class= $_POST['class'];
		$section= $_POST['section'];
		
		if($class=='Class 9'){
			$cls= 1;
		}else if($class=='Class 10'){
			$cls=2;
		}else{
			$cls= 3;
		}
		
		$que= "select * from teachers where class='$cls' and section='$section'";
		$que_exe= mysql_query($que);
		$num_use= mysql_num_rows($que_exe);
		
		if($num_use >= 1){
			$alert= 'class and section already registered!';
		}else{
			$q= "insert into teachers values('', '$cls', '$section', '$name', '$phone', '$pwd');";
			$m_q= mysql_query($q);
			echo 'registered!';
			
			header("Location: index.php");
		}
	}
	
?>

	
	    <p> <h1 class="text-center">Class Teacher Register</h1> <br> <br>
	
	   <form name="myForm" action="teachers_reg.php" method= "POST" onsubmit="return validateForm()" class="form-horizontal" role="form">
			
			<!-- For Username -->
			
			<div class="form-group">
		     		<label class="control-label col-md-2 col-md-offset-2" for="Mobile number" id="inputWarning" > Name: </label>
					<div class="col-md-4">
					<input type="text" name="name" class="form-control" id="" placeholder="Enter Name" autofocus required>
					</div>
            </div>
			
			<!-- For Phone -->
			
			<div class="form-group">
		     		<label class="control-label col-md-2 col-md-offset-2" for="Mobile number" id="inputWarning" > Phone-NO: </label>
					<div class="col-md-4">
					<input type="number" name="phone" class="form-control" id="" placeholder="Enter Phone Number" autofocus required>
					</div>
            </div>
			
			<!-- Select Class: -->
			
			<div class="form-group">
		     		<label class="control-label col-md-2 col-md-offset-2" for="Mobile number" id="inputWarning" > Select Class: </label>
					<div class="col-md-4">
						<select class="form-control" id="class" name="class" onchange="fun();">
							<option >select class </option>
							<?php
								
								while($row= mysql_fetch_assoc($exe)){
									echo "<option>Class ".$row['class']."</option>";
								}
							
							?>
						</select>
					</div>
            </div>
			
			<!-- for section -->
			<div class="form-group">
		     		<label class="control-label col-md-2 col-md-offset-2" for="Mobile number" id="inputWarning" > Select Section: </label>
					<div class="col-md-4">
						<select class="form-control" id="section" name="section">
							<option disabled>select section </option>
							
						</select>
					</div>
            </div>
          
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
                  <button type="submit" class="btn btn-success " name="register" id="register" > <span class="glyphicon glyphicon-log-in"></span> Register </button>
				  </div> 
				<p style="color: red;"><b>&nbsp;&nbsp;<?php echo $alert; ?></b></p>
             </div>
             
		</form>


     <!-- Javascript Validations -->
	 
	 <script>
			
	/*		function validateForm() {
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
		} */
		
	/*	function fun(){
			var xmlhttp;
			try{
				xmlhttp = new XMLHttpRequest;
			}catch(e){
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			if(xmlhttp){
				var form= document['myForm'];
				var class= form['class'].value;
				
				xmlhttp.open("GET", "http://localhost/bsp/getSection.php?class="+class, true);
				
				xmlhttp.onreadystatechange= function(){
					if(this.readyState == 4)
					{
						alert(this.responseText);
					}
				}
				xmlhttp.send(null);
			}
		} */
		
		function fun(){
		var cls= $( "#class option:selected" ).text();
		var form= document['myForm'];
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: cls},
		   url: "getSection.php?class="+cls,
		   success: function(msg){
			//	var sec = $(document.createElement("select"));
			//	sec.name="section";
			//	sec.id="section";
			
				$("#section").text('');
				var x= $(msg);
			x.appendTo('#section');
		   }
		}); 
		
	}
	 </script>		
	 
	 <!-- End of Javascript Validations -->
	
<?php

include('footer.php');
?>