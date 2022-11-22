<?php
include "db_con.php";
include "session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>apply leave</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link
      rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS1.css">
  <script src="js/jquery2.0.3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery2.0.3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
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
				<h4>WELCOME STUDENT!</h4>
			</div>
			<ul>
				<li>
					<a href="viewprofile.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>My Profile</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-plus icons"></i>
						<span>Attendance</span>
					</a>
				</li>
				<li>
					<a href="addleave.php">
						<i class="fa fa-eye icons" aria-hidden="true"></i>
						<span>Apply Leave</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-info-circle" aria-hidden="true"></i>
						<span>Leave Status</span>
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
		









        <div class="login-form">
    
    <form class=" login-form" action="actionrequest.php" method="post"  autocomplete="off">
    <div class="form">
    <h1>Apply leave</h1>
       
    
    <div class="col-12 p-5">
    <div class="row">
      <div class="col-12">
        <label>Date</label>
          <input type="date" class="form-control" placeholder="date" name="date" required >
       </div> 
       <div class="col-12">
       <label>Reason</label>
       <input type="text" class="form-control" placeholder="enter valid reason" id="pid" name="description" required />
       </div> 
	   <div class="inputfield">
		 <?php
$conn=mysqli_connect("localhost","root","","attendancenew");


$sql=mysqli_query($conn,"select * from tbl_stud"); 
?>
<label>Student Name</label><br>


<select name="adn_no" onchange="showResult(this.value)" class="input" >
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
        <input type="submit" value="Request" name="submit" class="btn">
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
