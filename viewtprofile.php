<?php
include "db_con.php";
include "session.php";
?>



<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS1.css">
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
				<h4>WELCOME TEACHER!</h4>
			</div>
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>My Profile</span>
					</a>
				</li>
				<li>
					<a href="#">
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
        <style>
#approve {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #approve td, #approve th {
        border: 1px solid #ddd;
        padding: 4px;
        }

        /* #builder tr:nth-child(even){background-color: #f2f2f2;} */

        #approve tr:hover {background-color: #ddd;}

        #approve th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: grey;
        color: white;
        }
        </style>
        <body>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <table id ="approve"  class="content-table">

                                           
                                        


                                            
                                            <?php 

                                            
$currentuser= $_SESSION['adn_no'];
$sql="SELECT * FROM `tbl_teacher` WHERE t_id='$currentuser'";
$gotresult=mysqli_query($conn,$sql);
if($gotresult)
{
    if(mysqli_num_rows($gotresult) > 0)
    {
        while($row=mysqli_fetch_array($gotresult))
        {
			?>
			<div class="login-form">
      <form action="" method="post" onsubmit="return Validate() && Validatename()  && ValidatePhone() && ValidateEmail() &&   Confirmpass()  && ValidateAddress()">
        <h1>My profile</h1>
          
  <div class="col-12 p-5">
    <div class="row">
			<div class="input-group">
    <label>f name</label>
	<input type="text" name="name"    placeholder="First name" id="fname" value= "<?php echo$row['fname'];?>"required>
    <span id="fn"></span>
</div>
<div class="input-group">
<label>last name</label>
	<input type="text" name="name"    placeholder="Last   name" id="lname" value= "<?php echo$row['lname'];?>"required>
    <span id="ln"></span>
</div>


 
      <div class="input-group">
      <label>Gender</label>
        
<input type="text" value="<?php echo$row['gender'];?>"required>   

	
  </div>
        
<div class="input-group" >
      <label>Address</label>
            <input type="text"  name="address" placeholder="Enter address" id="address" value="<?php echo$row['address'];?>"required>
			<span id="ad" style="color: red;"></span>
      </div>
      <div class="input-group">
     
          <label>Email</label>
            <input type="text"  name="email" placeholder="Enter mail" id="email" value="  <?php echo$row['email'];?>"required>
			<span id="el" style="color: red;"></span>

          </div> 
      
      <div class="input-group">
      
          <label>Phone</label>
            <input type="text"  
			 name="phone" placeholder="Enter phone" id="tel"  value=" <?php echo$row['phone'];?>"required>
            <span id="pe" style="color: red;"></span>

      </div>
</div>
        <!-- print_r($row['adn_no']);

        print_r($row['fname']);
        print_r($row['lname']);
        print_r($row['email']); -->
<?php
        }
    
}

            ?>
            <tr>
                                                
    
                                           
                                    
                                            
         
                                                
                                                
                                                
                                                
                                             
                                               
                                            
                                       
                                        <?php
                                        }
                                        ?>
                                         </table>
                                        </div>   
                                        </body>                              