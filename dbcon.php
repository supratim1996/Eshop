<?php 
$server="localhost:3307";
$user="root";
$password="";
$db="eshop";
$con= new mysqli($server,$user,$password,$db);
if($con->connect_error)
  die($con->connect_error);
//echo "connected";
?>