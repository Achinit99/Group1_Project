<?php

session_start();
if (!isset($_SESSION['user'])) {
  include_once('header2.php');
    

}
else{
    $adname=$_SESSION['user'];
    include_once('header.php');
}

$id =0;

include_once('connection.php');

if (isset($_POST['item_code'])) {

    $id = $_POST['item_code'];
    

    $query = "SELECT * FROM item WHERE item_code = $id";
    $query_run = mysqli_query($connection,$query);
    



}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .single_product{
            margin-top: 6.5%;
        }

        .related
        {
          margin: 30px;
        }

        
    </style>
</head>


    <div class="single_product">
        <div class="container-fluid" style=" background-color: #fff; padding: 20px;">
            <div class="row mx-4">
                <!-- <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg" alt=""></li>
                        <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_2.jpg"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_2.jpg" alt=""></li>
                        <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_3.jpg"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_3.jpg" alt=""></li>
                    </ul>
                </div> -->


  <?php

while($row=mysqli_fetch_assoc($query_run)) {  
   $idprice =$row['selling_price']+10000; 
   $saved_price = $idprice - $row['selling_price'];
   
?>
                <div class="col-lg-6 ">
                    <div class="image_selected"><?php echo "<img height='400px' src='uploaded_img/" . $row['image'] . "' > "; ?></div>
                </div>


                <div class="col-lg-6 order-3 mt-5">
                    <!-- product title -->
                    <div class="product_name"><?php echo $row['item_name']; ?></div>
                    <div class="product-rating"><span class="badge badge-success text-warning"><i class="bi bi-star-fill text-warning"></i> 4.5 Star</span> <span class="rating-review">35 Ratings & 45 Reviews</span></div>
                    <div> <span class="product_price"><?php echo "RS. ".number_format($row['selling_price'],2); ?></span> <strike class="product_discount"> <span style='color:black'><?php echo "RS. ".$idprice?><span> </strike> </div>
                    <div> <span class="product_saved">You Saved:</span> <span style='color:black'><?php echo "RS. ".$saved_price?><span> </div>
                    <hr class="singleline">
                    <!-- product description -->
                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be</p>
                    
                    <div>
                        <div class="row">
                            <div class="col-md-5">
                            <button type="button" class="btn btn-warning"><i class="bi bi-tags mx-2"></i>5% Discount</button>    
                            </div>
                        </div>

                        
                    </div>
                    <hr class="singleline">
                    <div class="row my-3">

        <form method="post" action="cart.php?action=add&item_code=<?php echo $row["item_code"]; ?>">
                <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btn btn-success editbtn mx-2" /></div>      
        </form>
                    </div>
                </div>
                
            </div>
            <div class="related">
            <h2 >Related Products</h2>


  <!-- product start -->


  <div class="container my-2" style="background-color:  #fff;">



<?php

$select = mysqli_query($connection, "SELECT * FROM item");

?>


<section style="background-color:  #fff;">
  <div class="prosec">
    <div class="container py-5 " style="background-color:  #fff;">

      <div class="row">



        <?php


        for ($i = 0; $i < 3; $i++) {
          $row = mysqli_fetch_assoc($select);
        ?>


          <div class="col-md-12 col-lg-4 mb-4 mb-lg-0 my-3">
            <div class="card">
              <div class="d-flex justify-content-between p-3">
                <p class="lead mb-0">Today's Combo Offer</p>
                <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong" style="width: 35px; height: 35px;">


                <form method="post" action="singleproduct.php">
            <input type="hidden" name="item_code" value="<?php echo $row['item_code']; ?>">
            <div class="cart-action"><button type="submit" value="" class="btn btn-success editbtn" /><i class="bi bi-view-list"></i> </button></div>      
        </form>

    
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
                  <h5 class="text-dark mb-0"><?php echo "RS. ", number_format($row['selling_price'],2); ?></h5>
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
        <?php } ?>





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