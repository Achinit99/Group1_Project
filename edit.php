<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:login.php');
} else {
    $adname = $_SESSION['user'];
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

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-0 pb-3 ">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>ADMIN</h3>
                </a>


                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative ">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $adname ?></h6>
                        <span>Admin</span>
                    </div>
                </div>


                <div class="navbar-nav w-100">
                    <a href="index2.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="add.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Add Product</a>
                    <a href="edit.php" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>Edit Product</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Charts</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>User Message</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">

            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">

                    <div class="nav-item ">
                        <a href="download.php" class="nav-link ">
                            <i class="bi bi-box-arrow-down me-lg-2"></i>
                            <!-- <span class="d-none d-lg-inline-flex">Download</span> -->
                        </a>

                    </div>




                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Achini Thathsarani</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->



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
                                        <button name="add_product" class="btn btn-primary" value="Add a product">Delete</button>
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
    <!-- pop up start -->



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="post" action="popupaction.php">
                        <input type="hidden" name="update_id" id="update_id">
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    <button type="button" name="insertdata" class="btn btn-success editbtn">Update</button>
                </div>
            </div>
        </div>
    </div>



    <!-- popup end -->
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

    <script>
            $(document).ready(function() {
                
                $(document).on('click','.editbtn',function(){
                    var itemCode=$(this).attr('id');
                    $.ajax({
                        url:"fetch.php",
                        method:"POST",
                        data:{itemCode:itemCode},
                        dataType:"json",
                        success:function(data){
                            $('#iname').val(data.item_code);
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
</body>

</html>