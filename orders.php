<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:login.php');

}
else{
    $adname=$_SESSION['user'];
}

include_once('connection.php');

$query = "SELECT * FROM orders";


$result = mysqli_query($connection, $query);


include_once('dashtemp.php');

?>


<!DOCTYPE html>

<u><h6 class="text-danger mx-4 mt-3">Admin / Orders</h6></u> 

                    <!-- Recent Sales Start -->
                    <div class="container-fluid pt-2 px-4">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Orders</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0" id="example">
                                    <thead>
                                        <tr class="text-white">
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Customer ID</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Quantity</th>

                                        </tr>
                                    </thead>

                                    <?php
                                    
                                    while ($res = mysqli_fetch_assoc($result)) {

                                    ?>
                                        <tr>
                                            <td><?php echo $res['id']; ?></td>
                                            <td><?php echo $res['cus_id']; ?></td>
                                            <td><?php echo $res['product']; ?></td>
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