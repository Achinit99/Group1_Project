<?php

include_once('connection.php');

if(isset($_POST['submit2'])){

    $uname = $_POST['uname'];
    $password = $_POST['password'];

    $insert = "INSERT INTO user(name, password) VALUES('$uname', '$password')";
    $upload = mysqli_query($connection,$insert);
    
}

?>


<html>

<head>
    <link rel="stylesheet" href="" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        h3 {
            text-align: center;
        }
    </style>
</head>

<body style="background-color: cadetblue" class="mr-3">


    <section class="vh-100" style="background-color: #CF0A0A;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <h3 class="mb-5"><img src="logo2.png" width="140px" height="170px" alt=""></h3>
                   
                    
                    <div class="card-body p-5 text-center" style="background-color: #191C24;">

                       
                        <form action="register.php" method="post">
                            <div class="form-outline mb-4">

                                <input type="text" name="uname" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Username" />

                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" />

                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" name="password2" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Re-Password" />

                            </div>

                           
                            <div class=" mb-4">
                              
                                <a href="login.php">
                                    <p class="text-light">Login now?</p>
                                </a>

                            </div>


                            <button name="submit2" type=" button" class="btn btn-outline-light me-3" href="register.php">Register<i class="bi bi-box-arrow-in-right"></i></button>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

</body>

</html>