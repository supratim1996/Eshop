<?php
    include("dbcon.php");
    include("action.php");
    if(isset($_POST) && !empty($_POST))
    {
    	$pname=$_POST['pname'];
        $price=$_POST['price'];
        $pmd=$_POST['pmd'];
        $rec=$_POST['recomented'];
    	$sql="INSERT INTO products(pname,price,pmd,recomented)
    	VALUES('".$pname."','".$price."','".$pmd."','".$rec."')";
    	//echo $sql;exit;
    	
    	if($con->query($sql))
    	{
    		header("location: proisseue.php");
    	}
    	else
    	{
    		echo "not submitted!";
    	}

    }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Products</title>
</head>
<body>
<h2>Add Products:</h2>
<form action="" method="post">
	<table>
		<tr>
			<td>product name:</td>
			<td><input type="text" name="pname"></td>
		</tr>
        <tr>
            <td>product price:</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>product manufactering date:</td>
            <td><input type="date" name="pmd"></td>
        </tr>
        <tr>
            <td>product type:</td>
            <td>
            <select name="recomented">
                <option value="">type</option>
                <option value="1">recomented</option>
                <option value="0">non recomented</option>
                
            </select>
        </td>
        </tr>
        	<tr>
				<td></td>
			<td>
				<input type="submit" name="submit" value="submit">
				<input type="reset" name="reset" value="cancel">
			</td>
		</tr>

	</table>



</form>
</body>
</html>