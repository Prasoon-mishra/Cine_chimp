<?php
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];
if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phoneCode) || !empty($phone)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "test";
    //create connection
    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_errno()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_errno());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (username, password, gender, email, phoneCode, phone) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = mysqli_prepare($conn,$SELECT);
     mysqli_stmt_bind_param($stmt,"s", $email);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_bind_result($stmt,$email);
     mysqli_stmt_get_result($stmt);
     $rnum = mysqli_num_rows($stmt);
     if ($rnum==0) {
      mysqli_close($stmt);
      $stmt = mysqli_prepare($conn,$INSERT);
      mysqli_stmt_bind_param($stmt,"ssssii", $username, $password, $gender, $email, $phoneCode, $phone);
      mysqli_stmt_execute($stmt);
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     mysqli_close($stmt);
     mysqli_close($conn);
    }
} else {
 echo "All field are required";
 die();
}
?>