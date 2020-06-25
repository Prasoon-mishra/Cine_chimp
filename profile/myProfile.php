<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
      <script src="myProfile.js"></script>
    <meta charset="utf-8" >
     <meta name="home page" content="Home page of CineChimp">
    <link rel="stylesheet" type="text/css" href="aboutstyle.css">
    <title>Book My Show</title>
  </head>
  <body>
    <div class="main">
      <div class="header">
        <img src="bmg.png" alt="">
        <span id="title">Movies</span>>
        <a href="http://localhost/J/profile/myProfile.php">My Profile</a>
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
      <?php
if($_SESSION["username"]) {
?>
Welcome <?php echo $_SESSION["username"]; ?>. Click here to <a href="http://localhost/J/Login/logout.php" tite="Logout">Logout.</a>
<?php
}else echo "<h1>Please login first .</h1>";
?>
      <table border="2" height=70% width=70% cellpadding="10">
        <tr>
          <th>Name</th>
          <td><a id="name"><?php echo $_SESSION["username"]; ?></a> &nbsp&nbsp&nbsp&nbsp&nbsp<button  onclick="updatename();"> edit</button></td>
          <td colspan="2" rowspan="3"><img src="prasoon.png" heith="300px" width="200px"></td>
        </tr>
        <tr>
          <th>Email</th>
          <td><a id="email"><?php echo $_SESSION["email"]; ?></a> &nbsp&nbsp&nbsp&nbsp&nbsp<button onclick="updateEmail();"> edit</button></td>
          
        </tr>
        <tr>
          <th>Password</th>
          <td><a id="password"><?php echo $_SESSION["pass"]; ?></a> &nbsp&nbsp&nbsp&nbsp&nbsp<button onclick="updatePassword();"> edit</button></td>
          </tr>
        <tr>
          <th>Adhaar no.</th>
          <td><a id="date"><?php echo $_SESSION["adh"]; ?> </a>  &nbsp&nbsp&nbsp&nbsp&nbsp <button onclick="updateDate();"> edit</button></td>
          <th>Mobile</th>
          <td><a id="ph_number"><?php echo $_SESSION["mobile"]; ?></a>&nbsp&nbsp&nbsp&nbsp&nbsp <button onclick="updatePhn();"> edit</button></td>
        </tr>
      </table>
    
    </div>
    </div>
  </body>
</html>


