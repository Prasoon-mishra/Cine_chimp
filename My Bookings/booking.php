<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" >
    <meta name="home page" content="Home page of CineChimp">
    <link rel="stylesheet" type="text/css" href="bookingstyle.css">
    <title>My Bookings</title>
  </head>
  <body>
    <div class="main">
      <div class="header">
        <img src="bmg.png" alt="">
        <span id="title">My Bookings</span>
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
        <form action="" method="POST">
        <table>
          <tr>
            <th>Booking ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Seats</th>
            <th>Seat Type</th>
          </tr>
          <input type="submit" name="search" class="display" value="Display Bookings">
</form>
          <?php
          $connection = mysqli_connect("localhost","root","");
          $db=mysqli_select_db($connection,'bms');
          
          if(isset($_POST['search']))
          {
            $query="SELECT * FROM `mov`";
            $query_run=mysqli_query($connection,$query);
          
          while($row = mysqli_fetch_array($query_run))
          {
            ?>

            <tr>
              <td><?php echo $row['ID'] ?> </td>
              <td><?php echo $row['mname'] ?></td>
              <td><?php echo $row['mdate'] ?></td>
              <td><?php echo $row['mtime'] ?></td>
              <td><?php echo $row['seat'] ?></td>
              <td><?php echo $row['stype'] ?></td>
            </tr>

            <?php
          }
          }

          ?>
          
        </table>
    </div>
    </div>
  </body>
</html>
