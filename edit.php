<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:login.php');
} else {
    $adname = $_SESSION['user'];
}

include_once('connection.php');

$query = "SELECT item_code, item_name, category, unit_price, selling_price, quantity FROM item";


$result = mysqli_query($connection, $query);

if (isset($_POST['update'])) {

    $id = $_POST['icode'];
    $name = $_POST['iname'];
    $Category = $_POST['cat'];
    $unitprice = $_POST['uprice'];
    $sellingprice = $_POST['sprice'];
    $quantity = $_POST['qt'];



    $upquery = "UPDATE item SET item_name='$name', category='$Category', unit_price='$unitprice',selling_price='$sellingprice', quantity='$quantity' WHERE item_code = '$id'";
    $query_run = mysqli_query($connection, $upquery);

    //         echo "ok";
    //     }

    //     else
    //     {
    //         echo "ERROR";
    //     }


}

if (isset($_GET['del'])) {
    $id = $_GET['icode'];
    $delquary = "DELETE * FROM item WHERE item_code = '$id'";
    mysqli_query($connection, $delquary);
    header('location:edit.php');
};



include_once('dashtemp.php');


?>


<!DOCTYPE html>


<u><h6 class="text-danger mx-4 mt-3">Admin / Edit Product</h6></u> 

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-2 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Products</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0" id="example">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Item No</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Catagory</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Sell Pric</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col"></th>

                                </tr>
                            </thead>

                            <?php
                            $tot = 0;
                            $tot2 = 0;
                            $fullqun = 0;
                            while ($res = mysqli_fetch_assoc($result)) {

                            ?>
                                <tr>
                                    <td><?php echo $res['item_code']; ?></td>
                                    <td><?php echo $res['item_name']; ?></td>
                                    <td><?php echo $res['category']; ?></td>
                                    <td><?php echo $res['unit_price']; ?></td>
                                    <td><?php echo $res['selling_price']; ?></td>
                                    <td><?php echo $res['quantity']; ?></td>
                                    
                                    <th scope="col"><button type="button" class="btn btn-success editbtn" name="edit" id="<?php echo $res['item_code']; ?>">Edit</button>
                                       <?php echo " <a onclick=\"javascript:return confirm('Are you sure: to Delete Data')\" href='delete.php?id={$res['item_code']}'><button type='button' class='btn btn-primary delbtn' name='delete' >
                                            Delete
                                        </button></a> "; ?>

                                        
                                    </th>


                                </tr>
                            <?php
                            }

                            ?>

                        </table>
                    </div>
                </div>
            </div>



            <!-- Recent Sales End -->



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




    <!-- ######################################################################################## -->
    <!-- pop up for update start -->



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="icode" id="icode">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Item Name</label>
                            <input type="text" class="form-control" id="iname" name="iname">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Catagory</label>
                            <input type="text" class="form-control" id="cat" name="cat">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Unit Price</label>
                            <input type="text" class="form-control" id="uprice" name="uprice">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Sell Price</label>
                            <input type="text" class="form-control" id="sprice" name="sprice">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Quantity</label>
                            <input type="text" class="form-control" id="qt" name="qt">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-success editbtn">Update</button>
                </div>
            </div>


            </form>
        </div>
    </div>



    <!-- update popup end -->



    <!-- ######################################################################################## -->



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
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


    <!-- data pass to model for update -->
    <script>
        $(document).ready(function() {

            $(document).on('click', '.editbtn', function() {
                var itemCode = $(this).attr('id');
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data: {
                        itemCode: itemCode
                    },
                    dataType: "json",
                    success: function(data) {

                        $('#icode').val(data.item_code);
                        $('#iname').val(data.item_name);
                        $('#cat').val(data.category);
                        $('#uprice').val(data.unit_price);
                        $('#sprice').val(data.selling_price);
                        $('#qt').val(data.quantity);
                        $('#exampleModal').modal('show');
                    }

                });
            });

        });
    </script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>