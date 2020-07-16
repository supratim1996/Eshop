
<?php
include("dbcon.php");
include("action.php");
if(isset($_GET['id']) && !empty($_GET['id']))
{
	$bid=$_GET['id'];
	$sql="SELECT * FROM customers where cid=$bid";
	$result=$con->query($sql);
	$row=$result->fetch_assoc();
}
if(isset($_POST)&& !empty($_POST))
{
	//echo "<pre>";print_r($_POST);
	$id=$_POST['cid'];
	$Mname=$_POST['cname'];
	$Email=$_POST['cemail'];
	$phone=$_POST['cphone'];
	$address=$_POST['caddress'];
	$dop=$_POST['dop'];
	
	 $sql="UPDATE customers SET cname='".$Mname."',cemail='".$Email."',cphone='".$phone."',caddress='".$address."',dop='".$dop."' WHERE cid=$id";

        //echo $sql;exit;
         if($con->query($sql))
         {
         	//echo " signup sucessfull";
           header("location: proisseue1.php");
        }
         else
         	echo "signup not sucessfull";


}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Customer</title>
</head>
<body>
	<h3>Edit customer:</h3>
	<form method="post" action="">
		<input type="hidden" name="cid" value="<?php echo $row['cid']?>">
		<table>
			<tr>
		<td>customer Name:</td>
		<td><input type="text" name="cname" value="<?php echo $row['cname']?>"></td>
	</tr>
	<tr>
		<td>customer Email:</td>
		<td><input type="email" name="cemail" value="<?php echo $row['cemail']?>"></td>
	</tr>
	<tr>
		
		<td> Phone number:</td>
		<td><input type="text" name="cphone" value="<?php echo $row['cphone']?>"></td>
	</tr>
	<td> Customer address:</td>
		<td><input type="text" name="caddress" value="<?php echo $row['caddress']?>"></td>
	</tr>
	<tr>
		<td>date of purchase:</td>
		<td><input type="date" name="dop" value="<?php echo $row['dop']?>"></td>

	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit">
			<input type="reset" name="cancel"></td>
	</tr>
	
	
		</table>
		

	</form>

</body>
</html>