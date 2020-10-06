<?php
session_start();
if(!isset($_SESSION['id_user']))
{
		header("location: login.php");
}
// echo $_SESSION['id_user'];
// echo "<br>". $_SESSION['role'];
?>


<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin:40px auto;
			text-align: center;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #0000ff;
			width: 95%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #0087bd;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		</style>
		
		<title>Home </title>
	</head>
	
	<body>
		
		<p>
		<ul class="topnav">
		<li><a class="active" href="home.php">Home</a></li>
		<?php
			if($_SESSION["role"]=="admin"){
				echo "<li><a href=' registrationn_user.php'>Registration User</a></li>";
			}
			if($_SESSION["role"]=="admin"){
				echo "<li><a href='user data.php'>Employee Data</a></li>";
			}
			if(($_SESSION["role"]=="controlling") || ($_SESSION["role"]=="admin")) {
				echo "<li><a href='objectif_data.php'>Objectif Data</a></li>";
			}
			if($_SESSION["role"]=="admin"){
				echo "<li><a href=' vgz_data.php'>VGZ Data</a></li>";
			}
			if($_SESSION["role"]=="admin"){
				echo "<li><a href=' line_data.php'>Line Data</a></li>";
			}
			if(($_SESSION["role"]=="segment_leader") || ($_SESSION["role"]=="admin")) {
			echo "<li><a href='read tag.php'>Read Tag ID</a></li>";}
		if(($_SESSION["role"]=="segment_leader") || ($_SESSION["role"]=="admin")) {
				echo "<li><a href=' pointing.php'>Pointing</a></li>";
			}
		if(($_SESSION["role"]=="segment_leader") || ($_SESSION["role"]=="admin")) {
				echo "<li><a href='interval.php'> Hours presence</a></li>";
			}

		if(($_SESSION["role"]=="segment_leader") || ($_SESSION["role"]=="admin")) {
				echo "<li><a href='serieheures.php'> Real-time efficiency</a></li>";
			}
		if(($_SESSION["role"]=="segment_leader") || ($_SESSION["role"]=="admin")) {
				echo "<li><a href='serieheuress.php'>History of efficiency</a></li>";
			}
		?>

		
		
		</ul>
		<br>
	<p>
		
		<img src="leoni.jpg" alt="" style="width:55%;">
		
		<a href ="logout.php"> logout </a>
		<div style="background-image: url('img_girl.jpg');">
		
		
	</body>
</html>

