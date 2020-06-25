<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','root','','bms') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM signup WHERE email='" . $_POST["lemail"] . "' and spassword = '". $_POST["lpass"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["username"] = $row['username'];
$_SESSION["email"]=$row['email'];
$_SESSION["pass"]=$row['spassword'];
$_SESSION["adh"]=$row['adhaar'];
$_SESSION["mobile"]=$row['mobile'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:http://localhost/J/profile/myProfile.php");
}
?>

<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8" >
     <meta name="home page" content="Home page of CineChimp">
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <title>Book My Show</title>
    <script src="script.js">
      
      </script>
  </head>
  <body>
    <div class="main">
      <div class="header">
        <img src="bmg.png" alt="">
        <span id="title">Authentication</span>
        <a href="http://localhost/J/profile/myProfile.html">My Profile</a>
      </div>
      <div class="head2">
      <ul id="topleft">
        <li><a href="http://localhost/J/home/home.html">Home</a></li>
        <li><a href="http://localhost/J/Movies/movies.html">Movies</a></li>
        <li><a href="http://localhost/J/My Bookings/booking.php">My Bookings</a></li>
        <li><a href="http://localhost/J/Login/login.php">Login</a></li>
      </ul>
      <ul id="topright">
        <li><a href="http://localhost/J/contact/contact.html">Contact Us</a></li>
        <li><a href="http://localhost/J/About/About.html">About us</a></li>
      </ul>
      </div>
      <div class="slide0">
        <div class="loginbox">
            <img src="LOGO.png" class="usericon">
            <h1>Login Here</h1>
            <form onsubmit="return validate()" action="" method="POST">
            <div class="message"><?php if($message!="") { echo $message; } ?></div>
                <input id="name" type="email" name="lemail" placeholder="Enter the email">
                <input id="pass"type="password" name="lpass" placeholder="Enter Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain atleast one number and one upper case and one lower case and atleast 8 more characters" required>
                <input type="submit" name="" value="Login">
                <a href="#">Forget Password?</a><br>
                <a onclick="pop1()">Dont have an account?</a>
            </form>
        </div>
        <div id="sign_upbox">
            <img src="LOGO.png" class="usericon">
            <h1>Sign up Here</h1>
            <div id="error_message">
            </div>
            <form onsubmit="return validate_sig()" action="connect.php" method="POST">
                        
              <input id="name" type="text" name="sname" placeholder="Enter the user name">
              
              <input id="email" type="text" name="semail" placeholder="Enter Email">
              
              <input id="mobile" type="text" name="smobile" placeholder="Enter Mobile Numbers">
              
              <input id="adh" type="text" name="sadhaar" placeholder="Enter Aadhar Numbers">
              
              <input id="pass"type="password" name="spass" placeholder="Enter Password" s>
              
              <input id="re_pass" type="password" name="" placeholder="Re-Enter Password">
              <input type="submit" name="" value="Signup">
          </form>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>