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
		
	

</body>
</html>




<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
       
 <div class="panel panel-default">
    <div class="panel-heading">
    Leave Request
    </div>
    <div>
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
      <!-- <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'> -->
        <thead>
          <tr>
            <th data-breakpoints="xs">SLNO</th>
			<th>adn_no</th>
            
            <th>Leave reason</th>
           
            <th>Date</th>
            
            <th style="color:#F00">Accept</th>
            <th style="color:#F00">Reject</th>
   <!-- <th style="color:#F00">Status</th>-->
            
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
          <?php
include("db_con.php");
?>
<?php
$s=1;


$sql=mysqli_query($conn,"SELECT * FROM `tbl_leave`;");


   while($display=mysqli_fetch_array($sql))
   {

    echo "<td>".$s++."</td>";
    $sql3=mysqli_query($conn,"SELECT * FROM `tbl_stud` WHERE `adn_no` = ".$display['adn_no']);							
	$display3=mysqli_fetch_array($sql3);
   echo"<td>".$display["adn_no"]."</td>";
	
    echo "<td>".$display["reason"]."</td>";
    echo "<td>".$display["date"]."</td>";
    echo "<td><a style='color:#090' href='accept.php?l_id=".$display['l_id']."'>Accept</a> </td>";
	echo "<td><a style='color:#090' href='remove.php?l_id=".$display['l_id']."'>Reject</a> </td>";
	//echo "<td><a style='color:#090' href='deleteprod.php?prod_id=".$display['prod_id']."'>Active/InActive</a> </td>";
	
	echo "</tr>";
	
  }

echo "</table>";

?>

        </tbody>
      </table>
    </div>
  </div>
</form>
</div>
</section>
 <!-- footer -->
		  
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
</div>
</div>
</body>
</html>

