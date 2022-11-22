<?php
include 'db_con.php';
if(isset($_POST['register'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
    $class_id = $_POST['class_id'];
    $dob = $_POST['dob'];
    $email=$_POST['email'];
    $gender = $_POST['gender'];
    $addr = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
        $user_check = "SELECT `type_id` FROM `tbl_usertype` WHERE `type_name` = 'student'";
        $user_check_rslt = mysqli_query($conn,$user_check);
        while($row = mysqli_fetch_array($user_check_rslt)){
            //echo $row['type_id'];
        $type = $row['type_id'];
        $user_reg = "INSERT INTO `tbl_stu`(`fname`, `lname`, `class_id`, `dob`, `gender`, `adress`, `email`, `phone`, `password`) VALUES ('$fname','$lname','$class_id','$dob','$gender','$addr','$email','$phone','$password'
            )";
            $user_reg_query = mysqli_query($conn,$user_reg);
        
        $last_id = mysqli_insert_id($conn);
        if($user_reg_query){
          $reg = "INSERT INTO `tbl_login`(`adn_no`, `password`, `type_id`) VALUES ('$last_id','$password','$type')";
          $reg_query = mysqli_query($conn,$reg);
          // echo $last_id;
            echo'<script> alert ("Account created '.$last_id.'");</script>';
            echo'<script>window.location.href="sign.php";</script>'; 
        }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Rubik:400,700"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
  <script>
                function add()
                {
    var pw1 = document.getElementById("pass").value;
    var pw2 = document.getElementById("cpass").value;
    if(pw1 != pw2) {
        document.getElementById('msg1').style.display = "block";
        document.getElementById('msg1').innerHTML = "Password doesnot match";
        return false;
    }
    else{
        document.getElementById('msg1').style.display = "none";
    }
    var a=document.getElementById("ema").value;
    var st=/^[\w\+\'\.-]+@[\w\'\.-]+\.[a-zA-Z]{2,}$/;
    if(a!="" && st.test(a)==false){
        document.getElementById('message').style.display = "block";
        document.getElementById('message').innerHTML = "Invalid Email id";
        return false;
    }
    else{
        document.getElementById('message').style.display = "none";
    }

    var ph = document.getElementById("phn").value;
    var expr = /^[6-9]\d{9}$/;
    if(ph!="" && expr.test(ph)==false){
        document.getElementById('msg2').style.display = "block";
        document.getElementById('msg2').innerHTML = "Invalid Phone number";
        return false;
                }
                else{
        document.getElementById('msg2').style.display = "none";
    }
            }
                </script>
    <!-- partial:index.partial.html -->
    <div class="login-form">
      <form action="" method="post" onsubmit="return add()">
        <h1>student Register</h1>
        <div class="content">
          <div class="input-field">
            <input type="text" name="fname" placeholder="Enter first name"  required pattern="[a-zA-Z]+" title="Name must be alphabets" onkeyup="return add()"/>
          </div>
          <div class="input-field">
            <input type="text" name="lname" placeholder="Enter last name" required pattern="[a-zA-Z]+" title="Name must be alphabets" onkeyup="return add()"/>
          </div>
          <div class="input-field">
            <input type="date" name="dob" placeholder="Enter date of birth"  required/>
          </div>
          <div class="input-field">
            <input type="text" name="class_id" placeholder="Enter class id"  required/>
          </div>
          <div class="input-field">
            <input type="text" name="gender" placeholder="Enter gender"  required/>
          </div>
          <div class="input-field">
            <input type="text" name="address" placeholder="Enter address"  required/>
          </div>
          <div class="input-field">
            <input type="text" name="email" placeholder="Enter mail" id="ema" required pattern="/^[\w\+\'\.-]+@[\w\'\.-]+\.[a-zA-Z]{2,}$/" onkeyup="return add()"/>
          </div>
          <span class="msg" id="message"></span>
          <div class="input-field">
            <input type="text" name="phone" placeholder="Enter phone" id="phn" required pattern="^[6-9]\d{9}$" onkeyup="return add()" title="Please enter a valid phone number"/>
          </div>
          <span class="msg" id="msg2"></span>
          <div class="input-field">
            <input type="password" name="password" placeholder="Password" id="pass"/>
          </div>
          <div class="input-field">
            <input type="password" name="cpassword" placeholder="confirm password" onkeyup="return add()"   id="cpass"/>
          </div>
          <span class="msg" id="msg1"></span>
          <!-- <a href="#" class="link">Forgot Your Password?</a>  -->
        </div>
        <div class="action">
        <button onclick ="location.href='sign.php'">Sign in</button>
          <button type="submit" name="register" >Register</button>
         
        </div>
      </form>
      
    </div>
    <!-- partial -->
    <!-- <script  src="./script.js"></script> -->
  </body>
</html>
