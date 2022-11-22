<?php
include("db_con.php");
session_start();
if(isset($_POST["submit"]))
{

   
    $adn_no=$_POST['adn_no'];
    $date=$_POST['date'];
    $description=$_POST['description'];
  
   
   

    
   
  
    
    $sql=mysqli_query($conn,"INSERT INTO `tbl_leave`(`adn_no`,`date`,`reason`,`leavestatus`) VALUES('$adn_no','$date','$description','2')");

    
    
    
    if($sql)
      {
       
      echo "<script>alert('Leave Details Registered Successfully!!');window.location='shome.php'</script>";
      }
     else
      {
     echo "<script>alert('Error');window.location='addleave.php'</script>";
      }
  
    
    } 
  	
?>
