<?php
session_start();

include_once('connection.php');
if (isset($_POST['submit'])) {
    $error = array();
    if (!isset($_POST['uname']) || strlen(trim($_POST['uname'])) < 1) {
        $error[] = 'User name is invalid or empty';
    }

    if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1) {
        $error[] = 'PASSWORD is invalid or empty';
    }

    if (empty($error)) {
        $uname = mysqli_real_escape_string($connection, $_POST['uname']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);


        $sql = "SELECT * FROM user 
        WHERE name='{$uname}'
        AND password='{$password}'
        LIMIT 1";

        $result = mysqli_query($connection, $sql);


        $sql2 = "SELECT roll FROM user 
        WHERE name='{$uname}'
        AND password='{$password}'
        LIMIT 1";



        $result2 = mysqli_query($connection, $sql2);

        if (mysqli_num_rows($result2) > 0) {
            // OUTPUT DATA OF EACH ROW
            while ($row = mysqli_fetch_assoc($result2)) {
                $roll= $row["roll"];
            
                   
            }
        } else {
            echo "0 results";
        }









        if ($result) {

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['user'] = $uname;
                if($roll==1)
                {
                    header('Location:index.php');
                }
                else
                {
                    header('Location:index2.php');
                }
                
            } else {
                $error[] = 'username and password invalid';
            }
        } else {
            $error[] = 'Query fails';
        }
    } else {
        $error[] = 'PASSWORD is invalid or empty';
    }
} // function that Destroys Session 

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
                    <!-- <div class="card shadow-2-strong" style="border-radius: 1rem;"> -->
                    <div class="card-body p-5 text-center" style="background-color: #191C24;">

                        <?php
                        if (isset($error) && !empty($error)) {
                            echo '<p style="color:red;">Empty username or passwors </p>';
                        }
                        ?>

                        <!-- <h3 class="mb-5"><img src="logo2.png" width="100px" height="120px" alt=""></h3> -->
                        <form action="login.php" method="post">
                            <div class="form-outline mb-4">

                                <input type="text" name="uname" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Username" />

                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" />

                            </div>

                            <!-- Checkbox -->
                            <div class=" mb-4">
                                <!-- <input class="form-check-input me-2" type="checkbox" value="" id="form1Example3" /> -->
                                <!-- <label class="form-check-label text-light" for="form1Example3"> Remember password </label> -->
                                <a href="register.php">
                                    <p class="text-light">Register now?</p>
                                </a>

                            </div>


                            <button name="submit" type=" button" class="btn btn-outline-light me-3" href="login.php">LOGIN<i class="bi bi-box-arrow-in-right"></i></button>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

</body>

</html>