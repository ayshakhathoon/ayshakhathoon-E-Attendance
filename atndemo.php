<?php
include "db_con.php";
include "session.php";
$date=$_POST['date'];
?>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script>
  function getid(adn_no,tid){
var adn_no=adn_no;
var tid=tid;

jQuery.ajax({  
url: 'absent.php',  
type: 'POST',
data:{"adn_no="+adn_no,"tid"=+tid},  
  success: function(data) {  
    alert(data);                
  }  
});  
  }
  </script>
<body>
  
<div class="container" style="margin-top:30px">
  <div class="card">
   <div class="card-header">
      <div class="row">
        <div class="col-md-9">Attendance List</div>
        <div class="col-md-3" align="right">
          <button type="button" id="report_button" class="btn btn-danger btn-sm">Report</button>
          <button type="button"  class="btn btn-info btn-sm" >Add</button>
          
          
        </div>
        
      </div>
    </div>
   <div class="card-body">
    <div class="table-responsive">
        <span id="message_operation"></span>
     <table class="table table-striped table-bordered" id="attendance_table">
      <thead>
       <tr>
        <th>Student Name</th>
        <th>Admission  Number</th>
        <th>Class</th>
              <th>Attendance Status</th>
              <th>Attendance Date</th>
              <th>Absent</th>
              <th>Absent hours</th>
              
       </tr>
      </thead>
      <tbody>

     
    </div>
   </div>
  </div>
</div>
<?php
$adn_no=$_SESSION['adn_no'];

  $query = "SELECT * FROM `tbl_stud` WHERE `class_id`=(SELECT `class_id` FROM `tbl_teacher` WHERE `t_id`='$adn_no')";
  $statement = $conn->query($query);
  $result=mysqli_fetch_array($statement);
 
  // $statement->execute();
  // $result = $statement->fetchAll();

?>
<td><?php echo $result['fname']," ",$result['lname'] ?></td>
<td><?php echo $result['adn_no'];?></td>
<td><?php echo $result['class_id'];?></td>
<td><?php echo $result['adn_no'];?></td>
<td><?php echo $date; ?></td>
<td>
  <a href="absent.php?adn_no=<?php echo $result['adn_no'];?>&amp;date=<?php echo $date;?>&amp;tid=<?php echo $adn_no;?>"><button >absent</button></a>
<?php
$an= $result['adn_no'];

              $sql="SELECT * FROM `tbl_attendance` WHERE `adn_no`='$an' AND `attendance_date`='$date'";
              $statement1 = $conn->query($sql);
  $result1=mysqli_fetch_array($statement1);
  
              if($statement1->num_rows>0){
                ?>
                <td>
                <form action="absent.php" method="post" enctype="multipart/form-data">
  <input type="checkbox" id="atn" name="atn[]" value="1">
  <label > 1</label><br>
  <input type="checkbox" id="atn" name="atn[]" value="2">
  <label > 2</label><br>
  <input type="checkbox" id="atn" name="atn[]" value="3">
  <label > 3</label><br>
  <input type="checkbox" id="atn" name="atn[]" value="4">
  <label > 4</label><br>
  <input type="checkbox" id="atn" name="atn[]" value="5">
  <label > 5</label><br>
  <input type="checkbox" id="atn" name="atn[]" value="6">
  <label > 6</label><br>
  <input type="checkbox" id="atn" name="atn[]" value="full">
  <label > full day</label><br><br>
  <input type="hidden" name="aid" value="<?php echo $result1['attendance_id']?>">
  <input type="hidden" name="adnn" value="<?php echo $result1['adn_no']?>">
  <input type="submit" name="su" value="Submit">
</form></td>
                <?php
               };
              ?></td>
<td>
</tbody>
     </table>

  
    
</body>
</html>