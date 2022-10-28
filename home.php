<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="homestyle.css" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>



<!-- 
    <nav class="navbar navbar-expand-lg bg-danger navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="bi bi-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <i class="bi bi-arrow-clockwise" mx-0></i>
                </div>
            </div>
        </div>
    </nav>
   



    <nav class="navbar navbar-expand-lg navbar-light bg-dark py-3" >
        <div class="container-fluid ">
            <h1><a class="navbar-brand text-white mx-5" href="#">GROUP1</a></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white mx-3" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mx-3" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-white mx-3" href="#" tabindex="-1" aria-disabled="true">About</a>
                    </li>
                </ul>
                <form class="d-flex">
                    
                    <i class="bi bi-bell mx-3 text-white"></i>
                    <a href="cart.php"><i class="bi bi-cart text-white mx-2"></i></a>
                </form>
            </div>
        </div>
    </nav>


    </form>
    </div>
    </nav>
 -->





 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active h5" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h5" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-bag-heart h5"></i></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="user.jpg" class="rounded-circle" height="25px" width="25px" alt="Cinque Terre">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">LOG OUT</a></li>
          </ul>
        </li>
        
        <!-- <li class="nav-item">
        <i class="bi bi-bell text-black"></i>
        </li> -->
                    

      </ul>
    
      <form class="d-flex">
  
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>

        <!-- <i class="bi bi-bell text-white"></i>
                    <a href="cart.php"><i class="bi bi-cart text-black "></i></a> -->
      </form>
    
    </div>
  </div>
</nav>




 <!-- Carousel wrapper -->
<div id="carouselMaterialStyle" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true"
      aria-label="Slide 1"></button>
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner rounded-5 shadow-4-strong">
    <!-- Single item -->
    <div class="carousel-item active">
      <img src="1.jpeg" class="d-block w-100"
        alt="Sunset Over the City" />
      <div class="carousel-caption d-none d-md-block">
        <h2>First slide label</h2>
        <button type="button" class="btn btn-primary btn-lg">Large button</button>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="1.jpeg" class="d-block w-100"
        alt="Canyon at Nigh" />
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="1.jpeg" class="d-block w-100"
        alt="Cliff Above a Stormy Sea" />
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->






    <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
            <p class="lead mb-0">Today's Combo Offer</p>
            <div
              class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
              style="width: 35px; height: 35px;">
              <p class="text-white mb-0 small">x4</p>
            </div>
          </div>
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
            class="card-img-top" alt="Laptop" />
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
              <p class="small text-danger"><s>$1099</s></p>
            </div>

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0">HP Notebook</h5>
              <h5 class="text-dark mb-0">$999</h5>
            </div>

            <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
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
      <div class="col-md-6 col-lg-4 mb-4 mb-md-4">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
            <p class="lead mb-0">Today's Combo Offer</p>
            <div
              class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
              style="width: 35px; height: 35px;">
              <p class="text-white mb-0 small">x2</p>
            </div>
          </div>
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/7.webp"
            class="card-img-top" alt="Laptop" />
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
              <p class="small text-danger"><s>$1199</s></p>
            </div>

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0">HP Envy</h5>
              <h5 class="text-dark mb-0">$1099</h5>
            </div>

            <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Available: <span class="fw-bold">7</span></p>
              <div class="ms-auto text-warning">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-md-4">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
            <p class="lead mb-0">Today's Combo Offer</p>
            <div
              class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
              style="width: 35px; height: 35px;">
              <p class="text-white mb-0 small">x3</p>
            </div>
          </div>
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/5.webp"
            class="card-img-top" alt="Gaming Laptop" />
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
              <p class="small text-danger"><s>$1399</s></p>
            </div>

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0">Toshiba B77</h5>
              <h5 class="text-dark mb-0">$1299</h5>
            </div>

            <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Available: <span class="fw-bold">5</span></p>
              <div class="ms-auto text-warning">
                <i class="fa fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-md-4">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
            <p class="lead mb-0">Today's Combo Offer</p>
            <div
              class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
              style="width: 35px; height: 35px;">
              <p class="text-white mb-0 small">x2</p>
            </div>
          </div>
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/7.webp"
            class="card-img-top" alt="Laptop" />
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
              <p class="small text-danger"><s>$1199</s></p>
            </div>

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0">HP Envy</h5>
              <h5 class="text-dark mb-0">$1099</h5>
            </div>

            <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Available: <span class="fw-bold">7</span></p>
              <div class="ms-auto text-warning">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

       
    </div>
  </div>
</section>









<!-- new product list start -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<div class="trends">
    <div class="bbb_background"></div>
    <div class="bbb_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="bbb_container">
                    <h2 class="bbb_title">Latest Products 2019</h2>
                    <div class="bbb_text">
                        <p>Find the latest products in 2019</p>
                    </div>
                    <div class="bbb_slider_nav">
                        <div class="bbb_prev bbb_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                        <div class="bbb_next bbb_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="bbb_slider_container">
                    <div class="owl-carousel owl-theme bbb_slider">
                        <div class="owl-item">
                            <div class="bbb_item is_new">
                                <div class="bbb_image d-flex flex-column align-items-center justify-content-center"><img src="https://i.imgur.com/9XOqCSE.jpg" alt=""></div>
                                <div class="bbb_content">
                                    <div class="bbb_category"><a href="#">Smart Phones</a></div>
                                    <div class="bbb_info clearfix">
                                        <div class="bbb_name"><a href="#">Alcatel Mobile</a></div>
                                        <div class="bbb_price">₹13790</div>
                                    </div>
                                </div>
                                <ul class="bbb_marks">
                                    <li class="bbb_mark bbb_discount">-25%</li>
                                    <li class="bbb_mark bbb_new">new</li>
                                </ul>
                                <div class="bbb_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_item">
                                <div class="bbb_image d-flex flex-column align-items-center justify-content-center"><img src="https://i.imgur.com/PIX2bzP.jpg" alt=""></div>
                                <div class="bbb_content">
                                    <div class="bbb_category"><a href="#">LED TV</a></div>
                                    <div class="bbb_info clearfix">
                                        <div class="bbb_name"><a href="#">MI LED</a></div>
                                        <div class="bbb_price">₹33790</div>
                                    </div>
                                </div>
                                <ul class="bbb_marks">
                                    <li class="bbb_mark bbb_discount">-25%</li>
                                    <li class="bbb_mark bbb_new">new</li>
                                </ul>
                                <div class="bbb_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_item is_new">
                                <div class="bbb_image d-flex flex-column align-items-center justify-content-center"><img src="https://i.imgur.com/GEvakkz.jpg" alt=""></div>
                                <div class="bbb_content">
                                    <div class="bbb_category"><a href="#">Mobile Phones</a></div>
                                    <div class="bbb_info clearfix">
                                        <div class="bbb_name"><a href="#">MI Mobile</a></div>
                                        <div class="bbb_price">₹13079</div>
                                    </div>
                                </div>
                                <ul class="bbb_marks">
                                    <li class="bbb_mark bbb_discount">-25%</li>
                                    <li class="bbb_mark bbb_new">new</li>
                                </ul>
                                <div class="bbb_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_item is_new">
                                <div class="bbb_image d-flex flex-column align-items-center justify-content-center"><img src="https://i.imgur.com/u94q4wq.jpg" alt=""></div>
                                <div class="bbb_content">
                                    <div class="bbb_category"><a href="#">Power Bank</a></div>
                                    <div class="bbb_info clearfix">
                                        <div class="bbb_name"><a href="#">MI Powerbank</a></div>
                                        <div class="bbb_price">₹2379</div>
                                    </div>
                                </div>
                                <ul class="bbb_marks">
                                    <li class="bbb_mark bbb_discount">-25%</li>
                                    <li class="bbb_mark bbb_new">new</li>
                                </ul>
                                <div class="bbb_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_item">
                                <div class="bbb_image d-flex flex-column align-items-center justify-content-center"><img src="https://i.imgur.com/u94q4wq.jpg" alt=""></div>
                                <div class="bbb_content">
                                    <div class="bbb_category"><a href="#">Power Bank</a></div>
                                    <div class="bbb_info clearfix">
                                        <div class="bbb_name"><a href="#">HP Powerbank</a></div>
                                        <div class="bbb_price">₹3379</div>
                                    </div>
                                </div>
                                <ul class="bbb_marks">
                                    <li class="bbb_mark bbb_discount">-25%</li>
                                    <li class="bbb_mark bbb_new">new</li>
                                </ul>
                                <div class="bbb_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_item is_new">
                                <div class="bbb_image d-flex flex-column align-items-center justify-content-center"><img src="https://i.imgur.com/f2rCLOO.jpg" alt=""></div>
                                <div class="bbb_content">
                                    <div class="bbb_category"><a href="#">Mobile Phones</a></div>
                                    <div class="bbb_info clearfix">
                                        <div class="bbb_name"><a href="#">Gionee phone</a></div>
                                        <div class="bbb_price">₹10379</div>
                                    </div>
                                </div>
                                <ul class="bbb_marks">
                                    <li class="bbb_mark bbb_discount">-25%</li>
                                    <li class="bbb_mark bbb_new">new</li>
                                </ul>
                                <div class="bbb_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- new product list end -->















    

    <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright: Group 1
    
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">



</body>

</html>