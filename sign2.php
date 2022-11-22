<?php
// session_start(); 


include 'db_con.php';
session_start();
session_unset();
if(isset($_POST['submit_login'])){
    $user = $_POST['username'];
   

    $password = $_POST['password'];
    $login_check = "SELECT * FROM tbl_login as a,tbl_usertype as b WHERE a.adn_no='$user' AND a.password='$password' AND a.type_id=b.type_id";
	$login_check_result = mysqli_query($conn, $login_check);
	$rsltcheck = mysqli_num_rows($login_check_result);
    $row = mysqli_fetch_array($login_check_result);
    if($rsltcheck == 1){
        if($row['adn_no'] == $user && $row['password'] == $password && $row['type_name'] == "parent"){
        
          $_SESSION['adn_no'] = $row['adn_no'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['type_name'] = $row['type_name'];
            header("location: phome.php");
        }
        else if($row['adn_no'] == $user && $row['password'] == $password && $row['type_name'] == "admin"){
          $_SESSION['adn_no'] = $row['adn_no'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['type_name'] = $row['type_name'];
            header("location: adhome.php");
        }
        else if($row['adn_no'] == $user && $row['password'] == $password && $row['type_name'] == "student"){
          $_SESSION['adn_no'] = $row['adn_no'];
         
          $_SESSION['email'] = $row['email'];
          $_SESSION['password'] = $row['password'];
          $_SESSION['type_name'] = $row['type_name'];
          header("location: shome.php");
      }
      else if($row['adn_no'] == $user && $row['password'] == $password && $row['type_name'] == "teacher"){
        $_SESSION['adn_no'] = $row['adn_no'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['type_name'] = $row['type_name'];
        header("location: thome.php");
    }
    }
    else{
        echo '<script> alert ("Invalid credentials");</script>';
	    echo'<script>window.location.href="sign.php";</script>';
    }

  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Rubik:400,700"/>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <!-- partial:index.partial.html -->
    <div class="login-form ">
      
    
      <form action="" method="post">
        <h1>Login</h1>
        <div class="content">
          <div class="input-field"><p>
            
          <label>User_id</label>
            <input
              type="text"
              name="username"
              placeholder="Enter your userid"
              autocomplete="nope"
            />
          </div>
          <div class="input-field"><p>
            
          <label>Password</label>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <a href="#" class="link">Forgot Your Password?</a>
        </div>
        <div class="action">
          
          <button name="submit_login">Sign in</button>
        </div></p></p>
      </form>
    </div>

    <!-- partial -->
    <!-- <script  src="./script.js"></script> -->
  </body>
</html>
