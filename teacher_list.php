<?php
session_start();
require("db.php");
require('header.php');



	$que= "select * from teachers;";
	$mys= mysql_query($que);
	
?>

	<p> <h1 class="text-center">Class Teachers List</h1> <br> <br>
	
	<table class="table table-hover" border="0">
			<tr>
				<td></td>
				<td></td>
				<th>Class</th>
				<th>Section</th>
				<th>Name</th>
			</tr>
		<tbody>
			<?php
				while($row= mysql_fetch_assoc($mys))
				{
					$cls= mysql_fetch_assoc(mysql_query("select * from class where id='".$row['class']."';"));
					
					echo '<tr>';
						echo '<td></td>';
						echo '<td></td>';
						echo '<td>'.$cls['class'].'</td>';
						echo '<td>'.$row['section'].'</td>';
						
						echo '<td><a href="teachers_login.php?class='.$row['class'].'&section='.$row['section'].'"><button  style="width: 200px;" class="btn btn-primary " >'.$row['name'].'</button></a></td>';
					echo '</tr>';
				}
			?>
		</tbody>
	</table>
	

	


<?php
	include('footer.php');

?>
