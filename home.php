<?php

session_start();
if (!isset($_SESSION['user'])) {
  include_once('header2.php');
    // header('Location:login.php');

}
else{
    $adname=$_SESSION['user'];
    include_once('header.php');
}


include_once('connection.php');


?>



<!doctype html>
<html lang="en">


<div class="con">

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="1.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="2.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="3.jpeg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <!-- card start -->




  <div class="container-fluid ">
    <section>

      <div class="row my-3">
        <div class=" col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card ">
            <div class="card-body">
              <div class="d-flex px-md-1">
                <div class="align-self-center">
                  <i class="bi bi-truck h1 mx-3"></i>
                </div>
                <div class="text-center mx-3">
                  <h5>FAST DELIVERY</h5>
                  <P>Island wide Delivery</P>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex px-md-1">
                <div class="align-self-center">
                  <i class="bi bi-credit-card h1 mx-3"></i>
                </div>
                <div class="text-center mx-3">
                  <h5>SAFE PAYMENT</h5>
                  <P>100% secure payment</P>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex px-md-1">
                <div class="align-self-center">
                  <i class="bi bi-safe h1 mx-3"></i>
                </div>
                <div class="text-center mx-3">
                  <h5>SHOP SAFELY</h5>
                  <P>World's No1 IT Brands</P>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex px-md-1">
                <div class="align-self-center">
                  <i class="bi bi-people-fill h1 mx-3"></i>
                </div>
                <div class="text-center mx-3">
                  <h5>FRIENDLY SERVICE</h5>
                  <P>Messaging Help Center</P>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>


  <!-- card end -->




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


            for ($i = 0; $i < 6; $i++) {
              $row = mysqli_fetch_assoc($select);
            ?>


              <div class="col-md-12 col-lg-4 mb-4 mb-lg-0 my-3">
                <div class="card">
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



  <!-- new 2 start -->
  <div class="c2">
    <div class='container-fluid mx-auto mt-5 mb-5 col-12' style="text-align: center">
      <h3>
        <div class="hd">Why People Believe in Us</div>
      </h3>
      <p><small class="text-muted">Always render more and better service than <br />is expected of you, no matter what your ask may be.</small></p>
      <div class="row" style="justify-content: center">
        <div class="card col-md-4 col-12 mx-2">
          <div class="card-content">
            <div class="card-body"> <img class="img" src="https://i.imgur.com/S7FJza5.png" />
              <div class="shadow"></div>
              <div class="card-title"> We're Free </div>
              <div class="card-subtitle">
                <p> <small>We spent thousands of hours creating on algorithm that does this for you in seconds. We collect a small fee from the professional after they meet your</small> </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card col-md-3 col-12 ml-2">
          <div class="card-content">
            <div class="card-body"> <img class="img" src="https://i.imgur.com/xUWJuHB.png" />
              <div class="card-title"> We're Unbiased </div>
              <div class="card-subtitle">
                <p> <small> We don't accept ads from anyone. We use actual data to match you who the best person for each job </small> </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card col-md-4 col-12 ml-2 mx-2">
          <div class="card-content">
            <div class="card-body"> <img class="img rck" src="https://i.imgur.com/rG3CGn3.png" />
              <div class="card-title"> We Guide you </div>
              <div class="card-subtitle">
                <p> <small>Buying or selling a home is often the largest transaction anyone does in their life. we guide you through the process so that you can be confident in reaching your dream outcome.</small> </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- new 3 end -->




  <!-- new section strat -->



  <h3>Customer reviews</h3>

  <div class="accordion d-flex justify-content-center align-items-center height" id="accordionExample">


    <div class="row">

      <div class="col-md-6 ">

        <div class="p-3 ">

          <ul class="testimonial-list">
            <li>

              <div class="card p-3 my-2" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                <div class="d-flex flex-row align-items-center">

                  <img src="https://i.imgur.com/udGH5tO.jpg" width="50" class="rounded-circle">

                  <div class="d-flex flex-column ml-2 mx-4">

                    <span class="font-weight-normal">Achini Thathsarani</span>
                    <span>Kurunegala, Sri lanaka</span>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="card p-3 my-2" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                <div class="d-flex flex-row align-items-center">

                  <img src="https://i.imgur.com/G1pXs7D.jpg " width="50" class="rounded-circle">

                  <div class="d-flex flex-column ml-2 mx-4">

                    <span class="font-weight-normal">Avishka Supun</span>
                    <span>Kurunegala, Sri lanakaa</span>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="card p-3 my-2" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                <div class="d-flex flex-row align-items-center">

                  <img src="https://i.imgur.com/Uz4FjGZ.jpg" width="50" class="rounded-circle">

                  <div class="d-flex flex-column ml-2 mx-4">

                    <span class="font-weight-normal">Luke Harper</span>
                    <span>Sales Team Lead,Sketch</span>

                  </div>

                </div>

              </div>
            </li>

          </ul>
        </div>
      </div>

      <div class="col-md-6">
        <div class="p-3 testimonials-margin">
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <h4>It was a great experience</h4>
              <div class="ratings">

                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>


              </div>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
          </div>

          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              <h4>Thanks for this great service</h4>
              <div class="ratings">

                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>

              </div>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
          </div>

          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <h4>You all are awesome thanks alot</h4>
              <div class="ratings">

                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>

              </div>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

  </div>


  <!-- new section end -->






  <!-- brand start -->

  

  <div class="container-fluid ">
    <section>

      <div class="row my-3">
        <div class=" col-xl-2 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body bg-light">
              <div class="d-flex px-md-1">
                <div class="align-self-center">
                  <!-- <i class="bi bi-truck h1 mx-3"></i> -->
                </div>
                <div class="text-center mx-3">
                <!-- <i class="bi bi-truck h1 mx-3"></i> -->
                <img src="asuz.png" width="100px" height="35px" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body bg-light">
              <div class="d-flex px-md-1">
                <div class="align-self-center"> 
                </div>
                <div class="text-center mx-3">
                  <img src="dell.png" width="100px" height="35px" alt="">  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body bg-light">
              <div class="d-flex px-md-1">
                <div class="align-self-center"> 
                </div>
                <div class="text-center mx-3">
                  <img src="hp.png" width="50px" height="35px" alt="">  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body bg-light">
              <div class="d-flex px-md-1">
                <div class="align-self-center"> 
                </div>
                <div class="text-center mx-3">
                  <img src="acer.png" width="100px" height="35px" alt="">  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body bg-light">
              <div class="d-flex px-md-1">
                <div class="align-self-center"> 
                </div>
                <div class="text-center mx-3">
                  <img src="lenovo.png" width="100px" height="35px" alt="">  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body bg-light">
              <div class="d-flex px-md-1">
                <div class="align-self-center"> 
                </div>
                <div class="text-center mx-3">
                  <img src="Kingston.png" width="150px" height="35px" alt="">  
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>


  <!-- brand end -->





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

</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">



</body>

</html>