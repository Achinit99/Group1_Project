<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('Location:login.php');
}

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

      bottom: 0;
      width: 100%;

    }
  </style>
</head>


<body style="background-color: cadetblue" class="mr-3">
  <nav class="navbar navbar-light bg-warning ">
    <a class="navbar-brand" href="#">
      <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" ">
    STORE NAME
  </a>
  <div class=" d-flex justify-content-center">
      
      <button type=" button" class="btn btn-outline-dark me-3"><a href="download.php" style="color:black;text-decoration:none" ;>REPORT</a><i class="bi bi-box-arrow-down ms-2"></i></button>
      <button type=" button" class="btn btn-outline-dark me-3"><i class="bi bi-gear"></i></button>
      <button type=" button" class="btn btn-outline-dark me-3"><a href="logout.php" style="color:black;text-decoration:none" ;><i class="bi bi-box-arrow-right "></i></a></button>
      
      </div>


  </nav>

  
 
  <!-- new table start -->

  <div class="container">


    <!-- new -->
  <div class="row">
  <div class="col-sm-4">
    <div class="card my-4">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card my-4">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card my-4">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>




<!-- new end -->

<div class="mt-5"">
  <h2 class=" text-center text-white" style="font-size: 2rem; text-align: center; color: #fff">
    Available Products
    </h2>
  </div>



    <table id="example" class="table table-striped" style="width:100%" border="1px"">
    <thead>
      <tr>
        <th>Item No</th>
        <th>Item Name</th>
        <th>Catagory</th>
        <th>Unit Price</th>
        <th>Sell Price</th>
        <th>Quantity</th>
        <th></th>
        
      </tr>
    </thead>


    <?php
    $tot = 0;
    $tot2=0;
    $fullqun = 0;
    while ($res = mysqli_fetch_assoc($result)) {


      $fullqun = $res['selling_price'] * $res['quantity'];
      $tot = $tot + $fullqun;

      $fullqum2=$res['unit_price'] *$res['quantity'];
      $tot2=$tot2+$fullqum2;

    ?>
      <tr>
        <td><?php echo $res['item_code']; ?></td>
        <td><?php echo $res['item_name']; ?></td>
        <td><?php echo $res['category']; ?></td>
        <td><?php echo $res['unit_price']; ?></td>
        <td><?php echo $res['selling_price']; ?></td>
        <td><?php echo $res['quantity']; ?></td>
        <td><button type="button" class="btn btn-outline-danger "><i class="bi bi-pencil"></i></button></td>

        
        
      </tr>
    <?php
    }

    ?>

  </table>

  <div class="row">
  <div class="col-sm-6">
    <div class="card my-4 text-white" style="background-color: cadetblue">
      <div class="card-body">
        <h5 class="card-title">Total Revenue Sell :</h5>
        <?php
          echo "RS: " . $tot;
          ?>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
  <div class="card my-4 text-white"style="background-color: cadetblue" >
      <div class="card-body">
        <h5 class="card-title">Total Cost For Items  </h5>
        <?php
          echo "RS:  " . $tot2;
          ?>
      </div>
    </div>
  </div>
  </div>

  </div>
  <!-- new table end -->
  <script src=" https://code.jquery.com/jquery-3.5.1.js">
  </script>
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

      <!-- <button type="button" class="btn btn-outline-dark mx-4"><a href="logout.php" style="color:red;text-decoration:none;">LOGOUT<i class="bi bi-box-arrow-right ms-2"></i></button>
    </div> -->
    <!-- Copyright -->
  </footer>
  </div>




</body>

</html>