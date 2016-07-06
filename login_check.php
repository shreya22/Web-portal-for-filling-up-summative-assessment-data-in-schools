<?php

//if the username session variable is set, proceed, else direct to base page
if(isset($_SESSION['username']))
{}else{
	header("Location: login.php");
}

?>