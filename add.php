<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:login.php');

}
else{
    $adname=$_SESSION['user'];
}

include_once('connection.php');


if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_Category = $_POST['product_Category'];
   $product_unitprice = $_POST['product_unitprice'];
   $product_sellingprice = $_POST['product_sellingprice'];
   $product_manufacture = $_POST['product_manufacture'];
   $product_capacity = $_POST['product_capacity'];
   $product_quantity = $_POST['product_quantity'];

   
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_Category) || empty($product_unitprice) || empty($product_sellingprice) || empty($product_manufacture) || empty( $product_quantity)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO item(item_name, category, manufacturer,capcity, unit_price,selling_price,quantity,image) VALUES('$product_name', '$product_Category', '$product_manufacture', '$product_capacity', '$product_unitprice', '$product_sellingprice', '$product_quantity', '$product_image')";
      $upload = mysqli_query($connection,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($connection, "DELETE FROM item WHERE id = $id");
   header('location:admin_page.php');
};


include_once('dashtemp.php');

?>






<!DOCTYPE html>

<u><h6 class="text-danger mx-4 mt-3">Admin / Add Product</h6></u> 

           <!-- add product -->
           <div class="container-fluid pt-2 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add Product</h6>
                            <?php

                            if(isset($message)){
                            foreach($message as $msg){
                            echo '<h6 class="mb-4 text-danger ">'.$msg.'</h6>';

                        }
                    }
                    
                    ?>

                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

                            <div class="input-group mb-3">
                            <span class="input-group-text">@</span>
                                <input type="text" class="form-control" name="product_name" placeholder="Product Name" >
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" name="product_Category" placeholder="Category" aria-label="Server">
                            </div>

                            <div class="input-group mb-3">
                            <span class="input-group-text">@</span>
                                <input type="number" class="form-control" name="product_unitprice" placeholder="Unit Price" >
                                <span class="input-group-text">@</span>
                                <input type="number" class="form-control" name="product_sellingprice" placeholder="Selling Price" >
                            </div>
                            
                            
                               
                                <div class="mb-3">
                                    
                                    <input type="text" class="form-control" name="product_manufacture" placeholder="Manufacture">
                                    <div class="form-text">#Hint:  Add your product Manufacture here.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="product_capacity" placeholder="Capacity">
                                    <div class="form-text">#Hint:  Add your product Capacity here.
                                    </div>
                                </div>


                                <div class="input-group mb-3">
                            <span class="input-group-text">@</span>
                                <input type="number" class="form-control" name="product_quantity" placeholder="Quantity" >
                                <span class="input-group-text">@</span>
                                <input class="form-control bg-dark" type="file" name="product_image">
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Comments</label>
                            </div>
                            
                                
                                <button type="submit" name="add_product"class="btn btn-primary my-4" value="Add a product">Add</button>


                                
                            </form>
                        </div>
                    </div>



                    <!-- Footer Start -->
                    <div class="container-fluid pt-4 px-6">
                        <div class="bg-secondary rounded-top p-4">
                            <div class="row">
                                <div class="col-12 col-sm-6 text-center text-sm-start">
                                    &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                                </div>
                                <div class="col-12 col-sm-6 text-center text-sm-end">
                                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                    Designed By GROUP 1
                
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer End -->
                </div>
                <!-- Content End -->


                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
            </div>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/chart/chart.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/tempusdominus/js/moment.min.js"></script>
            <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
            <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>





            <script src=" https://code.jquery.com/jquery-3.5.1.js">
            </script>
            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#example').DataTable();
                });
            </script>
</body>

</html>