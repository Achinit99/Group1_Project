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
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
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



    <!-- section start -->


<div class="cn">
    <div class="container-fluid mt-5 mb-5">
        <div class="row g-2">
            <div class="col-md-3">
                <div class="t-products p-2">
                    <h6 class="text-uppercase">Computer & Periferals</h6>
                    <div class="p-lists">
                        <div class="d-flex justify-content-between mt-2"> <span>Laptops</span> <span>23</span> </div>
                        <div class="d-flex justify-content-between mt-2"> <span>Desktops</span> <span>46</span> </div>
                        <div class="d-flex justify-content-between mt-2"> <span>Monitors</span> <span>13</span> </div>
                        <div class="d-flex justify-content-between mt-2"> <span>Mouse</span> <span>33</span> </div>
                        <div class="d-flex justify-content-between mt-2"> <span>Keyboard</span> <span>12</span> </div>
                        <div class="d-flex justify-content-between mt-2"> <span>Printer</span> <span>53</span> </div>
                        <div class="d-flex justify-content-between mt-2"> <span>Mobiles</span> <span>203</span> </div>
                        <div class="d-flex justify-content-between mt-2"> <span>CPU</span> <span>23</span> </div>
                    </div>
                </div>
                <div class="processor p-2">
                    <div class="heading d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Processor</h6> <span>--</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Intel Core i7 </label> </div> <span>3</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Intel Core i6 </label> </div> <span>4</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Intel Core i3 </label> </div> <span>14</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Intel Centron </label> </div> <span>8</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Intel Pentinum </label> </div> <span>14</span>
                    </div>
                </div>
                <div class="brand p-2">
                    <div class="heading d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Brand</h6> <span>--</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Apple </label> </div> <span>13</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Asus </label> </div> <span>4</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Dell </label> </div> <span>24</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Lenovo </label> </div> <span>18</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Acer </label> </div> <span>44</span>
                    </div>
                </div>
                <div class="type p-2 mb-2">
                    <div class="heading d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Type</h6> <span>--</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Hybrid </label> </div> <span>23</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Laptop </label> </div> <span>24</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Desktop </label> </div> <span>14</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Touch </label> </div> <span>28</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Tablets </label> </div> <span>44</span>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row g-2">
                    <div class="col-md-4">
                        <div class="product py-4"> <span class="off bg-success">-25% OFF</span>
                            <div class="text-center"> <img src="https://i.imgur.com/nOFet9u.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>XRD Active Shoes</h5> <span>$1,999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4"> <span class="off bg-warning">SALE</span>
                            <div class="text-center"> <img src="https://i.imgur.com/VY0R9aV.png" width="200"> </div>
                            <div class="about text-center">
                                <h5>Hygen Smart watch </h5> <span>$123.43</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4">
                            <div class="text-center"> <img src="https://i.imgur.com/PSGrLdz.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Acer surface book 2.5</h5> <span>$1,999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4"> <span class="off bg-success">-10% OFF</span>
                            <div class="text-center"> <img src="https://i.imgur.com/OdRSpXG.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Dell XPS Surface</h5> <span>$1,245.89</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4">
                            <!-- <span class="off bg-success">-25% OFF</span> -->
                            <div class="text-center"> <img src="https://i.imgur.com/X2AwTCY.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Acer surface book 5.5</h5> <span>$2,999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="product py-4"> <span class="off bg-success">-5% OFF</span>
                            <div class="text-center"> <img src="https://i.imgur.com/QQwcBpF.png" width="200"> </div>
                            <div class="about text-center">
                                <h5>Xps smart watch 5.0</h5> <span>$999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4"> <span class="off bg-warning">SALE</span>
                            <div class="text-center"> <img src="https://i.imgur.com/PSGrLdz.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Acer surface book 8.5</h5> <span>$3,999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4">
                            <div class="text-center"> <img src="https://i.imgur.com/m22OQy9.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Tyko Running shoes</h5> <span>$99.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4">
                            <div class="text-center"> <img src="https://i.imgur.com/OdRSpXG.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Dell surface book 5</h5> <span>$1,999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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