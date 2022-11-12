<?php
include_once('connection.php');

include_once('header.php');

?>

<!doctype html>
<html lang="en">

     
    <style>
        .con{
            margin-top: 100px;
            align-items: center;
            align-content: center; 
        }
       
    </style>


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