<?php
include "db_con.php";
include "session.php";
?>



<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS1.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">E <b>ATTENDANCE</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="">
				<h4>WELCOME TEACHER!</h4>
			</div>
			<ul>
				<li>
					<a href="viewtprofile.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>My Profile</span>
					</a>
				</li>
				<li>
					<a href="takeattendance.php">
						<i class="fa fa-plus icons"></i>
						<span>Take Attendance</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-eye icons" aria-hidden="true"></i>
						<span>Attendance Report</span>
					</a>
				</li>
				<li>
					<a href="request.php">
						<i class="fa fa-info-circle" aria-hidden="true"></i>
						<span>Leave Apprroval</span>
					</a>
				</li>
					
				<li>
					<a href="logout.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<body>
		<div class="search">
<form action="studentsearch.php" method="post">
Search <input type="text" name="search">
<input type ="submit">
</form>
		
		
	</div>

</body>
</html>