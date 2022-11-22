
<?php
include 'db_con.php';
if(isset($_POST['register'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $class_id =$_POST['class_id'];
    $qualification = $_POST['qualification'];
    $subject=$_POST['subject'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email=$_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $abc=md5($_POST['password']);
        $user_check = "SELECT `type_id` FROM `tbl_usertype` WHERE `type_name` = 'teacher'";
        $user_check_rslt = mysqli_query($conn,$user_check);
        while($row = mysqli_fetch_array($user_check_rslt)){
            //echo $row['type_id'];
        $type = $row['type_id'];
        $user_reg = "INSERT INTO `tbl_teacher`(`fname`, `lname`, `dob`, `class_id`,`qualification`,`subject`, `gender`, `address`, `email`, `phone`, `password`) VALUES ('$fname','$lname','$dob','$class_id','$qualification','$subject','$gender','$address','$email','$phone','$abc'
            )";
            $user_reg_query = mysqli_query($conn,$user_reg);
        
        $last_id = mysqli_insert_id($conn);
        if($user_reg_query){
          $reg = "INSERT INTO `tbl_login`(`adn_no`, `password`, `type_id`) VALUES ('$last_id','$password','$type')";
          $reg_query = mysqli_query($conn,$reg);
          // echo $last_id;
            echo'<script> alert ("Account created '.$last_id.'");</script>';
            echo'<script>window.location.href="dashbord/index.php";</script>'; 
        }
        }
    }
?>

    </<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
    <head>
      
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS1.css">
   
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
					<a href="#">
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
		
  
    <!-- partial:index.partial.html -->
    <div class="login-form">
      <form action="" method="post" onsubmit="return Validate() && Validatename()  && ValidatePhone() && ValidateEmail()  && ValidateAddress() && Validatepassword() && Confirmpass()  && ValidateAddress()"  >
        <h1>Teacher Register</h1>
        <div class="col-12 p-5">
    <div class="row">
      <div class="col-12">
        
          <label>First Name</label>
            <input type="text" class="form-control" name="fname" placeholder="Enter first name" id="fname"  title="Name must be alphabets"  required onkeyup="return Validate()" onblur="return Validate()" required/>
            <span id="fn" style="color: red;"></span>

          </div>
          <div class="col-12">
          <label>Last  Name</label>
            <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter last name"  title="Name must be alphabets" onblur="return Validatename()" required onkeyup="return Validatename()" required/>
            <span id="ln" style="color: red;"></span>


           

          </div>
          <div class="col-12">
          <label>DOB</label>
            <input type="date" name="dob"class="form-control" placeholder="Enter date of birth" id="dob"   required />
            <span id="bh" style="color: red;"></span>
  </div>
  <div class="col-12" required />
      
      <?php
$conn=mysqli_connect("localhost","root","","attendancenew");


$sql=mysqli_query($conn,"select * from tbl_class"); 
?>
<label>Class_id</label><br>


<select   name="class_id" id="class_id" onchange="showResult(this.value)" class="form-control" >
<?php
while($row=mysqli_fetch_array($sql))
{

?>
<option value="<?php echo $row[1] ?>"><?php echo $row[1]?></option>

<?php

}
?>

</select>
    </div>
          
          <div class="col-12">
          <label>Qualification</label>
            <select name="qualification" class="form-control">  
 
  <option value="MCA">MCA</option>  
  <option value="M tech">M tech</option>  
  <option value="PhD">PhD</option>  
  
</select>   
          
 

          </div>
          <div class="col-12">
          <label for="gender"> Select gender</label>
<select name="gender" class="form-control">
	
	<option value="male">Male</option>
	<option value="female">Female</option>
	
</select>
  </div>
  <div class="col-12">
                            <?php
$conn=mysqli_connect("localhost","root","","attendancenew");


$sql=mysqli_query($conn,"select * from tbl_subject"); 
?>
<label>Subject</label><br>

     
<select   name="subject" onchange="showResult(this.value)" class="form-control"  >
<!-- <option value="">--select--</option> -->
<?php
while($row=mysqli_fetch_array($sql))
{

?>
<option value="<?php echo $row[1] ?>" ><?php echo $row[1] ?></option>

<?php
	
}
?>

</select></div>
          <div class="col-12">
          <label>Address</label>
            <input type="text" name="address" class="form-control"placeholder="Enter address" id="address" onblur="return ValidateAddress()"  required onkeyup="return ValidateAddress()" required/>
            <span id="ad" style="color: red;"></span>

          </div>
          <div class="col-12">
          <label>Email</label>
            <input type="text" name="email"  class="form-control"placeholder="Enter mail" id="email" onblur="return ValidateEmail()" required onkeyup="return ValidateEmail()" required/>
            <span id="el" style="color: red;"></span>

          </div> 
          <div class="col-12">
          <label>Phone</label>
            <input type="text" name="phone"  class="form-control"placeholder="Enter phone" id="tel"   title="Please enter a valid phone number" onblur="return ValidatePhone()" required onkeyup="return ValidatePhone()"  minlength="10" maxlength="10" required/>
            <span id="pe" style="color: red;"></span>

            <div class="col-12">
            <label>Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password"   onblur="return Validatepassword()" required onkeyup="return Validatepassword()"/>
              <span id="pss" style="color: red;"></span>
              
              <style>
                                                 /* The message box is shown when the user clicks on the password field */
                                                    #message {
                                                    display:none;
                                                    background:#fff;
                                                    color: #000;
                                                    position: relative;
                                                    padding: 20px;
                                                    margin-top: 10px;
                                                    }
                                                                        #message p {
                                                    padding: 1px 35px;
                                                    font-size: 14px;
                                                    }
                                                    /* Add a green text color and a checkmark when the requirements are right */
                                                    .valid {
                                                    color: green;
                                                    }

                                                    .valid:before {
                                                    position: relative;
                                                    left: -25px;
                                                    content: "✔";
                                                    }

                                                    /* Add a red text color and an "x" when the requirements are wrong */
                                                    .invalid {
                                                    color: red;
                                                    }

                                                    .invalid:before {
                                                    position: relative;
                                                    left: -25px;
                                                    content: "✖";
                                                    }
                                                    </style>
                                                <div id="message">
<!--                                                    <h4 style="color:rgb(249, 164, 61) ;">Password must contain the following:</h4>-->
                                                        <p id="letter" class="invalid">A lowercase letter</p>
                                                        <p id="capital" class="invalid">A capital (uppercase) letter</p>
                                                        <p id="number" class="invalid">A number</p>
                                                        <p id="length" class="invalid">Minimum 8 characters</b></p>
                                                     </div>
                                                <script>
                                        var myInput = document.getElementById("password");
                                        var letter = document.getElementById("letter");
                                        var capital = document.getElementById("capital");
                                        var number = document.getElementById("number");
                                        var length = document.getElementById("length");
                                        myInput.onfocus = function() {
                                        document.getElementById("message").style.display = "block";
                                        }
                                        myInput.onblur = function() {
                                        document.getElementById("message").style.display = "none";
                                        }
                                        // When the user starts to type something inside the password field
                                        myInput.onkeyup = function() {
                                        // Validate lowercase letters
                                        var lowerCaseLetters = /[a-z]/g;
                                        if(myInput.value.match(lowerCaseLetters)) {
                                            letter.classList.remove("invalid");
                                            letter.classList.add("valid");
                                        } else {
                                            letter.classList.remove("valid");
                                            letter.classList.add("invalid");
                                        }

                                        // Validate capital letters
                                        var upperCaseLetters = /[A-Z]/g;
                                        if(myInput.value.match(upperCaseLetters)) {
                                            capital.classList.remove("invalid");
                                            capital.classList.add("valid");
                                        } else {
                                            capital.classList.remove("valid");
                                            capital.classList.add("invalid");
                                        }

                                        // Validate numbers
                                        var numbers = /[0-9]/g;
                                        if(myInput.value.match(numbers)) {
                                            number.classList.remove("invalid");
                                            number.classList.add("valid");
                                        } else {
                                            number.classList.remove("valid");
                                            number.classList.add("invalid");
                                        }

                                        // Validate length
                                        if(myInput.value.length >= 8) {
                                            length.classList.remove("invalid");
                                            length.classList.add("valid");
                                        } else {
                                            length.classList.remove("valid");
                                            length.classList.add("invalid");
                                        }
                                        }
                                    </script>
                                      </div>
          <div class="col-12">
          <label>Confirm Password</label>
            <input type="password" class="form-control" name="cpassword" placeholder="confirm password"  id="cpassword" required onkeyup="return Confirmpass()" onblur="return Confirmpass()"  required/>
            <span id="cpss" style="color: red;"></span><br>

          </div>

        </div>
      

        
          <!-- <a href="#" class="link">Forgot Your Password?</a>  -->
        </div>
        <div class="action">
          <button type="submit" name="register" >Register</button>
         
        </div>
      </form>
      <div class="abcd">
      <a href="adhome.php">Back to home</a>
      
    </div>
      
    </div>
    <!-- partial -->
    <!-- <script  src="./script.js"></script> -->
           
<script type="text/javascript">
function Validate() 
                            {
                            var val = document.getElementById('fname').value;
                            if (!val.match(/^[A-Z].*$/)) 
                            {
                              document.getElementById('fn').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                                    document.getElementById('fname').value = val;
                                    document.getElementById('fname').style.color = "red";
                                      return false;
                                     flag=1;
                            }
                            if(val.length<3||val.length>30){
                              document.getElementById('fn').innerHTML="Between 3 to 10 characters";
                                    document.getElementById('fname').value = val;
    
    
                                document.getElementById('fname').style.color = "red";
                                      return false;
                                      
                            }
                            else{
    
                            
                             document.getElementById('fn').innerHTML=" ";
                              document.getElementById('fname').style.color = "green";
                             return true;
                            }
                          }
                          function Validatename() 
                          {
                            var val = document.getElementById('lname').value;
                            if (!val.match(/^[A-Z].*$/)) 
                            {
                              document.getElementById('ln').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                                    document.getElementById('lname').value = val;
                                    document.getElementById('lname').style.color = "red";
                                      return false;
                                     flag=1;
                            }
                            if(val.length<3||val.length>30){
                               document.getElementById('ln').innerHTML="Between 3 to 10 characters";
                                    document.getElementById('lname').value = val;
    
    
                                document.getElementById('lname').style.color = "red";
                                      return false;
                                      
                            }
                            else{
    
                            
                               document.getElementById('ln').innerHTML=" ";
                              document.getElementById('lname').style.color = "green";
                             return true;
                            }
                          }
                            
                          function ValidateEmail()
                            {
                         
                              var email=document.getElementById('email').value;  
                              var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                            //var atposition=x.indexOf("@");  
                            //var dotposition=x.lastIndexOf(".");  
                           
                              if(email.length<3||email.length>30){
                                document.getElementById('el').innerHTML="Invalid Email";
                                    document.getElementById('email').value = email;
                                    document.getElementById('email').style.color = "red";
                                   // alert("err");
                                      return false;
                              }
                             if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){  
                                document.getElementById('el').innerHTML="Please enter a valid Email";  
                                document.getElementById('email').value = email;
                                    document.getElementById('email').style.color = "red";
                              return false;  
                              }
                              else{
                              document.getElementById('el').innerHTML=" ";
                              document.getElementById('email').style.color = "green";
                             return true;
    
                              
                            }
                          }
                             function Validatepassword()
                             {
                          
                              var pass=document.getElementById('password').value;
                              var patt="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/";
                              if (pass.length<8)
                               if(!pass.match(/[a-z]/g)){
                                document.getElementById('password').value = pass;
                                 document.getElementById('cpss').innerHTML="Enter a strong password eg:Aa#23gh56";
                                  document.getElementById('password').style.color="red";
                                  return false;
                                }
                                if(!pass.match(/[A-Z]/g)){
                                  document.getElementById('password').value = pass;
                                   document.getElementById('passwordError').innerHTML="Include minimum one capital letter";
                                 document.getElementById('password').style.color="red";

                                     return false;
                                }
                                if(!pass.match(/[0-9]/g)){
                                  document.getElementById('password').value = pass;
                                  document.getElementById('passwordError').innerHTML="Include 1 digit";
                                document.getElementById('password').style.color="red";

                                return false;
                                 }
                              if(!pass.match(/[^a-zA-Z\d]/g)){
                                document.getElementById('password').value = pass;
                                document.getElementById('passwordError').innerHTML="Include 1 special character";
                              document.getElementById('password').style.color="red";

                              return false;
                                 }
                            if(pass.length < 8){
                              document.getElementById('password').value = pass;
                               document.getElementById('passwordError').innerHTML="Minimum 8 characters";
                              document.getElementById('password').style.color="red";

                              return false;
                            }
                              else{
                                document.getElementById('password').value = pass;

                                 document.getElementById('passwordError').innerHTML="";
                                document.getElementById('password').style.color = "green";
                              }
                           
                               
                          }
                          function Confirmpass()
                             {
                          
                              var pass1=document.getElementById('password').value;
                              var pass2=document.getElementById('cpassword').value;
                               if (pass1!=pass2)
                                        {
                                 document.getElementById('cpss').innerHTML="Password doesn't match ";  
                                document.getElementById('cpassword').value = pass2;
                                document.getElementById('cpassword').style.color = "red";
                              return false;  
                              }
                           
                              else{
                              document.getElementById('cpss').innerHTML=" ";
                              document.getElementById('cpassword').style.color = "green";
                            return true;
                              
                            }
                          }
                          function ValidatePhone(){
                            var mobile=document.getElementById('tel').value;
                            if(!mobile.match(/^[6789][0-9]{9}$/)){
                             document.getElementById('pe').innerHTML="Enter a valid phone number";
                            document.getElementById('tel').style.color="red";
                           return false;
                           }
                          else{
                          document.getElementById('pe').innerHTML=" ";
                          document.getElementById('tel').style.color="green";
                          return true;
}
}
                          
function ValidateAddress(){
  var address = document.getElementById('address').value;
                            if (!address.match(/^[a-zA-Z ]*$/)) 
                            {
                              document.getElementById('ad').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                                    document.getElementById('address').value = address;
                                    document.getElementById('address').style.color = "red";
                                      return false;
                                     flag=1;
                            }
                            if(address.length<3||address.length>30){
                               document.getElementById('ad').innerHTML="Between 3 to 10 characters";
                                    document.getElementById('address').value = address;
    
    
                                document.getElementById('address').style.color = "red";
                                      return false;
                                      
                            }
                            else{
    
                            
                              document.getElementById('ad').innerHTML=" ";
                              document.getElementById('address').style.color = "green";
                             return true;
                            }
}

    
                            
                            
                            
    
                            function Val()
                            {
                              if(Validate()===false || ValidateEmail()===false || Validatepassword()===false || Confirmpass()===false || ValidatePhone()===false)
                              {
                                return false;
                              }
                            }
                            
                            
  </script>
  </body>
</html>