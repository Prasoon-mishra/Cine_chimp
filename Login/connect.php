<?php
include_once '../includes/dbh.inc.php';

$username = $_POST['sname'];
$email = $_POST['semail'];
$mobile = $_POST['smobile'];
$adhaar = $_POST['sadhaar'];
$pass = $_POST['spass'];

$sql="INSERT INTO signup(username, email,mobile, adhaar,spassword) VALUES (?,?,?,?,?);";

$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "SQL ERROR";
}else{
    mysqli_stmt_bind_param($stmt,"sssss",$username,$email,$mobile,$adhaar,$pass);
    mysqli_stmt_execute($stmt);
}
mysqli_query($conn,$sql);

header("Location: http://localhost/J/Login/login.html");