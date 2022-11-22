
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
				<h4>WELCOME Parent!</h4>
			</div>
			<ul>
				<li>
					<a href="profilep.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>My Profile</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-plus icons"></i>
						<span>Student Attendance</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="fa fa-info-circle" aria-hidden="true"></i>
						<span>Leave Status</span>
					</a>
				</li>
					
				<li>
					<a href="index.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			<h1>WELCOME</h1>
			<p>Attend Today Achieve Tommorrow</p>
		</section>
	</div>

</body>
</html>