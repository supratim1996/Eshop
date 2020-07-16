
<?php
include("dbcon.php");
include("action.php");
if(isset($_GET['id']) && !empty($_GET['id']))
{
	$bid=$_GET['id'];
	$sql="SELECT * FROM admins where aid=$bid";
	$result=$con->query($sql);
	$row=$result->fetch_assoc();
}
if(isset($_POST) && !empty($_POST))
{
	$id=$_POST['id'];
	$Mname=$_POST['aname'];
	$Email=$_POST['aemail'];
	$phone=md5($_POST['apassword']);
	$address=$_POST['aphone'];
	$type=$_POST['atype'];
	$sql="UPDATE admins SET aname='".$Mname."',aemail='".$Email."',apassword='".$phone."',aphone='".$address."',atype='".$type."' WHERE aid=$id";
	
         if($con->query($sql))
         {
         	//echo " signup sucessfull";
           header("Location: adminlist.php");
        }
         else
         	echo "signup not sucessfull";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit admin</title>
</head>
<body>
	<h3>Edit admin</h3>
	<form method="post" action="">
		<input type="hidden" name="id" value="<?php echo $row['aid']?>">
		<table>
			<tr>
		<td>Admin Name:</td>
		<td><input type="text" name="aname" value="<?php echo $row['aname'] ?>"></td>
	</tr>
	<tr>
		<td>Admin Email:</td>
		<td><input type="email" name="aemail" value="<?php echo $row['aemail'] ?>"></td>
	</tr>
	<tr>
		<tr>
			<td>Admin password:</td>
			<td><input type="password" name="apassword"value="<?php echo $row['apassword'] ?>"></td>
		</tr>
		<td> Admin Phone number:</td>
		<td><input type="text" name="aphone"value="<?php echo $row['aphone'] ?>"></td>
	</tr>
	<td> Admin type:</td>
		<td><input type="text" name="atype"value="<?php echo $row['atype'] ?>"></td>
	</tr>
	
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Edit">
			<input type="reset" name="cancel" value="cancel"></td>
	</tr>
	
		</table>
		

	</form>

</body>
</html>