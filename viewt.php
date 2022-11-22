



<?php
include "db_con.php";
include "session.php";
?>




</<!DOCTYPE html>
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
		
  

           <style>
#approve {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #approve td, #approve th {
        border: 1px solid #ddd;
        padding: 8px;
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
		<table id ="approve"  class="content-table">

<tr>
	
	<th>First Name</th>&nbsp;&nbsp;
	<th>Last Name</th>&nbsp;&nbsp;
	<th>phone</th>

</tr>
<?php 


$query="SELECT * From tbl_teacher ORDER BY t_id ASC";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{

?>
<tr>
	<td><?php echo $row['fname'];?></td>
	<td><?php echo $row['lname'];?></td>
	<td><?php echo $row['phone'];?></td>
	
</td>
</tr>

<?php
}
?>
</table>
</div>
</div>   
</body>              