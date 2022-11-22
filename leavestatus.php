<?php
session_start();
if(isset($_SESSION['adn_no']))
	{
	echo "<div class = 'textview'>";
	include 'db_con.php';
	echo "<h1>Leave Management System</h1>";

	echo "<center>";
	echo "<h2>My All Leaves</h2>";
	$sql = "SELECT adn_no,fname,class_id FROM tbl_stud WHERE fname = '".$_SESSION['adn_no']."'";
	$result = $conn->query($sql);
	if($result->num_rows > 0)
		{
		while($row = $result->fetch_assoc())
			{
			$fname = $row["fname"];
			$sql2 = "SELECT * FROM tbl_leave WHERE fname = '".$fname."'";
			$result2 = $conn->query($sql2);
			if($result2->num_rows > 0)
				{
				echo "<table>";
				echo "<tr><th>Name</th>";
				
				echo "<th>Status</th>";
				
				while($row2 = $result2->fetch_assoc())
					{
					echo "<tr><td>".$row2["EmpName"]."</td>";
			
					echo "<td>".$row2["Status"]."</td>";
					echo "<td><a href = 'leaves/".$_SESSION['user'].$row2["StartDate"].$row2["LeaveType"].$row2["EndDate"].".pdf'>Download</a></td>";
					}
				echo "</table>";
				echo "</center>";
				echo "</div>";
				}
			}
		}
	}
else
	{
	header('location:index.php?err='.urlencode('Please Login First To Access This Page !'));
	exit();
	}
?>