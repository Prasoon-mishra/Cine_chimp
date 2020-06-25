<?php
include_once '../includes/dbh.inc.php';

$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql="INSERT INTO contact( email, message, name) VALUES (?,?,?);";

$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "SQL ERROR";
}else{
    mysqli_stmt_bind_param($stmt,"sss",$email,$message,$username);
    mysqli_stmt_execute($stmt);
}
mysqli_query($conn,$sql);

header("Location: http://localhost/J/Contact/contact.html?send=success");