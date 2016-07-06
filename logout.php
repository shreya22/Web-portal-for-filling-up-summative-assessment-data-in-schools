<?php
session_start();
if($_GET['sys']==1){
	session_destroy();
}

else if($_GET['tec'] = 1){
	unset($_SESSION['TEACHER_NAME']);
}else{}

header("Location: ".$config_basedir."index.php");

?>