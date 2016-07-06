<?php
session_start();
require("config.php");
$db = mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbdatabase, $db);


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<head>
	<title><?php echo $config_sitename; ?></title>
	<link href="stylesheet.css" rel="stylesheet">
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">  -->
	  <link rel="stylesheet" href="css/bootstrap.min.css">   
	  
<!--	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
	  			
	  
	  <script src="js/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>				
</head>
<body>
	<header>
		 <div class="jumbotron">
		 <img src="img/SAIL_Logo.png" width="150px" height="130px" style="float:left">
			<h1 style="text-align:center; float:left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BSP STUDENTS PORTAL 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>  
		<img src="img/sss10.png" width="230px" height="130px">
		</div>
	</header>

	
	
	<div id="container">
	
	<?php
	
		if(isset($_SESSION['username']))
		{
	?>
	
	
		<b>Teachers:</b> 
		<?php
		if(isset($_SESSION['TEACHER_NAME']))
		{
		?>
			<a class="btn btn-default btn-outline btn-circle collapsed " >&nbsp;<span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['TEACHER_NAME']; ?></a>
			<a href="logout.php?tec=1"><b>logout</b></a>
		<?php
		}else{
		?>
			<a class="btn btn-default btn-outline btn-circle collapsed "  href="teachers_reg.php" >&nbsp;<span class="glyphicon glyphicon-user"></span> Register</a>
			<a class="btn btn-default btn-outline btn-circle collapsed "  href="teacher_list.php" >&nbsp;<span class="glyphicon glyphicon-log-in"></span> Login</a>
		<?php
		}
		
		}
		
		?>
	
	
		<div id="main">