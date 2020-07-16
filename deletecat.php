<?php
include("dbcon.php");
include("action.php");
if(isset($_GET['id']) && !empty($_GET['id']))
  {
	$bid=$_GET['id'];
	$sql="DELETE FROM catagories WHERE catid=$bid";
	if($con->query($sql))
		header("location:catlist.php");
	else
		echo "not deleted";
   }
?>