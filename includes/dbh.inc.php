<?php
/*
$user='root';
$pass='';
$db='bms';

$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");

echo"Great";
*/

$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="bms";

$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);