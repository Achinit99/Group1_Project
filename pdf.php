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
    .foo {
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>


<body>

  

  <div class="mt-4"">
  <h2 class=" text-center" style="font-size: 2rem; text-align: center; color: black">
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
  <script src=" https://code.jquery.com/jquery-3.5.1.js">
      </script>
      <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  
  </div>



</body>

</html>