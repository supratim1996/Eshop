<?php
include("dbcon.php");
include("action.php");
$sql="SELECT * FROM admins";
$result=$con->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Member List </title>
</head>
<body>
	<h3>Member list</h3>
	<form method="post" action="">
		<table border="1">
			<tr>
				<th>Admin name</th>
				<th>emailid</th>
				<th>password.</th>
				<th>phone no:</th>
				<th>Admin type:</th>
				<th>Action:</th>
			</tr>

			<?php
while($row = $result->fetch_assoc()){

	?>
	<tr>
		<td><?php echo $row['aname']; ?></td>
		<td><?php echo $row['aemail']; ?></td>
		<td><?php echo $row['apassword']?></td>
		<td><?php echo $row['aphone'] ?></td>
		<td><?php echo $row['atype'];?></td>
		<td><a href="editadmin.php?id=<?php echo $row['aid']?>">Edit</a>|<a href="deleteadmin.php?id=<?php echo $row['aid']?>" onclick="return confirm('do you want to delete?')">Delete</a></td>
	
	
	</tr>
	<?php }?>
		</table>
	</form>
	<h3>Go to <a href="adashbord.php">dashbord</a></h3>
	

</body>
</html>