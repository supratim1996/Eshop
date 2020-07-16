<?php
include("dbcon.php");
include("action.php");
if(isset($_GET['id']) && !empty($_GET['id']))
  {
	$bid=$_GET['id'];
	$sql="DELETE FROM products WHERE pid=$bid";
	if($con->query($sql))
		header("location: prolist.php");
	else
		echo "not deleted";
   }
?>