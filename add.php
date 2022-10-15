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
        <div class="sidebar  pb-3 ">
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
                        <h6 class="mb-0"><?php echo $adname?></h6>
                        <span>Admin</span>
                    </div>
                </div>


                <div class="navbar-nav w-100">
                    <a href="index2.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="add.php" class="nav-item nav-link active"><i class="fa fa-th me-2"></i>Add Product</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Edit Product</a>
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


           <!-- add product -->
           <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add Product</h6>
                            <form>

                            <div class="input-group mb-3">
                            <span class="input-group-text">@</span>
                                <input type="text" class="form-control" placeholder="Product Name" aria-label="Username">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" placeholder="Category" aria-label="Server">
                            </div>

                            <div class="input-group mb-3">
                            <span class="input-group-text">@</span>
                                <input type="number" class="form-control" placeholder="Unit Price" aria-label="Username">
                                <span class="input-group-text">@</span>
                                <input type="number" class="form-control" placeholder="Selling Price" aria-label="Server">
                            </div>
                            
                            
                               
                                <div class="mb-3">
                                    
                                    <input type="text" class="form-control" placeholder="Manufacture">
                                    <div class="form-text">#Hint:  Add your product Manufacture here.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Capacity">
                                    <div class="form-text">#Hint:  Add your product Capacity here.
                                    </div>
                                </div>


                                <div class="input-group mb-3">
                            <span class="input-group-text">@</span>
                                <input type="number" class="form-control" placeholder="Quantity" aria-label="Username">
                                <span class="input-group-text">@</span>
                                <input class="form-control bg-dark" type="file" id="formFile">
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Comments</label>
                            </div>
                            
                                
                                <button type="submit" class="btn btn-primary my-4">Add</button>
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