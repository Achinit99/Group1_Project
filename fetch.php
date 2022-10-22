<?php
include_once('connection.php');

$query = "SELECT * FROM item WHERE item_code='".$_POST["itemCode"]."'";
$result = mysqli_query($connection, $query);
$jsonData=mysqli_fetch_array($result);
echo json_encode($jsonData);

?>