<?php
include("dbcon.php");
include("action.php");
if(isset($_GET['id']) && !empty($_GET['id']))
  {
	$bid=$_GET['id'];
	$sql="DELETE FROM admins WHERE aid=$bid";
	if($con->query($sql))
		header("location:adminlist.php");
	else
		echo "not deleted";
   }
?>