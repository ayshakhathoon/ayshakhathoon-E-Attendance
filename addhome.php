<?php
include "db_con.php";
include "session.php";
?>
</<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS1.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
				<img src="../dashbord/image/user.jpg">
				<h4>WELCOME ADMIN!</h4>
			</div>
			<ul>
				<li>
				
					<a href="reghome.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Register</span>
					</a>
				</li>
				

            
				<li>
					<a href="addhome.php">
						<i class="fa fa-plus icons"></i>
						<span>Add</span>
					</a>
				</li>
				<li>
					<a href="viewhome.php">
						<i class="fa fa-eye icons" aria-hidden="true"></i>
						<span>View</span>
						
						
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-info-circle" aria-hidden="true"></i>
						<span>Attendence Report</span>
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
<section class="section-2">
            <ul>
            <li>
		<img src="class.jpeg"><br>
        <a href="addclass.php">Class</a></li>
        <li>
        <section class="section-2">
		<img src="subject.png"><br>
        <a href="addsubject.php">Subject</a></li>
        
    
        <ul>
			
		</section>
<div class="search">
<form action="phpSearch.php" method="post">
Search <input type="text" name="search">
<input type ="submit">
</form>

</body>




		
	</div>

</body>
</html>