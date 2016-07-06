<?php
include('header.php');
include('login_check.php');

//selects a row from student details with a given roll number
$que= 'select * from student_details where roll_no='.$_GET['id'].';';
$exe= mysql_query($que);
$res= mysql_fetch_assoc($exe);

if($res['class_id'] == 1){
	$cls= 9;
}else{
	$cls=10;
}

//getting the value of section from section table
$sec= 'select * from section where id='.$res['section_id'].';';
$e_sec= mysql_query($sec);
$s_res= mysql_fetch_assoc($e_sec);

if(isset($_POST['submit'])){
	header("Location: login.php");
}


?>

<!-- navigation tip... -->
<p><i>&nbsp;&nbsp;<a href="index.php">class <?php echo $cls; ?></a> / <a href="section.php?id=<?php echo $res['class_id']; ?>">
section <?php echo $s_res['section']; ?></a> / <a href=""><?php echo $_GET['id']; ?></a></i></p>
<br>

<div class="container">



	<h2><b>Student profile</b></h2>
	  <p>(Basic details of student)</p>            
		  <table class="table table-striped">
			<tbody>
			  <tr>
				<td><b>Roll No</b></td>
				<td><?php echo $res['roll_no']; ?></td>
			  </tr>
			  <tr>
				<td><b>Name</b></td>
				<td><?php echo $res['name']; ?></td>
			  </tr>
			  <tr>
				<td><b>Father's Name</b></td>
				<td><?php echo $res['f_name']; ?></td>
			  </tr>
			  <tr>
				<td><b>Mother's Name</b></td>
				<td><?php echo $res['m_name']; ?></td>
			  </tr>
			  <tr>
				<td><b>Admn No</b></td>
				<td><?php echo $res['admn_no']; ?></td>
			  </tr>
			  <tr>
				<td><b>Date of Birth</b></td>
				<td><?php echo $res['DOB']; ?></td>
			  </tr>
			</tbody>
	  </table>
	  
	  <br><br>
 

	<ul class="list-group">
		  <a href="#part1"><li class="list-group-item">Part 1: Scholastic Areas</li></a>
		  <a href="#part2"><li class="list-group-item">Part 2: Co-Scholastic Areas</li></a>
		  <a href="#part3"><li class="list-group-item">Part 3: Co-Scholastic Activities</li></a>
	</ul>
	 
	<br><br>
	 
	<p id="part1"><h2><b>Part 1: Scholastic Areas</b></h2></p>
	<ul style="list-style-type:none;">
		<h4><li>Yet to be updated...</li></h4>
	</ul>
	
	<br><br>
	
	<p id="part2"><h2><b>Part 2: Co-Scholastic Areas</b></h2></p>
	
	<table class="table table-hover">
			<tbody>
			  <tr>
				<td><a href="#2a"><b>2(A): Life Skills</b></a></td>
			  </tr>
			  <tr>
				<td><a href="#2b"><b>2(B): Work Education</b></a></td>
			  </tr>
			  <tr>
				<td><a href="#2c"><b>2(C): Visual & Performing Arts</b></a></td>
			  </tr>
			  <tr>
				<td><a href="#2d"><b>2(D): Attitude & Values</b></a></td>
			  </tr>
			</tbody>
	  </table>
	  
	  <br>
	  
		<ul style="list-style-type:none">
			<li>
			<!-- life skills list item begins -->		
				<p id="2a"><h3><b>2(A): Life Skills</b></h3></p>
				
				<ul class="list-group">
					  <a href="#2a1"><li class="list-group-item">(1) Thinking Skills</li></a>
					  <a href="#2a2"><li class="list-group-item">(2) Social Skills</li></a>
					  <a href="#2a3"><li class="list-group-item">(3) Emotional Skills</li></a>
				</ul>
				
				<br>
				
				<ul style="list-style-type:none">
					<li>
					<!-- thinking skills list item begins -->
						<p id="2a1"><h4><b>(1) Thinking Skills</b></h4></p>
						(Rate each field indicator from 1 to 5)
						<br><br>
						
						<!-- table containing indicators and input fields -->
					
							<table class="table table-striped">
								<tbody>
								
								<?php 
									$ts= 'select * from indicators where sub_index="2A1";';
									$exe_ts= mysql_query($ts);
									$num_ts= mysql_num_rows($exe_ts);
									
									$ts= array();
									
									while($row = mysql_fetch_assoc($exe_ts))
									{
										echo '<tr>';
											echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
											echo '<td><b>'.$row['indicator'].'</b></td>';
											echo '<td style="width:100px">';	
												echo '<input type="number" class="form-control ts" autofocus required>';
											echo '</td>';
										echo '<tr>';
									}
									
								?>
								
								<tr>
									<td></td>
									<td style="text-align:center">	
										<button type="button" class="btn btn-success" onclick="ts(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
									</td>
								</tr>
								
								<!-- paragraph textarea for thinking sills -->
								<tr><td colspan="3">
									<div class="form-group">
										<textarea rows="5" class="form-control txt_ts txt_2a" ></textarea>
									</div>
								</td>
								</tr>
								
								
								</tbody>
							</table>
							<p style="text-align:center; color: red;" class="error_ts"><b></b></p>
							
					
					
					<!-- thinking skills list item over -->
					</li>
					
					<li>
					<!-- social skills list item begins -->
						<p id="2a2"><h4><b>(2) Social Skills</b></h4></p>
						(Rate each field indicator from 1 to 5)
						<br><br>
						
						<!-- table containing indicators and input fields -->
						
							<table class="table table-striped">
								<tbody>
								
								<?php 
									$ts= 'select * from indicators where sub_index="2A2";';
									$exe_ts= mysql_query($ts);
									$num_ts= mysql_num_rows($exe_ts);
									
									$ts= array();
									
									while($row = mysql_fetch_assoc($exe_ts))
									{
										echo '<tr>';
											echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
											echo '<td><b>'.$row['indicator'].'</b></td>';
											echo '<td style="width:100px">';	
												echo '<input type="number" class="form-control ss">';
											echo '</td>';
										echo '<tr>';
									}
									
								?>
								
								<tr>
									<td></td>
									<td style="text-align:center">	
										<button type="button" class="btn btn-success " onclick="ss(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
									</td>
								</tr>
								
								<!-- paragraph textarea for social sills -->
								<tr><td colspan="3">
									<div class="form-group">
										<textarea rows="5" class="form-control txt_ss txt_2a" ></textarea>
									</div>
								</td>
								</tr>
								
								</tbody>
							</table>
							<p style="text-align:center; color: red;" class="error_ss"><b></b></p>
					
							
					
					<!-- social skills list item over -->
					</li>
					
					<li>
					<!-- emotional skills list item begins -->
						<p id="2a3"><h4><b>(3) Emotional Skills</b></h4></p>
						(Rate each field indicator from 1 to 5)
						<br><br>
						
						<!-- table containing indicators and input fields -->
						
							<table class="table table-striped">
								<tbody>
								
								<?php 
									$ts= 'select * from indicators where sub_index="2A3";';
									$exe_ts= mysql_query($ts);
									$num_ts= mysql_num_rows($exe_ts);
									
									$ts= array();
									
									while($row = mysql_fetch_assoc($exe_ts))
									{
										echo '<tr>';
											echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
											echo '<td><b>'.$row['indicator'].'</b></td>';
											echo '<td style="width:100px">';	
												echo '<input type="number" class="form-control es">';
											echo '</td>';
										echo '<tr>';
									}
									
								?>
								
								<tr>
									<td></td>
									<td style="text-align:center">	
										<button type="button" class="btn btn-success " onclick="es(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
									</td>
									
								</tr>
								
								<!-- paragraph textarea for emotional sills -->
								<tr><td colspan="3">
									<div class="form-group">
										<textarea rows="5" class="form-control txt_es txt_2a" ></textarea>
									</div>
								</td>
								</tr>
								
								</tbody>
							</table>
							<p style="text-align:center; color: red;" class="error_es"><b></b></p>
					
							
					
					<!-- Emotional skills list item over -->
					</li>
					
					<button type="button" class="btn btn-danger btn-block btn-lg" onclick="a2_txt(); "> <span class="glyphicon glyphicon-log-in"></span> Submit Section 2(A)</button>
					<br><br>
				</ul>
				
			<!-- life skills list item over -->			
			</li>
			
			<li>
			<!-- Work Education list item begins -->
				<p id="2b"><h3><b>2(B): Work Education</b></h3></p>
				<br>
				<ul style="list-style-type: none;">
					<li>
					
						
						<!-- table containing indicators and input fields -->
						
							<table class="table table-striped">
								<tbody>
								
								<?php 
									$ts= 'select * from indicators where sub_index="2B1";';
									$exe_ts= mysql_query($ts);
									$num_ts= mysql_num_rows($exe_ts);
									
									$ts= array();
									
									while($row = mysql_fetch_assoc($exe_ts))
									{
										echo '<tr>';
											echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
											echo '<td><b>'.$row['indicator'].'</b></td>';
											echo '<td style="width:100px">';	
												echo '<input type="number" class="form-control we" >';
											echo '</td>';
										echo '<tr>';
									}
									
								?>
								
								<tr>
									<td></td>
									<td style="text-align:center">	
										<button type="button" class="btn btn-success " onclick="we(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
									</td>
								</tr>
								
								<tr><td colspan="3">
									<div class="form-group">
										<textarea rows="5" class="form-control txt_we txt_2b" ></textarea>
									</div>
								</td>
								</tr>
								
								</tbody>
							</table>
							<p style="text-align:center; color: red;" class="error_we"><b></b></p>
					
							
					</li>
				</ul>
			
			<!-- work list arts list item over -->
			</li>
			<button type="button" class="btn btn-danger btn-block btn-lg" onclick="b2_txt(); "> <span class="glyphicon glyphicon-log-in"></span> Submit Section 2(B)</button>
					<br><br>
			
			
			<li>
			<!-- visual and perfroming arts list item begins-->
				<p id="2c"><h3><b>2(C): Visual & Performing Arts</b></h3></p>
				<br>
				<ul class="list-group">
					  <a href="#2c1"><li class="list-group-item">(1) Visual Arts</li></a>
					  <a href="#2c2"><li class="list-group-item">(2) Performing Arts</li></a>
				</ul>
				
				<ul style="list-style-type: none;">
					<li>
					<!-- visual arts list item begins -->
						<p id="2c1"><h4><b>(1) Visual Arts</b></h4></p>
						(Rate each field indicator from 1 to 5)
						<br><br>
						
						<!-- table containing indicators and input fields -->
					
							<table class="table table-striped">
								<tbody>
								
								<?php 
									$ts= 'select * from indicators where sub_index="2C1";';
									$exe_ts= mysql_query($ts);
									$num_ts= mysql_num_rows($exe_ts);
									
									$ts= array();
									
									while($row = mysql_fetch_assoc($exe_ts))
									{
										echo '<tr>';
											echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
											echo '<td><b>'.$row['indicator'].'</b></td>';
											echo '<td style="width:100px">';	
												echo '<input type="number" class="form-control va" >';
											echo '</td>';
										echo '<tr>';
									}
									
								?>
								
								</tbody>
							</table>
							
					<!-- visual arts list item over -->
					</li>
					
					<li>
					<!-- performing arts list item begins -->
						<p id="2c2"><h4><b>(2) Performing Arts</b></h4></p>
						(Rate each field indicator from 1 to 5)
						<br><br>
						
						<!-- table containing indicators and input fields -->
					
							<table class="table table-striped">
								<tbody>
								
								<?php 
									$ts= 'select * from indicators where sub_index="2C2";';
									$exe_ts= mysql_query($ts);
									$num_ts= mysql_num_rows($exe_ts);
									
									$ts= array();
									
									while($row = mysql_fetch_assoc($exe_ts))
									{
										echo '<tr>';
											echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
											echo '<td><b>'.$row['indicator'].'</b></td>';
											echo '<td style="width:100px">';	
												echo '<input type="number" class="form-control pa">';
											echo '</td>';
										echo '<tr>';
									}
									
								?>
								
								<tr>
									<td></td>
									<td style="text-align:center">	
										<button type="button" class="btn btn-success " onclick="vp(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
									</td>
								</tr>
								
								<tr><td colspan="3">
									<div class="form-group">
										<textarea rows="5" class="form-control txt_vp txt_2c" ></textarea>
									</div>
								</td>
								</tr>
								
								</tbody>
							</table>
							<p style="text-align:center; color: red;" class="error_vp"><b></b></p>
							
							
					<!-- performing arts list item over -->
					</li>
					
					
				</ul>
			<!-- visual and performing arts list item over -->	
			</li>
			
				<button type="button" class="btn btn-danger btn-block btn-lg" onclick="c2_txt(); "> <span class="glyphicon glyphicon-log-in"></span> Submit Section 2(C)</button>
				<br><br>
			
			<li>
			<!-- attitudes and values list item begins-->
				<p id="2d"><h3><b>2(D): Attitudes & Values</b></h3></p>
				<br>
				<ul class="list-group">
					  <a href="#2d1"><li class="list-group-item">(1) Attitudes</li></a>
					  <a href="#2d2"><li class="list-group-item">(2) Value System</li></a>
				</ul>
				
				<ul style="list-style-type: none;">
					<li>
					<!-- attitudes list item begins -->
						<p id="2d1"><h4><b>(1) Attitudes</b></h4></p>
						(Rate each field indicator from 1 to 5)
						<br><br>
						
						<ul style="list-style-type: none">
							<li>
							<!-- teachers list item begins -->
								
								<p id="2a1"><h5><b>(1.1) Teachers </b></h5></p>
								
								<!-- table containing indicators and input fields -->
								<table class="table table-striped">
									<tbody>
									
									<?php 
										$ts= 'select * from indicators where sub_index="2D11";';
										$exe_ts= mysql_query($ts);
										$num_ts= mysql_num_rows($exe_ts);
										
										$ts= array();
										
										while($row = mysql_fetch_assoc($exe_ts))
										{
											echo '<tr>';
												echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
												echo '<td><b>'.$row['indicator'].'</b></td>';
												echo '<td style="width:100px">';	
													echo '<input type="number" class="form-control avt">';
												echo '</td>';
											echo '<tr>';
										}
										
									?>
									
									<tr>
										<td></td>
										<td style="text-align:center">	
											<button type="button" class="btn btn-success " onclick="avt(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
										</td>
									</tr>
									
									<tr><td colspan="3">
										<div class="form-group">
											<textarea rows="5" class="form-control txt_avt txt_2d" ></textarea>
										</div>
									</td>
									</tr>
									
									</tbody>
								</table>
								<p style="text-align:center; color: red;" class="error_avt"><b></b></p>
								
							
							<!-- teachers list item over -->
							</li>
							
							<li>
							<!-- school mates list item begins -->
								<p id="2a1"><h5><b>(1.2) School-Mates </b></h5></p>
								
								<!-- table containing indicators and input fields -->
								<table class="table table-striped">
									<tbody>
									
									<?php 
										$ts= 'select * from indicators where sub_index="2D12";';
										$exe_ts= mysql_query($ts);
										$num_ts= mysql_num_rows($exe_ts);
										
										$ts= array();
										
										while($row = mysql_fetch_assoc($exe_ts))
										{
											echo '<tr>';
												echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
												echo '<td><b>'.$row['indicator'].'</b></td>';
												echo '<td style="width:100px">';	
													echo '<input type="number" class="form-control avsm" >';
												echo '</td>';
											echo '<tr>';
										}
										
									?>
									
									<tr>
										<td></td>
										<td style="text-align:center">	
											<button type="button" class="btn btn-success " onclick="avsm(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
										</td>
									</tr>
									
									<tr><td colspan="3">
										<div class="form-group">
											<textarea rows="5" class="form-control txt_avsm txt_2d" ></textarea>
										</div>
									</td>
									</tr>
									
									</tbody>
								</table>
								<p style="text-align:center; color: red;" class="error_avsm"><b></b></p>
								
							
							<!-- school-mates list item over -->
							</li>
							
							<li>
							<!-- school porgramme and environment list item begins -->
								<p id="2a1"><h5><b>(1.3) School Programmes and Environment </b></h5></p>
								
								<!-- table containing indicators and input fields -->
								<table class="table table-striped">
									<tbody>
									
									<?php 
										$ts= 'select * from indicators where sub_index="2D13";';
										$exe_ts= mysql_query($ts);
										$num_ts= mysql_num_rows($exe_ts);
										
										$ts= array();
										
										while($row = mysql_fetch_assoc($exe_ts))
										{
											echo '<tr>';
												echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
												echo '<td><b>'.$row['indicator'].'</b></td>';
												echo '<td style="width:100px">';	
													echo '<input type="number" class="form-control avsp" >';
												echo '</td>';
											echo '<tr>';
										}
										
									?>
									
									<tr>
										<td></td>
										<td style="text-align:center">	
											<button type="button" class="btn btn-success " onclick="avsp(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
										</td>
									</tr>
									
									<tr><td colspan="3">
										<div class="form-group">
											<textarea rows="5" class="form-control txt_avsp txt_2d" ></textarea>
										</div>
									</td>
									</tr>
									
									</tbody>
								</table>
								<p style="text-align:center; color: red;" class="error_avsp"><b></b></p>
								
							
							<!-- school programmes and environment list item over -->
							</li>
							
							
						</ul>
							
					<!-- attitudes list item over -->
					</li>
					
					<li>
					<!-- value system list item begins -->
						<p id="2d2"><h4><b>(2) Value System</b></h4></p>
						(Rate each field indicator from 1 to 5)
						<br><br>
						
						<ul style="list-style-type:none;">
							<li>
								<p id="2a1"><h5><b>RESPECT OF NATIONAL FLAG AND ANTHEM</b></h5></p>
							
								<!-- table containing indicators and input fields -->
								<table class="table table-striped">
									<tbody>
									
									<?php 
										$ts= 'select * from indicators where sub_index ="2D2a";';
										$exe_ts= mysql_query($ts);
										$num_ts= mysql_num_rows($exe_ts);
										
										$ts= array();
										$x=0;
										
										while($row = mysql_fetch_assoc($exe_ts))
										{
											if($x == 4){
											//	echo 
											}
										
											echo '<tr>';
												echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
												echo '<td><b>'.$row['indicator'].'</b></td>';
												echo '<td style="width:100px">';	
													echo '<input type="number" class="form-control vs">';
												echo '</td>';
											echo '<tr>';
											$x++;
										}
										
									?>
									
									
									</tbody>
								</table>
							</li>
							
							<li>
								<p id="2a1"><h5><b>TO CHERISH IDEALS INSPIRED FREEDOM STRUGGLE</b></h5></p>
							
								<!-- table containing indicators and input fields -->
								<table class="table table-striped">
									<tbody>
									
									<?php 
										$ts= 'select * from indicators where sub_index ="2D2b";';
										$exe_ts= mysql_query($ts);
										$num_ts= mysql_num_rows($exe_ts);
										
										$ts= array();
										$x=0;
										
										while($row = mysql_fetch_assoc($exe_ts))
										{
											if($x == 4){
											//	echo 
											}
										
											echo '<tr>';
												echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
												echo '<td><b>'.$row['indicator'].'</b></td>';
												echo '<td style="width:100px">';	
													echo '<input type="number" class="form-control vs">';
												echo '</td>';
											echo '<tr>';
											$x++;
										}
										
									?>
									
									
									</tbody>
								</table>
							</li>
							
							<li>
								<p id="2a1"><h5><b>UPHOLD THE SOVEREIGINITY, UNITY & INTEGRITY OF INDIA</b></h5></p>
							
								<!-- table containing indicators and input fields -->
								<table class="table table-striped">
									<tbody>
									
									<?php 
										$ts= 'select * from indicators where sub_index ="2D2c";';
										$exe_ts= mysql_query($ts);
										$num_ts= mysql_num_rows($exe_ts);
										
										$ts= array();
										$x=0;
										
										while($row = mysql_fetch_assoc($exe_ts))
										{
											if($x == 4){
											//	echo 
											}
										
											echo '<tr>';
												echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
												echo '<td><b>'.$row['indicator'].'</b></td>';
												echo '<td style="width:100px">';	
													echo '<input type="number" class="form-control vs" >';
												echo '</td>';
											echo '<tr>';
											$x++;
										}
										
									?>
									
									
									</tbody>
								</table>
							</li>
							
							<li>
								<p id="2a1"><h5><b>RENDER NATIONAL SERVICE</b></h5></p>
							
								<!-- table containing indicators and input fields -->
								<table class="table table-striped">
									<tbody>
									
									<?php 
										$ts= 'select * from indicators where sub_index ="2D2d";';
										$exe_ts= mysql_query($ts);
										$num_ts= mysql_num_rows($exe_ts);
										
										$ts= array();
										$x=0;
										
										while($row = mysql_fetch_assoc($exe_ts))
										{
											if($x == 4){
											//	echo 
											}
										
											echo '<tr>';
												echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
												echo '<td><b>'.$row['indicator'].'</b></td>';
												echo '<td style="width:100px">';	
													echo '<input type="number" class="form-control vs" >';
												echo '</td>';
											echo '<tr>';
											$x++;
										}
										
									?>
									
									
									</tbody>
								</table>
							</li>
							
							<li>
								<p id="2a1"><h5><b>TO PROMOTE HARMONY AND SPIRIT OF UNITY</b></h5></p>
							
								<!-- table containing indicators and input fields -->
								<table class="table table-striped">
									<tbody>
									
									<?php 
										$ts= 'select * from indicators where sub_index ="2D2e";';
										$exe_ts= mysql_query($ts);
										$num_ts= mysql_num_rows($exe_ts);
										
										$ts= array();
										$x=0;
										
										while($row = mysql_fetch_assoc($exe_ts))
										{
											if($x == 4){
											//	echo 
											}
										
											echo '<tr>';
												echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
												echo '<td><b>'.$row['indicator'].'</b></td>';
												echo '<td style="width:100px">';	
													echo '<input type="number" class="form-control vs" >';
												echo '</td>';
											echo '<tr>';
											$x++;
										}
										
									?>
									
									
									</tbody>
								</table>
							</li>
							
							<li>
								<p id="2a1"><h5><b>TO VALUE & PRESERVE THE RICH HERITAGE OF OUR CULTURE</b></h5></p>
							
								<!-- table containing indicators and input fields -->
								<table class="table table-striped">
									<tbody>
									
									<?php 
										$ts= 'select * from indicators where sub_index ="2D2f";';
										$exe_ts= mysql_query($ts);
										$num_ts= mysql_num_rows($exe_ts);
										
										$ts= array();
										$x=0;
										
										while($row = mysql_fetch_assoc($exe_ts))
										{
											if($x == 4){
											//	echo 
											}
										
											echo '<tr>';
												echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
												echo '<td><b>'.$row['indicator'].'</b></td>';
												echo '<td style="width:100px">';	
													echo '<input type="number" class="form-control vs" >';
												echo '</td>';
											echo '<tr>';
											$x++;
										}
										
									?>
									
									
									</tbody>
								</table>
							</li>
							
							<li>
								<p id="2a1"><h5><b>TO PROMOTE AND IMPROVE NATURAL ENVIRONMENT</b></h5></p>
							
								<!-- table containing indicators and input fields -->
								<table class="table table-striped">
									<tbody>
									
									<?php 
										$ts= 'select * from indicators where sub_index ="2D2g";';
										$exe_ts= mysql_query($ts);
										$num_ts= mysql_num_rows($exe_ts);
										
										$ts= array();
										$x=0;
										
										while($row = mysql_fetch_assoc($exe_ts))
										{
											if($x == 4){
											//	echo 
											}
										
											echo '<tr>';
												echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
												echo '<td><b>'.$row['indicator'].'</b></td>';
												echo '<td style="width:100px">';	
													echo '<input type="number" class="form-control vs" >';
												echo '</td>';
											echo '<tr>';
											$x++;
										}
										
									?>
									
									
									</tbody>
								</table>
							</li>
						
							<li>
								<p id="2a1"><h5><b>TO DEVELOP SCIENTIFIC TEMPER & THE SPIRIT OF ENQUIRY</b></h5></p>
							
								<!-- table containing indicators and input fields -->
								<table class="table table-striped">
									<tbody>
									
									<?php 
										$ts= 'select * from indicators where sub_index ="2D2h";';
										$exe_ts= mysql_query($ts);
										$num_ts= mysql_num_rows($exe_ts);
										
										$ts= array();
										$x=0;
										
										while($row = mysql_fetch_assoc($exe_ts))
										{
											if($x == 4){
											//	echo 
											}
										
											echo '<tr>';
												echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
												echo '<td><b>'.$row['indicator'].'</b></td>';
												echo '<td style="width:100px">';	
													echo '<input type="number" class="form-control vs" >';
												echo '</td>';
											echo '<tr>';
											$x++;
										}
										
									?>
									
									
									</tbody>
								</table>
							</li>
							
							<li>
								<p id="2a1"><h5><b>TO SAFEGUARD PUBLIC PROVERTY & TO ABJURE VIOLENCE</b></h5></p>
							
								<!-- table containing indicators and input fields -->
								<table class="table table-striped">
									<tbody>
									
									<?php 
										$ts= 'select * from indicators where sub_index ="2D2i";';
										$exe_ts= mysql_query($ts);
										$num_ts= mysql_num_rows($exe_ts);
										
										$ts= array();
										$x=0;
										
										while($row = mysql_fetch_assoc($exe_ts))
										{
											if($x == 4){
											//	echo 
											}
										
											echo '<tr>';
												echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
												echo '<td><b>'.$row['indicator'].'</b></td>';
												echo '<td style="width:100px">';	
													echo '<input type="number" class="form-control vs" >';
												echo '</td>';
											echo '<tr>';
											$x++;
										}
										
									?>
									
									
									</tbody>
								</table>
							</li>
							
							<li>
								<p id="2a1"><h5><b>TO STRIVE TOWARDS EXCELLENCE IN ACH. HIGH LEVEL OF PERFORMANCE</b></h5></p>
							
								<!-- table containing indicators and input fields -->
								<table class="table table-striped">
									<tbody>
									
									<?php 
										$ts= 'select * from indicators where sub_index ="2D2j";';
										$exe_ts= mysql_query($ts);
										$num_ts= mysql_num_rows($exe_ts);
										
										$ts= array();
										$x=0;
										
										while($row = mysql_fetch_assoc($exe_ts))
										{
											if($x == 4){
											//	echo 
											}
										
											echo '<tr>';
												echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
												echo '<td><b>'.$row['indicator'].'</b></td>';
												echo '<td style="width:100px">';	
													echo '<input type="number" class="form-control vs" >';
												echo '</td>';
											echo '<tr>';
											$x++;
										}
										
									?>
									
									<tr>
										<td></td>
										<td style="text-align:center">	
											<button type="button" class="btn btn-success " onclick="vs(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
										</td>
									</tr>
									
									<tr><td colspan="3">
										<div class="form-group">
											<textarea rows="10" class="form-control txt_vs txt_2d" ></textarea>
										</div>
									</td>
									</tr>
									
									</tbody>
								</table>
								<p style="text-align:center; color: red;" class="error_vs"><b></b></p>
								
								
							</li>
						
						
						</ul>
							
					<!-- value system list item over -->
					</li>
					
					
				</ul>
			<!-- attitudes and values list item over -->	
			</li>
			<button type="button" class="btn btn-danger btn-block btn-lg" onclick="d2_txt(); "> <span class="glyphicon glyphicon-log-in"></span> Submit Section 2(D)</button>
				<br><br>
			
			
		<!-- PArt 2 over -->	
		</ul>
		
		<br><br>
	
	<p id="part3"><h2><b>Part 3: Co-Scholastic Activities</b></h2></p>
	
	
	<table class="table table-hover">
			<tbody>
			  <tr>
				<td><a href="#3a"><b>3(A)</b></a></td>
			  </tr>
			  <tr>
				<td><a href="#3b"><b>3(B): Health and Physical Activities</b></a></td>
			  </tr>
			</tbody>
	  </table>
	  
	  <br>
		
		<ul style="list-style-type: none">
			<li>
			<!--3A list item begins -->
				<ul style="list-style-type: none">
					<p id="3a"><h4><b>3(A)</b></h4><h5><b>(Any 2 have to be assessed)</b></h5></p>
					
					
					<!-- list item for literary and creative skills -->
					<li class="list-group-item"><button style="text-align:left;" class="btn btn-primary btn-block" onclick="$('#a31').toggle();" >1: Literary and Creative Skills &nbsp;<span class="caret"></span></button>
					</li>
					
					
					<!-- div for literary and creative skills  -->
					<div id="a31" style="display:none;">
						<!-- table containing indicators and input fields -->
					
							<table class="table table-striped">
								<tbody>
								
								<?php 
									$ts= 'select * from indicators where sub_index="3A1";';
									$exe_ts= mysql_query($ts);
									$num_ts= mysql_num_rows($exe_ts);
									
									$ts= array();
									
									while($row = mysql_fetch_assoc($exe_ts))
									{
										echo '<tr>';
											echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
											echo '<td><b>'.$row['indicator'].'</b></td>';
											echo '<td style="width:100px">';	
												echo '<input type="number" class="form-control a31" value="0">';
											echo '</td>';
										echo '<tr>';
									}
									
								?>
								
								<tr>
									<td></td>
									<td style="text-align:center">	
										<button type="button" class="btn btn-success" onclick="a31(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
									</td>
								</tr>
								
								<tr><td colspan="3">
									<div class="form-group">
										<textarea rows="5" class="form-control txt_a31 txt_3a" ></textarea>
									</div>
								</td>
								</tr>
								
								</tbody>
							</table>
							<p style="text-align:center; color: red;" class="error_a31"><b></b></p>
							
							
					<!-- div for literary and creative skills  -->	
					</div>
				  
					
					<!-- list item for scientific skills -->
					<li class="list-group-item"><button style="text-align:left;" class="btn btn-primary btn-block" onclick="$('#a32').toggle();" >2: Scientific Skills &nbsp;<span class="caret"></span></button>
					</li>		
					
					<!-- div for scientific skills  -->
					<div id="a32" style="display:none;">
						<!-- table containing indicators and input fields -->
					
							<table class="table table-striped">
								<tbody>
								
								<?php 
									$ts= 'select * from indicators where sub_index="3A2";';
									$exe_ts= mysql_query($ts);
									$num_ts= mysql_num_rows($exe_ts);
									
									$ts= array();
									
									while($row = mysql_fetch_assoc($exe_ts))
									{
										echo '<tr>';
											echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
											echo '<td><b>'.$row['indicator'].'</b></td>';
											echo '<td style="width:100px">';	
												echo '<input type="number" class="form-control a32" value="0">';
											echo '</td>';
										echo '<tr>';
									}
									
								?>
								
								<tr>
									<td></td>
									<td style="text-align:center">	
										<button type="button" class="btn btn-success" onclick="a32(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
									</td>
								</tr>
								
								<tr><td colspan="3">
									<div class="form-group">
										<textarea rows="5" class="form-control txt_a32 txt_3a" ></textarea>
									</div>
								</td>
								</tr>
								
								</tbody>
							</table>
							<p style="text-align:center; color: red;" class="error_a32"><b></b></p>
							
					<!-- div for scientific skills  -->	
					</div>

				  
					<!-- list item for Information and Communication Technology -->
					<li class="list-group-item"><button style="text-align:left;" class="btn btn-primary btn-block" onclick="$('#a33').toggle();" >3: Information and Communication Technology &nbsp;<span class="caret"></span></button>
					</li>		
					
					<!-- div for Information and Communication Technology  -->
					<div id="a33" style="display:none;">
						<!-- table containing indicators and input fields -->
					
							<table class="table table-striped">
								<tbody>
								
								<?php 
									$ts= 'select * from indicators where sub_index="3A3";';
									$exe_ts= mysql_query($ts);
									$num_ts= mysql_num_rows($exe_ts);
									
									$ts= array();
									
									while($row = mysql_fetch_assoc($exe_ts))
									{
										echo '<tr>';
											echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
											echo '<td><b>'.$row['indicator'].'</b></td>';
											echo '<td style="width:100px">';	
												echo '<input type="number" class="form-control a33" value="0">';
											echo '</td>';
										echo '<tr>';
									}
									
								?>
								
								<tr>
									<td></td>
									<td style="text-align:center">	
										<button type="button" class="btn btn-success" onclick="a33(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
									</td>
								</tr>
								
								<tr><td colspan="3">
									<div class="form-group">
										<textarea rows="5" class="form-control txt_a33 txt_3a" ></textarea>
									</div>
								</td>
								</tr>
								
								</tbody>
							</table>
							<p style="text-align:center; color: red;" class="error_a33"><b></b></p>
							
					<!-- div for scientific skills  -->	
					</div>
					
					
					<!-- list item for Organization and Leadership Skills -->
					<li class="list-group-item"><button  style="text-align:left;" class="btn btn-primary btn-block" onclick="$('#a34').toggle();" >4: Organization and Leadership Skills &nbsp;<span class="caret"></span></button>
					</li>		
					
					<!-- div for Organization and Leadership Skills  -->
					<div id="a34" style="display:none;">
						<!-- table containing indicators and input fields -->
					
							<table class="table table-striped">
								<tbody>
								
								<?php 
									$ts= 'select * from indicators where sub_index="3A4";';
									$exe_ts= mysql_query($ts);
									$num_ts= mysql_num_rows($exe_ts);
									
									$ts= array();
									
									while($row = mysql_fetch_assoc($exe_ts))
									{
										echo '<tr>';
											echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
											echo '<td><b>'.$row['indicator'].'</b></td>';
											echo '<td style="width:100px">';	
												echo '<input type="number" class="form-control a34" value="0">';
											echo '</td>';
										echo '<tr>';
									}
									
								?>
								
								<tr>
									<td></td>
									<td style="text-align:center">	
										<button type="button" class="btn btn-success" onclick="a34(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
									</td>
								</tr>
								
								<tr><td colspan="3">
									<div class="form-group">
										<textarea rows="5" class="form-control txt_a34 txt_3a" ></textarea>
									</div>
								</td>
								</tr>
								
								</tbody>
							</table>
							<p style="text-align:center; color: red;" class="error_a34"><b></b></p>
							
					<!-- div for Organization and Leadership Skills  over-->	
					</div>
					
				
				<br><br>			
				</ul>
			<!-- 3A list item over-->	
			</li>
			<button type="button" class="btn btn-danger btn-block btn-lg" onclick="a3_txt(); "> <span class="glyphicon glyphicon-log-in"></span> Submit Section 3(A)</button>
					<br><br>
			
			<br><br>
			
			<li>
			<!--3B list item begins -->
				<ul style="list-style-type: none">
					<p id="3a"><h4><b>3(B) Health and Physical Activities</b></h4><h5>(out of the given 8 fields, 2 have to be assessed, limit 1-5)</h5></p>
					
					<br>
						<label class="checkbox-inline">
						  <input type="checkbox" value="1" name="chbx">Sports/Indigenous Sports
						</label>
						<label class="checkbox-inline">
						  <input type="checkbox" value="2" name="chbx">NCC/NSS
						</label>
						<label class="checkbox-inline">
						  <input type="checkbox" value="3" name="chbx">Scouting and Guiding
						</label>
						<label class="checkbox-inline">
						  <input type="checkbox" value="4" name="chbx">Swimming
						</label>
						<label class="checkbox-inline">
						  <input type="checkbox" value="5" name="chbx">Gymnastics
						</label>
						<label class="checkbox-inline">
						  <input type="checkbox" value="6" name="chbx">Yoga
						</label>
						<label class="checkbox-inline">
						  <input type="checkbox" value="7" name="chbx">First Aid
						</label>
						<label class="checkbox-inline">
						  <input type="checkbox" value="8" name="chbx">Gardening
						</label>
					
					<br><br>
					
					<!-- list item for first choice -->
					<li class="list-group-item"><button style="text-align:left;" class="btn btn-primary btn-block" onclick="$('#b31').toggle();" >1: First Parameter &nbsp;<span class="caret"></span></button>
					</li>
					
					
					<!-- div for first choice  -->
					<div id="b31" style="display:none;">
						<!-- table containing indicators and input fields -->
					
							<table class="table table-striped">
								<tbody>
								
								<?php 
									$ts= 'select * from indicators where sub_index="3B1";';
									$exe_ts= mysql_query($ts);
									$num_ts= mysql_num_rows($exe_ts);
									
									$ts= array();
									
									while($row = mysql_fetch_assoc($exe_ts))
									{
										echo '<tr>';
											echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
											echo '<td><b>'.$row['indicator'].'</b></td>';
											echo '<td style="width:100px">';	
												echo '<input type="number" class="form-control b31" value="0">';
											echo '</td>';
										echo '<tr>';
									}
									
								?>
								
								<tr>
									<td></td>
									<td style="text-align:center">	
										<button type="button" class="btn btn-success" onclick="b31(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
									</td>
								</tr>
								
								<tr><td colspan="3">
									<div class="form-group">
										<textarea rows="5" class="form-control txt_b31 txt_3b" ></textarea>
									</div>
								</td>
								</tr>
								
								</tbody>
							</table>
							<p style="text-align:center; color: red;" class="error_b31"><b></b></p>
							
							
					<!-- div for first choice  -->	
					</div>
				  
					
					<!-- list item for second choice -->
					<li class="list-group-item"><button style="text-align:left;" class="btn btn-primary btn-block" onclick="$('#b32').toggle();" >2: Second Parameter &nbsp;<span class="caret"></span></button>
					</li>		
					
					<!-- div for second choice  -->
					<div id="b32" style="display:none;">
						<!-- table containing indicators and input fields -->
					
							<table class="table table-striped">
								<tbody>
								
								<?php 
									$ts= 'select * from indicators where sub_index="3B2";';
									$exe_ts= mysql_query($ts);
									$num_ts= mysql_num_rows($exe_ts);
									
									$ts= array();
									
									while($row = mysql_fetch_assoc($exe_ts))
									{
										echo '<tr>';
											echo '<td style="width:100px"><b>'.$row['s_form'].'</b></td>';
											echo '<td><b>'.$row['indicator'].'</b></td>';
											echo '<td style="width:100px">';	
												echo '<input type="number" class="form-control b32" value="0">';
											echo '</td>';
										echo '<tr>';
									}
									
								?>
								
								<tr>
									<td></td>
									<td style="text-align:center">	
										<button type="button" class="btn btn-success" onclick="b32(); "> <span class="glyphicon glyphicon-log-in"></span> Show Generated Paragraph </button>
									</td>
								</tr>
								
								<tr><td colspan="3">
									<div class="form-group">
										<textarea rows="5" class="form-control txt_b32 txt_3b" ></textarea>
									</div>
								</td>
								</tr>
								
								</tbody>
							</table>
							<p style="text-align:center; color: red;" class="error_b32"><b></b></p>
							
					<!-- div for second choice  -->	
					</div>

					
				
							
				</ul>
			<!-- 3B list item over-->	
			</li>
			<br><br>
			<button type="button" class="btn btn-danger btn-block btn-lg" onclick="txt_3b(); "> <span class="glyphicon glyphicon-log-in"></span> Submit Section 3(A)</button>
					<br><br>
			
		</ul>
		
		<br><br><br>
		<button type="button" class="btn btn-success btn-block btn-lg" onclick="total();">Submit Entries!</button>  

		
		
	
	 
	  
</div>


<script>

	//thinking skills...............
	function ts(){
		var arr=[];
		$("input.ts").each(function(){
			arr.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "ts.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			 $('.txt_ts').val(msg);
			 if(msg == 'Invalid or NULL entry in one or more fields! Please recheck above entries.'){
				$('p.error_ts').text('ERROR!');
				$('p.error_ts').css({'font-weight':'bold'});
			 }else{
				$('p.error_ts').text('');
			 }
		   }
		});
		
	}
	
	//social skills...................
	function ss(){
		var arr=[];
		$("input.ss").each(function(){
			arr.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "ss.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			 $('.txt_ss').val(msg);
			 if(msg == 'Invalid or NULL entry in one or more fields! Please recheck above entries.'){
				$('p.error_ss').text('ERROR!');
				$('p.error_ss').css({'font-weight':'bold'});
			 }else{
				$('p.error_ss').text('');
			 }
		   }
		});
		
	}
	
	//emotional skills............
	function es(){
		var arr=[];
		$("input.es").each(function(){
			arr.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "es.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			 $('.txt_es').val(msg);
			 if(msg == 'Invalid or NULL entry in one or more fields! Please recheck above entries.'){
				$('p.error_es').text('ERROR!');
				$('p.error_es').css({'font-weight':'bold'});
			 }else{
				$('p.error_es').text('');
			 }
			 
		   }
		});
		
	}
	
	//work education.................
	function we(){
		var arr=[];
		$("input.we").each(function(){
			arr.push($(this).val());
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "we.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			 $('.txt_we').val(msg);
			 
			 if(msg == 'Invalid or NULL entry in one or more fields! Please recheck above entries.'){
				$('p.error_we').text('ERROR!');
				$('p.error_we').css({'font-weight':'bold'});
			 }else{
				$('p.error_we').text('');
			 }
		   }
		});
		
	}
	
	//visual and performing arts.................
	function vp(){
		var arr=[];
		
		//populating the array arr, first 10 entries are from visual, last 10 from performing
		$("input.va").each(function(){
			arr.push($(this).val());
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
			
		});
		
		$("input.pa").each(function(){
			arr.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "vp.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
		  
			 $('.txt_vp').val(msg);
			 
			 if(msg == 'Invalid or NULL entry in one or more fields! Please recheck above entries.'){
				$('p.error_vp').text('ERROR!');
				$('p.error_vp').css({'font-weight':'bold'});
			 }else{
				$('p.error_vp').text('');
			 }
		   }
		});
		
	}
	
	//attitudes and values teachers.................
	function avt(){
		var arr=[];
		$("input.avt").each(function(){
			arr.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "avt.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			 $('.txt_avt').val(msg);
			 
			 if(msg == 'Invalid or NULL entry in one or more fields! Please recheck above entries.'){
				$('p.error_avt').text('ERROR!');
				$('p.error_avt').css({'font-weight':'bold'});
			 }else{
				$('p.error_avt').text('');
			 }
		   }
		});
		
	}
	
	//attitudes and values school mates.................
	function avsm(){
		var arr=[];
		$("input.avsm").each(function(){
			arr.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "avsm.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			 $('.txt_avsm').val(msg);
			 
			 if(msg == 'Invalid or NULL entry in one or more fields! Please recheck above entries.'){
				$('p.error_avsm').text('ERROR!');
				$('p.error_avsm').css({'font-weight':'bold'});
			 }else{
				$('p.error_avsm').text('');
			 }
		   }
		});
		
	}
	
	//attitudes and values school programmes and environment.................
	function avsp(){
		var arr=[];
		$("input.avsp").each(function(){
			arr.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "avsp.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			 $('.txt_avsp').val(msg);
			 
			 if(msg == 'Invalid or NULL entry in one or more fields! Please recheck above entries.'){
				$('p.error_avsp').text('ERROR!');
				$('p.error_avsp').css({'font-weight':'bold'});
			 }else{
				$('p.error_avsp').text('');
			 }
		   }
		});
		
	}
	
	
	//value system.................
	function vs(){
		var arr=[];
		$("input.vs").each(function(){
			arr.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "vs.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			 $('.txt_vs').val(msg);
			 
			 if(msg == 'Invalid or NULL entry in one or more fields! Please recheck above entries.'){
				$('p.error_vs').text('ERROR!');
				$('p.error_vs').css({'font-weight':'bold'});
			 }else{
				$('p.error_vs').text('');
			 }
		   }
		});
		
	}

	//literary and creative sills.................
	function a31(){
		var arr=[];
		$("input.a31").each(function(){
			arr.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "a31.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			 $('.txt_a31').val(msg);
			 
		   }
		});
		
	}
	
	//scientific sills.................
	function a32(){
		var arr=[];
		$("input.a32").each(function(){
			arr.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "a32.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			 $('.txt_a32').val(msg);
			 
		   }
		});
		
	}
	
	//informaion and communiaction technology................
	function a33(){
		var arr=[];
		$("input.a33").each(function(){
			arr.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "a33.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			 $('.txt_a33').val(msg);
			 
		   }
		});
		
	}
	
	
	//organizarion and communication sills.................
	function a34(){
		var arr=[];
		$("input.a34").each(function(){
			arr.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "a34.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			 $('.txt_a34').val(msg);
			 
		   }
		});
		
	}
	
	//part 3 section b first part.................
	function b31(){
		var arr=[];
		$("input.b31").each(function(){
			arr.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "b31.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			 $('.txt_b31').val(msg);
			 
			 if(msg == 'Invalid or NULL entry in one or more fields! Please recheck above entries.'){
				$('p.error_b31').text('ERROR!');
				$('p.error_b31').css({'font-weight':'bold'});
			 }else{
				$('p.error_b31').text('');
			 }
		   }
		});
		
	}
	
	//part 3 section b second part.................
	function b32(){
		var arr=[];
		$("input.b32").each(function(){
			arr.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "b32.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			 $('.txt_b32').val(msg);
			 
			 if(msg == 'Invalid or NULL entry in one or more fields! Please recheck above entries.'){
				$('p.error_b32').text('ERROR!');
				$('p.error_b32').css({'font-weight':'bold'});
			 }else{
				$('p.error_b32').text('');
			 }
		   }
		});
		
	}
	
	//final form submission.................
/*	function paragraph(){
		var para=[];
		$("textarea.txt").each(function(){
			para.push($(this).val());
		});
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: para},
		   url: "para_post.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
				alert('Entries successfully saved in database!');
				
				window.location = 'http://localhost/bsp/redirect.php?id=<?php echo $_GET['id']; ?>&sid=<?php echo $res['section_id']; ?>';
				
				
		   }
		});
		
	}														*/
	
	function a2_txt(){
		var para=[];
	$("textarea.txt_2a").each(function(){
			para.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		}); 
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: para},
		   url: "txt_2a.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
		   if(msg == 'yeah'){	alert('done!'); }
			//	window.location = 'http://localhost/bsp/redirect.php?id=<?php echo $_GET['id']; ?>&sid=<?php echo $res['section_id']; ?>';
		   
			$('textarea.txt_2a').css({"background-color": "#CCFF9A"});
		   }
		});
	}
	
	function b2_txt(){
		var para=$("textarea.txt_2b").val();
	
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: para},
		   url: "txt_2b.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
	//		if(msg=='yeah')	{alert('Entries successfully saved in database!');}
				
			//	window.location = 'http://localhost/bsp/redirect.php?id=<?php echo $_GET['id']; ?>&sid=<?php echo $res['section_id']; ?>';
				
			$('textarea.txt_2b').css({"background-color": "#CCFF9A"});
		   }
		});
	}
	
	
	function c2_txt(){
		var para=$("textarea.txt_2c").val();
	
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: para},
		   url: "txt_2c.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
	//		if(msg=='yeah')	{alert('Entries successfully saved in database!');}
				
			//	window.location = 'http://localhost/bsp/redirect.php?id=<?php echo $_GET['id']; ?>&sid=<?php echo $res['section_id']; ?>';
				
			$('textarea.txt_2c').css({"background-color": "#CCFF9A"});
		   }
		});
	} 
	
	
	function d2_txt(){
		var para=[];
	$("textarea.txt_2d").each(function(){
			para.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		}); 
		
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: para},
		   url: "txt_2d.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
	//		if(msg == 'yeah'){	alert('Entries successfully saved in database!');}
					
			//	window.location = 'http://localhost/bsp/redirect.php?id=<?php echo $_GET['id']; ?>&sid=<?php echo $res['section_id']; ?>';
		   
			$('textarea.txt_2d').css({"background-color": "#CCFF9A"});
		   }
		});
	}

	function a3_txt(){
		var para=[];
			$("textarea.txt_3a").each(function(){
			para.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		}); 
	
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: para},
		   url: "txt_3a.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			if(msg=='yeah')	{alert('Entries successfully saved in database!');}
				
			//	window.location = 'http://localhost/bsp/redirect.php?id=<?php echo $_GET['id']; ?>&sid=<?php echo $res['section_id']; ?>';
				
			$('textarea.txt_3a').css({"background-color": "#CCFF9A"});
		   }
		});
	}
	
	function txt_3b(){
		var para=[];
			$("textarea.txt_3b").each(function(){
			para.push($(this).val());
			
			$(this).css({'border-color':'#E5E3E9'});
			
			if(($(this).val() < 1) || ($(this).val() >5)){
				$(this).css({'border-color':'red'});
			}
		}); 
	
		
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: para},
		   url: "txt_3b.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
		//	if(msg=='yeah')	{alert('Entries successfully saved in database!');}
				
			//	window.location = 'http://localhost/bsp/redirect.php?id=<?php echo $_GET['id']; ?>&sid=<?php echo $res['section_id']; ?>';
				
			$('textarea.txt_3b').css({"background-color": "#CCFF9A"});
		   }
		});
	}
	
	
	
	function total(){
		var para=[];
	$('input[type="number"]').each(function(){
	
		if($(this).val() == ""){$(this).val("0");}
		
			para.push($(this).val());
		}); 
		
	//	alert(para[1]);
		//sending data through ajax request
		$.ajax({
		   type: "POST",
		   data: {info: para},
		   url: "total.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
	//		if(msg == 'yeah'){	alert('Entries successfully saved in database!');
	//			}
				
		   }
		});
		
		
		//posting another ajax request for selected marks in 3A and 3B
		var arr=[]; var c=0, i=1;
			$("textarea.txt_3a").each(function(){
				if(!(($(this).val() == 'invalid or null entry / section not selected!') || ($(this).val() == ''))){
					arr[c]= i;
					c++;
				}
			
			i++;
		}); 
		
		
		
		var x=2;
		$('input[name="chbx"]:checked').each(function(){
			arr[x]= $(this).val();
			x++;
		});
		
	
		$.ajax({
		   type: "POST",
		   data: {info: arr},
		   url: "sel_3.php?id=<?php echo $_GET['id']; ?>",
		   success: function(msg){
			if(msg == 'yeah'){	alert('Entries successfully saved in database!');
			window.location = 'http://localhost/bsp/roll_no.php?id=<?php echo $res['section_id']; ?>';
				}
			else{
				alert('Internal Problem! Cant send enries to database. please try again!');
			}
				
		   }
		});
		
		
	}
	
</script>










<?php 
include('footer.php');

?>