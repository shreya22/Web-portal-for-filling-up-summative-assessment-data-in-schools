<?php
echo '<hr>';
if(isset($_SESSION['username']))
		{
			echo '<h5><p>System user Logged in as '.$_SESSION["username"].'  <a href="logout.php?sys=1">[logout]</a></h5>';
		}else{
			echo '<h5><p><a href="login.php">System Login[login]</a></p></h5>';
		}
	
	echo "<p><i>All content on this site is &copy; BSP</i></p>";
	
?>
</div>
</div>
</body>
</html>