<?php
session_start();
if (!isset($_SESSION['user'])) {
  include_once('header2.php');
    // header('Location:login.php');

}
else{
    $aditem_item_name=$_SESSION['user'];
    include_once('header.php');
}

?>

<?php

require_once("dbcontroller.php");
$db_handle = new DBController();

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM item WHERE item_code='" . $_GET["item_code"] . "'");
			$itemArray = array($productByCode[0]["item_code"]=>array('item_name'=>$productByCode[0]["item_name"], 'item_code'=>$productByCode[0]["item_code"], 'manufacturer'=>$productByCode[0]["manufacturer"], 'quantity'=>$_POST["quantity"], 'selling_price'=>$productByCode[0]["selling_price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["item_code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["item_code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
	}
}


?>

<!DOCTYPE html>



<style>
        
.text1{
  background-color: white;
}
        
</style>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">




<!-- cart start -->


    <section class="h-100 gradient-custom mt-5">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Cart items</h5>
                        </div>




                        <div class="card-body">


                        <!-- test cart st -->

<?php		
$tot = 0;
$total_quantity = 0;


  foreach ($_SESSION["cart_item"] as $item){
    $item_price = $item["quantity"]*$item["selling_price"]; 
  ?>


   
			
              <!-- Single item -->
              <div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                    <!-- Image -->
                                    <?php
                                    $directory = "uploaded_img/"; ?>
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                        <img src="<?php echo $directory.$item['image']; ?>" class="w-100" alt="img" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                    </div>
                                    <!-- Image -->
                                </div>

                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                    <!-- Data -->
                                    <p><strong><?php echo $item["item_name"]; ?></strong></p>
                                    <p><?php echo "Brand: ".$item["manufacturer"]; ?></p>
                                    <!-- <p>Size: M</p> -->
                                    <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remove item">
                                     <a href="cart.php?action=remove&code=<?php echo $item["item_code"]; ?>" class="btnRemoveAction"><i class="bi bi-trash3-fill">Remove Item</i></a>
                                    </button>
                                   
                                    <!-- Data -->
                                </div>

                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <!-- Quantity -->
                                    <div class="d-flex mb-4 " style="max-width: 300px">
                                        <button class="btn btn-dark px-3 me-2" style="max-height: 40px;" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>

                                        <div class="form-outline ">
                                            <input id="form1" min="0" item_name="quantity" value="<?php echo $item["quantity"]; ?>" type="number" class="form-control" />
                                            <label class="form-label" for="form1">Quantity</label>
                                        </div>

                                        <button class="btn btn-dark px-3 ms-2" style="max-height: 40px;" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </div>
                                    <!-- Quantity -->

                                    <!-- selling_price -->
                                    <p class="text-start text-md-center">
                                        <strong><?php echo "RS (Per Unit) . ".number_format($item["selling_price"],2); ?></strong>
                                        
                                    </p>
                                    <!-- selling_price -->
                                </div>
                                <hr>
                            </div>
                            <!-- Single item -->

                            
				<?php
        
        $tot = $tot + $item_price;
        $total_quantity =$total_quantity + $item["quantity"];
				// $total_quantity += $item["quantity"];
				// $total_price += ($item["price"]*$item["quantity"]);
		}
   
		?>

<!-- test cart end -->




                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <p><strong>Expected shipping delivery</strong></p>
                            <p class="mb-0"><?php
                                            // Return current date from the remote server
                                            $date = date('d-m-y');
                                            echo $date;
                                            ?> - 14.10.2020</p>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body">
                            <p><strong>We accept</strong></p>
                            <i class="fa fa-cc-visa" style="font-size:40px;"></i>
                            <i class="fa fa-cc-stripe" style="font-size:40px;"></i>
                            <i class="	fa fa-cc-mastercard" style="font-size:40px;"></i>
                            <i class="fa fa-cc-paypal" style="font-size:40px;"></i>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card mb-4 bg-light">
                        <div class="card-header py-3 bg-light">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body bg-light">
                            <ul class="list-group list-group-flush ">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0 ">
                                    Products
                                    <span><?php echo $total_quantity;?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>Free</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong><?php echo "RS. ". number_format($tot,2) ;?></strong></span>
                                </li>
                            </ul>


                            <form method="post" action="checkout.php">
                            <input type="hidden" name="tot" value="<?php echo $tot ?>">
                            <div class="cart-action"><button type="submit" value="" class="btn btn-primary btn-lg btn-block" /> Go to checkout</button></div>      
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- cart end -->







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