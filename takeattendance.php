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
		
<div class="login-form">
    
    <form class=" login-form" action="atndemo.php" method="post"  autocomplete="off">
    <div class="form">
    <h1>select class</h1>
       
    
    <div class="col-12 p-5">
    <div class="row">
      <div class="col-12">
        <label>Date</label>
          <input type="date" class="form-control" placeholder="date" name="date" required >
       </div> 
       <div class="col-12">

		 <?php
$conn=mysqli_connect("localhost","root","","attendancenew");


$sql=mysqli_query($conn,"select * from tbl_class"); 
?>
<label>class_id</label><br>


<select name="c_id" onchange="showResult(this.value)" class="input" >
<!-- <option value="">--select--</option> -->
<?php
while($row=mysqli_fetch_array($sql))
{

?>
<option value="<?php echo $row[0] ?>" ><?php echo $row[1] ?></option>

<?php
}
?>

</select></div>


       


<div class="inputfield">
        <input type="submit" value="submit" name="submit" class="btn">
      </div>
      </form>
    </div>
</div>
<!-- partial -->

















<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->



</body>
</html>



</body>
</html>