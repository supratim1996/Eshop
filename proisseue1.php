<?php
include("dbcon.php");
include("action.php");
$sql1="SELECT * FROM customers";
$result1=$con->query($sql1);
$sql2="SELECT * FROM products";
$result2=$con->query($sql2);
if(isset($_POST) && !empty($_POST))
{
	echo "<pre>";print_r($_POST);
	$pid=$_POST['pid'];
	$bid=$_POST['cid'];
	$sql="UPDATE customers SET  pid=$pid  WHERE cid=$bid ";
	if($con->query($sql))
	{
		header("Location: customerlist.php");
	}
	else
		echo "something went wrong !!";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Isseue</title>
</head>
<body>
	<h2>set product to customers:</h2>
	<form method="post" action="">
		<table>
			
		 <tr>
		<td>customers</td>
		<td>
			<select name="cid">
				
				<option value="">
					select customer
				</option>
				<?php while($row1=$result1->fetch_assoc()){?>

				<option value="<?php echo $row1['cid'] ?>">
					<?php echo $row1['cname'] ?>
					
				</option>
			<?php }?>
			</select>
		</td>
	</tr>
	 <tr>
		<td>product</td>
		<td>
			<select name="pid">
				
				<option value="">
					select product
				</option>
				<?php while($row2=$result2->fetch_assoc()){?>

				<option value="<?php echo $row2['pid'] ?>">
					<?php echo $row2['pname'] ?>
					
				</option>
			<?php }?>
			</select>
		</td>
	</tr>
	
	
		<td></td>
		<td><input type="submit" name="submit">
			<input type="reset" name="cancel"></td>
	</tr>
		</table>
		
		
	</form>
</body>
</html>