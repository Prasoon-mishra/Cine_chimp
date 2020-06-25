<?php
include_once '../includes/dbh.inc.php';

$movie = $_POST['mname'];
$date = $_POST['mdate'];
$seat = $_POST['seat'];
$time = $_POST['time'];
$quantity = $_POST['mseat'];

$sql="INSERT INTO mov(mname, mdate, stype, mtime,seat) VALUES (?,?,?,?,?);";

$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "SQL ERROR";
}else{
    mysqli_stmt_bind_param($stmt,"ssssi",$movie,$date,$seat,$time,$quantity);
    mysqli_stmt_execute($stmt);
}
mysqli_query($conn,$sql);

header("Location: http://localhost/J/Movies/movies.html");