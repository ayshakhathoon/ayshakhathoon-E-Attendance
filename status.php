


<?php
include "db_con.php";
include "session.php";

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Status</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Leave Status</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
						  <thead>
						    <tr>
								<th data-breakpoints="xs">SLNO</th>
								
            <th>Reason</th>
            <th>Date</th>
           
						      <th>Status</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
								<?php
								include("db_con.php");
								
								$user=$_SESSION['adn_no'];
								?>
								<?php
								$s=1;
								$sq = mysqli_query($conn,"SELECT adn_no FROM `tbl_stud` where adn_no = '$user';");
								$disp = mysqli_fetch_array($sq);
								$sell = $disp['adn_no'];
								
								$sql=mysqli_query($conn,"SELECT * FROM `tbl_leave` where adn_no = '$sell';");
								
								
								   while($display=mysqli_fetch_array($sql))
								   {
									
									echo "<td>".$s++."</td>";
									$sql3=mysqli_query($conn,"SELECT * FROM `tbl_stud` WHERE `adn_no` = ".$display['adn_no']);							
	$display3=mysqli_fetch_array($sql3);
    echo "<td>".$display3["fname"]."</td>";
									
									
									echo "<td>".$display["reason"]."</td>";
									echo "<td>".$display["date"]."</td>";
									//echo $display['status'];
									if($display['leavestatus'] ==1){
									  echo "<td>approved</td>";
									}
									else if($display['leavestatus'] ==0){
									  echo "<td>rejected</td>";
									}
									else if($display['leavestatus'] ==2){
									  echo "<td>pending</td>";
									}
									//echo "<td><a style='color:#090' href='deleteprod.php?prod_id=".$display['prod_id']."'>Active/InActive</a> </td>";
									
									echo "</tr>";
									
								  }
								
								echo "</table>";
								
								?>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

