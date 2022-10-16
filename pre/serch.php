<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php


if (isset($_POST["submit"])) 
{
	$str = $_POST["search"];
	$sth = $conn->prepare("SELECT * FROM `products` WHERE Name = '$str'");

	
	$sth->execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Name</th>
				<th>Description</th>
			</tr>
			<tr>
				<td><img src="<?php echo $row['image']; ?>" height="100" alt=""></td>
				<h3><?php echo $row['name']; ?></h3>
			</tr>

		</table>
<?php 

	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>
