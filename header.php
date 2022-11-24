<!DOCTYPE html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="homestyle.css" rel="stylesheet">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">




  <title>NIBM GROUP 01</title>
  <style>
    /* @media only screen and (max-width: 991px) {
  .navmobile {
    flex-direction: column;
    justify-content: start;
    align-items: start;
  }
} */


  </style>
</head>

<body>


  <nav class="navbar fixed-top navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php"><img src="logo2.png" height="70px" width="70px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-light"></span>
        <i class="bi bi-list h1"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-end navmobile" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active h5 mx-2" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link h5" href="shop.php">Shop</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link h5" href="about.php">About</a>
          </li>




          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="bi bi-cart-check-fill h5"></i></a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="user.jpg" class="rounded-circle" height="25px" width="25px" alt="Cinque Terre">
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="customerprofile.php">Profile</a></li>
              <li><a class="dropdown-item" href="customerprofile.php">Settings</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item"href="logout.php">Log out</a></li>
            </ul>
          </li>
          

          

          <li class="nav-item">
            <form class="d-flex">
              <input class="form-control bg-dark border-0 me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
          </li>

        </ul>


      </div>
    </div>
  </nav>

    
</body>
</html>