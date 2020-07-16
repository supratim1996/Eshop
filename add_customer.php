
<?php
include("dbcon.php");
include("action.php");
if(isset($_POST)&& !empty($_POST))
{
	//echo "<pre>";print_r($_POST);
	$Mname=$_POST['cname'];
	$Email=$_POST['cemail'];
	$phone=$_POST['cphone'];
	$address=$_POST['caddress'];
	$dop=$_POST['dop'];
	
	 $sql="INSERT INTO customers(cname,cemail,cphone,caddress,dop)
         VALUES('".$Mname."','".$Email."','".$phone."','".$address."','".$dop."')";

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
	<title>Add Customer</title>
</head>
<body>
	<h3>Add customer:</h3>
	<form method="post" action="">
		<table>
			<tr>
		<td>customer Name:</td>
		<td><input type="text" name="cname"></td>
	</tr>
	<tr>
		<td>customer Email:</td>
		<td><input type="email" name="cemail"></td>
	</tr>
	<tr>
		
		<td> Phone number:</td>
		<td><input type="text" name="cphone"></td>
	</tr>
	<td> Customer address:</td>
		<td><input type="text" name="caddress"></td>
	</tr>
	<tr>
		<td>date of purchase:</td>
		<td><input type="date" name="dop"></td>

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