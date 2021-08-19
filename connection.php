<?php
$username = "root";
$password="";
$server="127.0.0.1:3307";
$db="customers";
$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn){
   die("Could not connect to database due to error :".mysqli_connect_error());
}
?>
