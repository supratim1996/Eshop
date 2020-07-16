<?php
include("dbcon.php");
include("action.php");
if(isset($_GET['id']) && !empty($_GET['id']))
{
	$bid=$_GET['id'];
	$sql="SELECT * FROM catagories where catid=$bid";
	$result=$con->query($sql);
	$row=$result->fetch_assoc();
}
?>
<?php
if(isset($_POST) && !empty($_POST))
{
	$catid=$_POST['id'];
	$catname=$_POST['catname'];
	$sql="UPDATE catagories SET catname='".$catname."' where catid=$catid";
	if($con->query($sql))
	{
		header("location: catlist.php");
	}
	else
	{
		echo "not connected!";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit catagory:</title>
</head>
<body>
	<h3>edit catagory</h3>
	<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $row['catid']?>">
	
		<tr>
			<td>catagory name</td>
			<td><input type="text" name="catname" value="<?php echo $row['catname']  ?>"></td>
		</tr>
		<tr>
			
			<td></td>
			<td>
				<input type="submit" name="submit" value="submit">
				<input type="reset" name="reset" value="cancel">
			</td>
		</tr>



	</form>

</body>
</html>