<?php
include("action.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin dashbord:</title>
</head>
<body>

<h1>Dashbord</h1>
<ul>
	<?php
	//session_start();
	if($_SESSION['user']['atype']=='1')

{?>	
	<ul>
<li><a href="adminlist.php">Members</a></li>
	<li><a href="customerlist.php">customer List:</a></li>
	<li><a href="add_admin.php">add admin</a></li>
	<li><a href="add_customer.php">add customer</a></li>
	<li><a href="add_cat.php">add catagory</a></li>
	<li><a href="add_products.php">add products</a></li>
	</ul>
<?php }
  elseif ($_SESSION['user']['atype']=='0') {?>
  	<ul>
    <li><a href="customerlist.php">customer List:</a></li>
    <li><a href="catlist.php">catagory List:</a></li>
    <li><a href="prolist.php">product List:</a></li>
	</ul>
	<?php }?>
	
	<li><a href="logout.php">logout</a></li0>
</body>
</html>