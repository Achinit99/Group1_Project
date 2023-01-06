<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:login.php');

}
else{
    $adname=$_SESSION['user'];
}

include_once('connection.php');

$query = "SELECT item_code, item_name, category, unit_price, selling_price, quantity FROM item";
$query2 = "SELECT quantity FROM stock";

$result = mysqli_query($connection, $query);
$result_for_cal = mysqli_query($connection, $query);
$result2 = mysqli_query($connection, $query2);



$tot = 0;
$tot2 = 0;
$fullqun = 0;
while ($res = mysqli_fetch_assoc($result_for_cal)) {
    $fullqun = $res['selling_price'] * $res['quantity'];
    $tot = $tot + $fullqun;

    $fullqum2 = $res['unit_price'] * $res['quantity'];
    $tot2 = $tot2 + $fullqum2;
}

$profit = $tot - $tot2;


include_once('dashtemp.php');

?>


<!DOCTYPE html>

<u><h6 class="text-danger mx-4 mt-3">Admin / Home</h6></u> 
            <!-- Sale & Revenue Start -->

            <div class="container-fluid pt-2">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            
                            <!-- <i class="fa fa-chart-line fa-3x text-primary"></i> -->
                            <div class="ms-3">
                                <p class="mb-2">Total Cost</p>
                                <h6 class="mb-0"><?php
                                                    echo "RS: " . number_format($tot2);
                                                    ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <!-- <i class="fa fa-chart-bar fa-3x text-primary"></i> -->
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0"><?php
                                                    echo "RS: " . number_format($tot);
                                                    ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <!-- <i class="fa fa-chart-area fa-3x text-primary"></i> -->
                            <div class="ms-3">
                                <p class="mb-2">Profit</p>
                                <h6 class="mb-0"><?php
                                                    echo "RS: " . number_format($profit);
                                                    ?></h6>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <!-- <i class="fa fa-chart-area fa-3x text-primary"></i> -->
                            <div class="ms-3">
                                <p class="mb-2">Profit</p>
                                <h6 class="mb-0"><?php
                                                    echo "RS: ";
                                                    ?></h6>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <!-- Sale & Revenue End -->


                    <!-- Recent Sales Start -->
                    <div class="container-fluid pt-4 px-4">
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
                                    &copy; <a href="#">NIBM SE PROJECT</a>, All Right Reserved.
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