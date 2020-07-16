<?php
include("dbcon.php");
include("action.php");
$sql="SELECT * FROM products p  LEFT JOIN  catagories c on p.catid=c.catid ";
$result=$con->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>product List </title>
</head>
<body>
	<h3>product list</h3>
	<form method="post" action="">
		<table border="1">
			<tr>
				<th>product name</th>
				<th>product price </th>
				<th> manufacturing date</th>
				<th>catagory</th>
				<th>Action</th>
			</tr>
					<?php
while($row = $result->fetch_assoc()){

	?>
			<tr>
				<td><?php echo $row['pname']?></td>
				<td><?php echo $row['price']?></td>
				<td><?php echo $row['pmd']?></td>
				<td><?php echo $row['catname']?></td>

				<td><a href="editpro.php?id=<?php echo $row['pid']?>">Edit</a>|<a href="deletepro.php?id=<?php echo $row['pid']?>" onclick="return confirm('do you want to delete?')">Delete</a></td>
	
			</tr>
		<?php }?>
		</table>
	</form>
	<h3><a href="adashbord.php">goback to dashbord</a></h3>
</body>