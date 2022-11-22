<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Time Table</title>
    <style>
    body{
      background-image: url(image2.jpg);
      background-size: cover;
      background-attachment: fixed;
    }
    </style>
  </head>
  <body>
  
  <br><br><br>
  <div class="container">
    <div class="jumbotron">
     
      <p class="lead">Enter Data</p>
      <form action="" method="post">
        <div class="form-group">
          <label for="formGroupExampleInput">subject1</label>
          <input type="text" class="form-control" name="subject1" id="formGroupExampleInput" placeholder="subject1" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Subject </label>
          <input type="text" class="form-control" name="subject2" id="formGroupExampleInput2" placeholder="subject2" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput3">subject2</label>
          <input type="text" class="form-control" name="subject3" id="formGroupExampleInpu3" placeholder="subject3" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput4">subject3</label>
          <input type="text" class="form-control" name="subject4" id="formGroupExampleInput4" placeholder="subject4" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput5">subject5</label>
          <input type="text" class="form-control" name="subject5" id="formGroupExampleInput5" placeholder="subject5" required>
        </div>
        
        <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
        
      </form>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
//echo "asdasdasdaasd";
if(isset($_POST['submit']))
{
  include "db_con.php";
 
  $subject1 = $_POST["subject1"];
  $subject2 = $_POST["subject2"];
  $subject3 = $_POST["subject3"];
  $subject4 = $_POST["subject4"];
  $subject5= $_POST["subject5"];
  
  //echo $tname." ".$sname." ".$cname." ".$st." ".$et;
  //echo "asdasdasdaasd";
  $sql = "INSERT INTO tbl_timetable(`subject1`, `subject2`,`subject3`, `subject4`, `subject5`) VALUES ('$subject1', '$subject2','$subject3', '$subject4', '$subject5' )";
  if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>
    alert('New record created successfully');
  </script>" ;
  } 
  else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}  
?>
