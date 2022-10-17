<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
</head>

<body>


    <!-- cart start -->


    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Cart - 2 items</h5>
                        </div>




                        <div class="card-body">
                            <!-- Single item -->
                            <div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                    <!-- Image -->
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp" class="w-100" alt="Blue Jeans Jacket" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                    </div>
                                    <!-- Image -->
                                </div>

                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                    <!-- Data -->
                                    <p><strong>Blue denim shirt</strong></p>
                                    <p>Color: blue</p>
                                    <p>Size: M</p>
                                    <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remove item">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip" title="Move to the wish list">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <!-- Data -->
                                </div>

                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <!-- Quantity -->
                                    <div class="d-flex mb-4 " style="max-width: 300px">
                                        <button class="btn btn-primary px-3 me-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>

                                        <div class="form-outline ">
                                            <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                                            <label class="form-label" for="form1">Quantity</label>
                                        </div>

                                        <button class="btn btn-primary px-3 ms-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </div>
                                    <!-- Quantity -->

                                    <!-- Price -->
                                    <p class="text-start text-md-center">
                                        <strong>$17.99</strong>
                                    </p>
                                    <!-- Price -->
                                </div>
                            </div>
                            <!-- Single item -->



                            <hr class="my-4" />

                            <!-- Single item -->
                            <div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                    <!-- Image -->
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp" class="w-100" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                    </div>
                                    <!-- Image -->
                                </div>

                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                    <!-- Data -->
                                    <p><strong>Red hoodie</strong></p>
                                    <p>Color: red</p>
                                    <p>Size: M</p>

                                    <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remove item">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip" title="Move to the wish list">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <!-- Data -->
                                </div>

                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <!-- Quantity -->
                                    <div class="d-flex mb-4" style="max-width: 300px">
                                        <button class="btn btn-primary px-3 me-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>

                                        <div class="form-outline">
                                            <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                                            <label class="form-label" for="form1">Quantity</label>
                                        </div>

                                        <button class="btn btn-primary px-3 ms-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </div>
                                    <!-- Quantity -->

                                    <!-- Price -->
                                    <p class="text-start text-md-center">
                                        <strong>$17.99</strong>
                                    </p>
                                    <!-- Price -->
                                </div>
                            </div>
                            <!-- Single item -->


                            <!-- new item start -->




                            <hr class="my-4" />

                            <!-- Single item -->
                            <div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                    <!-- Image -->
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp" class="w-100" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                    </div>
                                    <!-- Image -->
                                </div>

                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                    <!-- Data -->
                                    <p><strong>Red hoodie</strong></p>
                                    <p>Color: red</p>
                                    <p>Size: M</p>

                                    <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remove item">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip" title="Move to the wish list">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <!-- Data -->
                                </div>

                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <!-- Quantity -->
                                    <div class="d-flex mb-4" style="max-width: 300px">
                                        <button class="btn btn-primary px-3 me-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>

                                        <div class="form-outline">
                                            <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                                            <label class="form-label" for="form1">Quantity</label>
                                        </div>

                                        <button class="btn btn-primary px-3 ms-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </div>
                                    <!-- Quantity -->

                                    <!-- Price -->
                                    <p class="text-start text-md-center">
                                        <strong>$17.99</strong>
                                    </p>
                                    <!-- Price -->
                                </div>
                            </div>


                            <!-- new item end -->











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
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Products
                                    <span>$53.98</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>Gratis</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong>$53.98</strong></span>
                                </li>
                            </ul>

                            <button type="button" class="btn btn-primary btn-lg btn-block">
                                Go to checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- cart end -->

</body>

</html>