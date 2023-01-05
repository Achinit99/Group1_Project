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

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .single_product{
            margin-top: 6.5%;
        }
    </style>
</head>


    <div class="single_product">
        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
            <div class="row mx-4">
                <!-- <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg" alt=""></li>
                        <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_2.jpg"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_2.jpg" alt=""></li>
                        <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_3.jpg"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_3.jpg" alt=""></li>
                    </ul>
                </div> -->
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="image_selected"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg" alt=""></div>
                </div>



                <div class="col-lg-6 order-3 mt-5">
                    <!-- product title -->
                    <div class="product_name">MacBook Air M1 2020 8GB 256GB Silver</div>
                    <div class="product-rating"><span class="badge badge-success text-warning"><i class="bi bi-star-fill text-warning"></i> 4.5 Star</span> <span class="rating-review">35 Ratings & 45 Reviews</span></div>
                    <div> <span class="product_price">RS: 340,000</span> <strike class="product_discount"> <span style='color:black'>RS: 360,000<span> </strike> </div>
                    <div> <span class="product_saved">You Saved:</span> <span style='color:black'>RS: 20,000<span> </div>
                    <hr class="singleline">
                    <!-- product description -->
                    <p>MaBook Air M2 - Technical Specifications · 13.6-inch (diagonal) LED-backlit display with IPS technology; 2560-by-1664 native resolution at 224 pixels per inch . </p>
                    <div>
                        <div class="row">
                            <div class="col-md-5">
                            <button type="button" class="btn btn-warning"><i class="bi bi-tags mx-2"></i>5% Discount</button>    
                            </div>
                        </div>

                    </div>
                    <hr class="singleline">
                    <div class="row my-3">
                        <div class="col-xs-6">
                            <div class="product_quantity"> <span>QTY: </span> <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                            </div>
                        </div>
                        <div class="col-xs-6"> <button type="button" class="btn btn-primary shop-button">Add to Cart</button> <button type="button" class="btn btn-success shop-button">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <h2>Related Products</h2>



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

</body>

</html>