<?php
include 'db_con.php';
if(isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $adn_no = $_POST['adn_no'];
    $address = $_POST['address'];
    $relationship = $_POST['relationship'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $abc=md5($_POST['password']);
  $user_check = "SELECT `type_id` FROM `tbl_usertype` WHERE `type_name` = 'parent'";
        $user_check_rslt = mysqli_query($conn,$user_check);
        while($row = mysqli_fetch_array($user_check_rslt)){
            //echo $row['type_id'];
        $type = $row['type_id'];
        $user_reg = "INSERT INTO `tbl_parent`(`fname`, `lname`, `adn_no`, `address`, `relationship`, `email`, `phone`, `password`) VALUES ('$fname','$lname','$adn_no','$address','$relationship','$email','$phone','$abc'
            )";
            $user_reg_query = mysqli_query($conn,$user_reg);
        
        $last_id = mysqli_insert_id($conn);
        if($user_reg_query){
          $reg = "INSERT INTO `tbl_login`(`adn_no`, `password`, `type_id`) VALUES ('$last_id','$abc','$type')";
          $reg_query = mysqli_query($conn,$reg);
          // echo $last_id;
            echo'<script> alert ("Account created '.$last_id.'");</script>';
            echo'<script>window.location.href="sign.php";</script>'; 
        }
        else{
          echo "<script> alert('Account denied');</script>";
        }
        }
      }
       ?>
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
      var f=document.getElementById("fname").value;
                    var l=document.getElementById("lname").value;
                    var s=/^[a-zA-Z]+$/;
                    if(f!="" && s.test(f)==false){

                        document.getElementById('ms').style.display = "block";
                        document.getElementById('ms').innerHTML = "Invalid First name";
                        return false;
                    }
                    else{
                        document.getElementById('ms').style.display = "none";
                    }
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
        <h1>Parent Register</h1>
        <div class="content">
          <div class="input-field">
          <label>Student name</label>
            <input type="text" name="student name" placeholder="Enter student name" autocomplete="nope" required pattern="[a-zA-Z]+" title="Name must be alphabets"/>
          </div>
          <div class="input-field">
          <label>First name</label>
            <input type="text" name="fname" id="fname"placeholder="Enter first name" autocomplete="nope" required pattern="[a-zA-Z]+" title="Name must be alphabets"/>
          </div>
          <div class="input-field">
            
          <label>Last name</label>
            <input type="text" name="lname" placeholder="Enter last name" autocomplete="nope" required pattern="[a-zA-Z]+" title="Name must be alphabets"/>
          </div>
          <div class="input-field">
            
          <label>adn_no</label>
            <input type="text" name="adn_no" placeholder="Enter admission no" autocomplete="nope"/>
          </div>
          <div class="input-field">
            
          <label>Address</label>
            <input type="text" name="address" placeholder="Enter address" autocomplete="nope"/>
          </div>
          <div class="input-field">
            
          <label>Relationship
<input list="relationship" name="relationship" required/></label>
<datalist id="relationship">
  <option value="Mother">
  
  <option value="Father">
  <option value="Guardian">

  

  
</datalist> 
          </div>
          <div class="input-field">
            
          <label>Email</label>
            <input type="text" name="email" placeholder="Enter mail" id="ema" required pattern="/^[\w\+\'\.-]+@[\w\'\.-]+\.[a-zA-Z]{2,}$/" onkeyup="return add()"/>
            <span class="msg" id="message"></span>
          </div>
          <span class="msg" id="message"></span>
          <br>
          <div class="input-field">
            
          <label>Phone</label>
            <input type="text" name="phone" placeholder="Enter phone" id="phn" required pattern="^[6-9]\d{9}$" onkeyup="return add()" title="Please enter a valid phone number"/>
            <span class="msg" id="msg2"></span>
          </div>
        
          <div class="input-field">
            
          <label>Password</label>
            <input type="password" name="password" placeholder="Password"/>
          </div>
          <div class="input-field">
            
          <label> confirm Password</label>
            <input type="password" name="cpassword" placeholder="confirm password" onkeyup="return add()"   id="cpass"/>
            <span class="msg" id="msg1"></span>
          </div>
          
         
        <div class="action">
       
          <button type="submit" name="register">Register</button>
         
        </div>
      </form>
      div class="abcd">
      <a href="dashbord/index.html">Back to home</a>
      
    </div>
    </div>
    <!-- partial -->
    <!-- <script  src="./script.js"></script> -->
  </body>
</html>