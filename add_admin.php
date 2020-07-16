<?php
include("dbcon.php");
//include("action.php");
if(isset($_POST)&& !empty($_POST))
{
	//echo "<pre>";print_r($_POST);
	$Mname=$_POST['aname'];
	$Email=$_POST['aemail'];
	$phone=md5($_POST['apassword']);
	$address=$_POST['aphone'];
	$type=$_POST['atype'];
	
	 $sql="INSERT INTO admins(aname,aemail,apassword,aphone,atype)
         VALUES('".$Mname."','".$Email."','".$phone."','".$address."','".$type."')";

        //echo $sql;exit;
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
	<title>Add Member</title>
</head>
<body>
	<h3>Add Member</h3>
	<form method="post" action="">
		<table>
			<tr>
		<td>Admin Name:</td>
		<td><input type="text" name="aname"></td>
	</tr>
	<tr>
		<td>Admin Email:</td>
		<td><input type="email" name="aemail"></td>
	</tr>
	<tr>
		<tr>
			<td>Admin password:</td>
			<td><input type="password" name="apassword"></td>
		</tr>
		<td> Admin Phone number:</td>
		<td><input type="text" name="aphone"></td>
	</tr>
	<td> Admin type:</td>
		<td>
			<select name="atype">
				<option value="">Select Admin Type</option>
				<option value="1">Super Admin</option>
				<option value="0">Admin</option>
			</select>
		</td>
	</tr>
	
	
	<!-- <tr>
		<td>Date Of Isseue</td>
		<td><input type="Date" name="isseue_date"></td>
	</tr>
	<tr>
		<td>Date Of Return</td>
		<td><input type="Date" name="date_of_return"></td>
	</tr> -->
	<tr>
		<td></td>
		<td><input type="submit" name="submit">
			<input type="reset" name="cancel"></td>
	</tr>
	
		</table>
		

	</form>

</body>
</html>