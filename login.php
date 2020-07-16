
<?php
include("dbcon.php");
$email="";
$pass="";
$rem="";
if(isset($_COOKIE['aemail']) and isset($_COOKIE['apassword']))
{
	$email=$_COOKIE['aemail'];
	$pass=$_COOKIE['apassword'];
	$rem="checked";

}
if(isset($_POST) && !empty($_POST))
	{   
		$email=$_POST['aemail'];
		$pass=md5($_POST['apassword']);
		if(isset($_POST['remember']))
		{
			setcookie('aemail',$email,time()+50);
			setcookie('apassword',$pass,time()+50);

		}
		$sql="SELECT * FROM admins WHERE aemail='".$email."' AND apassword='".$pass."' ";
		$result=$con->query($sql);
		if($result->num_rows>0)
		{
			$row=$result->fetch_assoc();
			

			session_start();
			$_SESSION['user']=$row;
			header("location: adashbord.php");
		
			
		}
		else
			echo "Email/password is wrong ";
	}

?><!DOCTYPE html>
<html>
<head>
	<title> Admin login:</title>
	<style type="text/css">
		h2{
			text-align: center;
		}
		th{
			text-align: right;
		}

		
	</style>
</head>
<body>
	<table cellpadding="5" cellspacing="10" align="center">
		<h2>login form for admin :</h2>
		<form method="post" action ="">
			<tr>
				<th>Admin Id:</th><td><input type="email" name="aemail" id="email" placeholder="Eg:sjetty1996@gmail.com" value="<?php echo $email ?>"></td>
			</tr>
			<tr>
				<th>Admin Password:</th><td><input type="Password" name="apassword" id="pass" placeholder="Password" value="<?php echo $pass  ?>"></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="remember" value="1">Remember me </td>
			
				<td style="text-align: center;"><input type="submit" name="login" value="login"></td>
			</tr>
		</form>
	
	</table>
	

</body>
</html>