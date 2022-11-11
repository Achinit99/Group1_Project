<?php
include_once('connection.php');

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="shop.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">




    <title>NIBM GROUP 01</title>
    <style>
        .con{
            margin-top: 100px;
            align-items: center;
            align-content: center;

        
        }
       
    </style>
</head>

<body>


    <nav class="navbar fixed-top navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="logo2.png" height="70px" width="70px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end navmobile" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active h5 mx-2" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link h5" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link h5" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="bi bi-cart-check-fill h5"></i></a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="user.jpg" class="rounded-circle" height="25px" width="25px" alt="Cinque Terre">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="customerprofile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="customerprofile.php">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">LOG OUT</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <form class="d-flex">
                            <input class="form-control bg-dark border-0 me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-dark" type="submit">Search</button>
                        </form>
                    </li>

                </ul>


            </div>
        </div>
    </nav>


 <div class="con mx-1 ">
    <div class="c2 d-flex justify-content-center">

<div id="myBtnContainer ">
  <button class="btn active btn-secondary" onclick="filterSelection('all')"> Show all</button>
  <button class="btn btn-secondary" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn btn-secondary" onclick="filterSelection('animals')"> Animals</button>
  <button class="btn btn-secondary" onclick="filterSelection('fruits')"> Fruits</button>
  <button class="btn btn-secondary" onclick="filterSelection('colors')"> Colors</button>
</div>

    </div>


<!-- product start -->


<div class="container my-2">
<?php
$select = mysqli_query($connection, "SELECT * FROM item");
?>
<section style="background-color: #eee;">
  <div class="prosec">
    <div class="container py-5">

      <div class="row">
        <?php
        while($row=mysqli_fetch_assoc($select)) {  
        ?>
          <div class="col-md-12 col-lg-4 mb-4 mb-lg-0 my-3">
           <?php echo" <div class='card filterDiv cars'> "?>
              <div class="d-flex justify-content-between p-3">
                <p class="lead mb-0">Today's Combo Offer</p>
                <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong" style="width: 35px; height: 35px;">
                  <a href="#" class="text-white mb-0 small"><i class="bi bi-cart-plus-fill"></i></a>
                </div>
              </div>
              <?php echo "<img src='uploaded_img/" . $row['image'] . "' >"; ?>
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <p class="small"><a href="#!" class="text-muted"><?php echo $row['manufacturer']; ?></a></p>
                  <p class="small text-danger"><s>$1099</s></p>
                </div>

                <div class="d-flex justify-content-between mb-3">
                  <h5 class="mb-0"><?php echo $row['item_name']; ?></h5>
                  <h5 class="text-dark mb-0"><?php echo $row['selling_price']; ?></h5>
                </div>

                <div class="d-flex justify-content-between mb-2">
                  <p class="text-muted mb-0">Available: <span class="fw-bold"><?php echo $row['quantity']; ?></span></p>
                  <div class="ms-auto text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>


      </div>
    </div>
</section>
</div>

</div>


</div>
    <!-- 
section end -->



    <dic class="foo"></dic>


    <!-- Footer -->
    <footer class="text-center text-lg-start  text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Alpha Computer
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> Kurunegala , Sri Lanka</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@alpha.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
        <div class="fooend">
            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2022 Copyright GROUP 1 NIBM SE

            </div>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">



</body>

</html>