<?php
include_once('connection.php');
if (isset($_POST['update'])) {

    $name = $_POST['iname'];
    $Category = $_POST['cat'];
    $unitprice = $_POST['uprice'];
    $sellingprice = $_POST['sprice'];
    $quantity = $_POST['qt'];
    $id = $_POST['icode'];


    $query2 = "UPDATE item SET item_name='$name', category='$Category', unit_price='$unitprice',selling_price='$sellingprice', quantity='$quantity' EHERE item_code = '$id'";
    $query_run= mysqli_query($connection,$query2);


    if($query_run)
    {

    }

    else
    {
        echo "ERROR";
    }
}




?>