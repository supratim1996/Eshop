<?php
include("dbcon.php");
include("action.php");
$sql="SELECT * FROM customers c LEFT JOIN products p on c.pid=p.pid";
$result=$con->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer List </title>
</head>
<body>
	<h3>Customer list</h3>
	<form method="post" action="">
		<table border="1">
			<tr>
				<th>customer name:</th>
				<th>emailid:</th>
                <th>phone no:</th>
				<th>date of perchase : </th>
				<th>product name:</th>
				<th>Actions</th>

			</tr>

			<?php
while($row = $result->fetch_assoc()){

	?>
	<tr>
		<td><?php echo $row['cname']; ?></td>
		<td><?php echo $row['cemail']; ?></td>
		<td><?php echo $row['cphone']?></td>
		<td><?php echo $row['dop'] ?></td>
		<td><?php echo $row['pname'];?></td>
		<td><a href="editcustomer.php?id=<?php echo $row['cid']?>">Edit</a>|<a href="deletecustome.php?id=<?php echo $row['cid']?>" onclick="return confirm('do you want to delete?')">Delete</a></td></tr>
	<?php }?>
		</table>
	</form>
	<h3>go back to <a href="adashbord.php"> dashbord</a></h3>

</body>
</html>