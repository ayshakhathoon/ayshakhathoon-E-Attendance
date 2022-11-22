<?php
include "db_con.php";
include "session.php";
?>
<?php
include 'db_con.php';
if(isset($_POST['submit'])){
  $subject = $_POST['subject'];

$sql=mysqli_query($conn,"INSERT INTO `tbl_subject`(`subject`) VALUES('$subject')");

    
    
    
if($sql)
  {
   
echo "<script>alert('subject Registered Successfully!!');window.location='adhome.php'</script>";
  }
else
  {
echo "<script>alert('Error');window.location='addsubject.php'</script>";
  }
}
?>


  <!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
    <head>
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS1.css">
   
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
					<a href="addclass.php">
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
        <div class="login-form">
      <form action="" method="post" onsubmit="return Validatename()">
        <h1>Add subject</h1>
          
  <div class="col-12 p-5">
    <div class="row">
      <div class="col-12">
      <label>subject</label>
      
            <input type="text"class="form-control"  name="subject" placeholder="Enter subject_name" id="lname"   onkeyup="return Validatename()" required/ >
            <span id="ln" style="color: red;"></span>
<br><div class="action">
          <button type="submit" name="submit" >Submit</button>
          <div class="abcd">
      <a href="adhome.php">Back to home</a>
      
      <script type="text/javascript">
      function Validatename() 
                          {
                            var val = document.getElementById('lname').value;
                            if (!val.match(/^[A-Z].*$/)) 
                            {
                              document.getElementById('ln').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                                    document.getElementById('lname').value = val;
                                    document.getElementById('lname').style.color = "red";
                                      return false;
                                     flag=1;
                            }
                            if(val.length<3||val.length>30){
                               document.getElementById('ln').innerHTML="Between 10 to 50 characters";
                                    document.getElementById('lname').value = val;
    
    
                                document.getElementById('lname').style.color = "red";
                                      return false;
                                      
                            }
                            else{
    
                            
                               document.getElementById('ln').innerHTML=" ";
                              document.getElementById('lname').style.color = "green";
                             return true;
                            }
                          }
      
                          
      </script>
        </div>
      </form>
      
      
      
      <?php

?>
</body>
</html>
  