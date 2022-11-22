<?php
include "db_con.php";
if(!empty($_POST['adn_no'])){
$adn_no=$_POST['adn_no'];
echo $adn_no;
}
if(!empty($_GET['adn_no'])){
    $adn_no=$_GET['adn_no'];
    $date= $_GET['date'];
    $tid=$_GET['tid'];
    $sql="INSERT INTO `tbl_attendance`(`adn_no`, `attendance_status`, `attendance_date`, `t_id`) VALUES ('$adn_no','absent','$date','$tid')";
    $result=$conn->query($sql);

    if($sql==true){
        ?>
<script>
    window.location("atndemo.php");
    </script>
        <?php
    }

    }
if(!empty($_POST['su'])){
    $hours = $_POST['atn'];
$aid=$_POST['aid'];
$adn=$_POST['adnn'];

     
$chk="";  
foreach($hours as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$in_ch=mysqli_query($conn,"UPDATE `tbl_attendance` SET `absent_hour`='$chk' WHERE `adn_no`='$adn' AND `attendance_id`='$aid'");  
if($in_ch==1)  
   {  
      echo '<script>alert("Inserted Successfully")</script>'; 
     echo '<script>
    window.location("atndemo.php");
    </script> ';
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
echo $chk;
    
  
}
?>