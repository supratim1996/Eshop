<?php
include("dbcon.php");
include("action.php");
if(isset($_GET['id']) && !empty($_GET['id']))
{
	$bid=$_GET['id'];
	$sql="SELECT * FROM products where pid=$bid";
	$result=$con->query($sql);
	$row=$result->fetch_assoc();
}
?>
<?php
if(isset($_POST) && !empty($_POST))
{
	$pid=$_POST['id'];
	$pname=$_POST['pname'];
	$price=$_POST['price'];
	$pmd=$_POST['pmd'];
	$sql="UPDATE products SET pname='".$pname."',price='".$price."',pmd='".$pmd."' where pid=$pid";
	echo $sql ;
	if($con->query($sql))
	{ 
		//echo " signup sucessfull";
		header("location: prolist.php");
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
	<title>Edit products:</title>
</head>
<body>
	<h3>edit products</h3>
	<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $row['pid']?>">
	<table>
		<tr>
			<td>product name</td>
			<td><input type="text" name="pname" value="<?php echo $row['pname']  ?>"></td>
		</tr>
		<tr>
			<td>product price</td>
			<td><input type="text" name="price" value="<?php echo $row['price']  ?>"></td>
		</tr>
		<tr>
			<td>manufactering date</td>
			<td><input type="text" name="pmd" value="<?php echo $row['pmd']  ?>"></td>
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