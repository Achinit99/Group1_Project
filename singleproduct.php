<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <link href="singleproduct.css" rel="stylesheet">

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-danger navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="bi bi-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <i class="bi bi-arrow-clockwise" mx-0></i>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->



    <nav class="navbar navbar-expand-lg navbar-light bg-dark py-3">
        <div class="container-fluid ">
            <h1><a class="navbar-brand text-white mx-5" href="#">GROUP1</a></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white mx-3" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mx-3" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-white mx-3" href="#" tabindex="-1" aria-disabled="true">About</a>
                    </li>
                </ul>
                <form class="d-flex">

                    <i class="bi bi-bell mx-3 text-white"></i>
                    <i class="bi bi-cart text-white mx-2"></i>
                </form>
            </div>
        </div>
    </nav>


    </form>
    </div>
    </nav>
    <!-- 
    nav end -->




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



                <div class="col-lg-6 order-3">
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
                            <button type="button" class="btn btn-warning">Warning</button>    
                            </div>
                        </div>

                    </div>
                    <hr class="singleline">
                    <div class="row">
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


</body>

</html>