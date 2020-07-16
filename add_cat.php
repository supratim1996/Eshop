<?php
    include("dbcon.php");
    include("action.php");
    if(isset($_POST) && !empty($_POST))
    {
    	$catname=$_POST['catname'];
    	$sql="INSERT INTO catagories(catname)
    	VALUES('".$catname."')";
    	//echo $sql;exit;
    	
    	if($con->query($sql))
    	{
    		header("location: catlist.php");
    	}
    	else
    	{
    		echo "not submitted!";
    	}

    }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Add catagory</title>
</head>
<body>
<h2>Add catagory:</h2>
<form action="" method="post">
	<table>
		<tr>
			<td>catagory name:</td>
			<td><input type="text" name="catname"></td>
		</tr>
		<tr>
			
			<td></td>
			<td>
				<input type="submit" name="submit" value="submit">
				<input type="reset" name="reset" value="cancel">
			</td>
		</tr>

	</table>



</form>
</body>
</html>