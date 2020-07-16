<?php
include("dbcon.php");
include("action.php");
$sql="SELECT * FROM catagories";
$result=$con->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>catagory List </title>
</head>
<body>
	<h3>catagori list</h3>
	<form method="post" action="">
		<table border="1">
			<tr>
				<th>catagory name</th>
				<th>Action</th>
			</tr>
					<?php
while($row = $result->fetch_assoc()){

	?>
			<tr>
				<td><?php echo $row['catname']?></td>
				<td><a href="editcat.php?id=<?php echo $row['catid']?>">Edit</a>|<a href="deletecat.php?id=<?php echo $row['catid']?>" onclick="return confirm('do you want to delete?')">Delete</a></td>
	
			</tr>
		<?php }?>
		</table>
	</form>
	<h3><a href="adashbord.php">goback to dashbord</a></h3>
</body>