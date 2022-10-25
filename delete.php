<?php

include_once('connection.php');

if($_GET['id'])
{
    $user_id=$_GET['id'];

    $sql = "DELETE FROM item WHERE item_code = '$user_id'"; 

    $result = mysqli_query($connection, $sql);

    if($result){
        header("location:edit.php");
    }
}


?>