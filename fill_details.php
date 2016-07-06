<?php
session_start();

	include('header.php');
	
	
	if(isset($_POST['enter'])){
	
		$rno= $_POST['roll_no'];
		$admn= $_POST['admn'];
		$name= $_POST['name'];
		$fname= $_POST['fname'];
		$mname= $_POST['mname'];
		$bday= $_POST['bday'];
		$sub_code= $_POST['sub_code'];
		$att= $_POST['att'];
		$r_calc_i= $_POST['r_calc_i'];
		$sex= $_POST['sex'];
		
		if($sex == 'male'){
			$sex='M';
		}else{
			$sex='F';
		}
		
		if(($rno>9100) && ($rno < 10000)){
			$class= 9;
		}else if(($rno>10100) && ($rno < 11000)){
			$class= 10;
		}else if(($rno>11100) && ($rno < 12000)){
			$class= 11;
		}else if($rno>12100){
			$class= 12;
		}else{}
		
		if($class==9){
			$cls= 1;
		}else if($class==10){
			$cls=2;
		}else{
			$cls= 3;
		}
		
		$sec; $c=1;
		$m= $class*1000 + 200;
		
		while($m < ($class+1)*1000){
			if($rno < $m){
				$sec= $c; 
				break;
			}
			$c++;
			$m= $m + 100;
		}
		
		$que= "select * from student_details where roll_no = '$rno'";
		$que_exe= mysql_query($que);
		$num_use= mysql_num_rows($que_exe);
		
		if($num_use >= 1){
			$alert= 'This roll number already exists!';
		}else{
			$q= "insert into `student_details` values('', '$cls', '$sec', '$rno', '$admn', '$name', '$fname', '$mname', '$bday', '$sub_code', '$att', '$r_calc_i', '$sex', '0', '0');";
			$m_q= mysql_query($q);
			if($m_q){
				$alert= 'registered!';
			}else{
				$alert= 'nhi yr :(';
			}
			
		//	header("Location: index.php");
		}
		echo $alert;
	}
	
?>

	
	    <p> <h1 class="text-center">Enter Student Details</h1> <br> <br>
	
	<form name="myForm" action="fill_details.php" method= "POST" class="form-horizontal" role="form">
		<table class="table table-striped">
			<tr>
				<td>
					<div class="form-group">
						<label class="control-label col-md-4" for="ROll number" id="inputWarning" > Roll-No: </label>
						<div class="col-md-4">
						<input type="number" name="roll_no" class="form-control" id="" placeholder="Enter Roll Number" autofocus required>
						</div>
					</div>
				</td>
				<td>
					<div class="form-group">
						<label class="control-label col-md-4 " for="admission number" id="inputWarning" > Admission-No: </label>
						<div class="col-md-4">
						<input type="number" name="admn" class="form-control" id="" placeholder="Enter Admission Number" autofocus required>
						</div>
					</div>
				</td>
			</tr>
			
			<tr>
				<td>
					<div class="form-group">
						<label class="control-label col-md-2 col-md-offset-2" for="name" id="inputWarning" >Name: </label>
						<div class="col-md-4">
						<input type="text" name="name" class="form-control" id="" placeholder="Enter Name" autofocus required>
						</div>
					</div>
				</td>
				<td>
					<div class="form-group">
						<label class="control-label col-md-4" for="fname" id="inputWarning" >Father's Name: </label>
						<div class="col-md-4">
						<input type="text" name="fname" class="form-control" id="" placeholder="Enter Father's Name" autofocus required>
						</div>
					</div>
				</td>
			</tr>
			
			<tr>
				<td>
					<div class="form-group">
						<label class="control-label col-md-4" for="name" id="inputWarning" >Mother's Name: </label>
						<div class="col-md-4">
						<input type="text" name="mname" class="form-control" id="" placeholder="Enter Mother's Name" autofocus required>
						</div>
					</div>
				</td>
				<td>
					<div class="form-group">
						<label class="control-label col-md-4" for="fname" id="inputWarning" >Date of Birth: </label>
						<div class="col-md-4">
						<input type="text" name="bday" class="form-control" id="" placeholder="dd/mm/yyyy" autofocus required>
						</div>
					</div>
				</td>
			</tr>
			
			<tr>
				<td>
					<div class="form-group">
						<label class="control-label col-md-4" for="name" id="inputWarning" >Subject Code: </label>
						<div class="col-md-4">
						<select class="form-control" name="sub_code" >
							<option name="sub">901</option>
							<option name="sub">902</option>
						</select>
						</div>
					</div>
				</td>
				<td>
					<div class="form-group">
						<label class="control-label col-md-4" for="att" id="inputWarning" >Attendance: </label>
						<div class="col-md-4">
						<input type="number" name="att" class="form-control" id="" autofocus required placeholder="input attendance">
						</div>
					</div>
				</td>
			</tr>
			
			<tr>
				<td>
					<div class="form-group">
						<label class="control-label col-md-4" for="name" id="inputWarning" >R_CALC_I: </label>
						<div class="col-md-4">
						<input type="number" name="r_calc_i" class="form-control" id="" autofocus required>
						</div>
					</div>
				</td>
				<td>
					<div class="form-group">
						<label class="control-label col-md-4" for="att" id="inputWarning" >Gender: </label>
						<div class="col-md-4">
						<select class="form-control" name="sex" >
							<option disabled>select gender</option>
							<option name="sex">male</option>
							<option name="sex">female</option>
						</select>
						</div>
					</div>
				</td>
			</tr>
		</table>
	<div style="text-align:center">	
			<button type="submit" class="btn btn-success " name="enter" > <span class="glyphicon glyphicon-log-in"></span> Submit! </button>
	</div>
	
	</form>
	<br><br><br>
<?php

include('footer.php');
?>