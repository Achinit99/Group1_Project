<?php
include_once('connection.php');

$query = "SELECT item_code, item_name, category, unit_price, selling_price, quantity FROM item";
$query2 = "SELECT quantity FROM stock";

$result = mysqli_query($connection, $query);
$result2 = mysqli_query($connection, $query2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
  <link rel="stylesheet" href="style2.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>DataTable</title>

  <style>
    .foo{
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>


<body  style="background-color: cadetblue"  class="mr-3">

<nav class="navbar navbar-light bg-warning " >

  <a class="navbar-brand" href="#" >
    <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" ">
    ACHINI STORE
  </a>
  <button type="button" class="btn btn-outline-dark mx-4" >REPORT <i class="bi bi-box-arrow-down"></i></button>
  
</nav>

<div class="mt-4"">
  <h2 class="text-center" style="font-size: 2rem; text-align: center; color: #fff">
    Available Products
  </h2>
</div>

  <!-- new table start -->

  <div class="container">
  <table id="example" class="table table-striped" style="width:100%" border="1px"">
    <thead>
      <tr>
        <th>Item No</th>
        <th>Item Name</th>
        <th>Catagory</th>
        <th>Unit Price</th>
        <th>Sell Price</th>
        <th>Quantity</th>
      </tr>
    </thead>


    <?php while ($res = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $res['item_code']; ?></td>
        <td><?php echo $res['item_name']; ?></td>
        <td><?php echo $res['category']; ?></td>
        <td><?php echo $res['unit_price']; ?></td>
        <td><?php echo $res['selling_price']; ?></td>
        <td><?php echo $res['quantity']; ?></td>
      </tr>
    <?php }  ?>

  </table>
  </div>
  <!-- new table end -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>



<footer class="bg-light text-center text-lg-start foo">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright: ACHINI T720
    
  </div>
  <!-- Copyright -->
</footer>
</div>
</body>

</html>