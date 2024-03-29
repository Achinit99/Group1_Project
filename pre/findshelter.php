<?php

$conn = mysqli_connect('localhost','root','','pet_db');


if(isset($_POST['sub'])){

   $pet_name = $_POST['petname'];
   $pet_age = $_POST['age'];
   $pet_pets = $_POST['age'];
   $pet_breed = $_POST['breed'];
   $pet_locaton = $_POST['location'];
   $pet_note = $_POST['note'];

   if(empty($pet_name) || empty($pet_age ) || empty($pet_breed)){
      $message[] = 'please fill out all';
   }else{

    $insert = "INSERT INTO pet(name, age) VALUES('$pet_name', '$pet_age')";
    $upload = mysqli_query($conn,$insert);
 
}

};



?>














<!DOCTYPE html>
<html>
  <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>cozy Shelter</title>
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">

</head>

<body style="background-color:white">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="resources/logo_2.png" width="310px" height="110px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html" style="color:#2A2424;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:#2A2424;">Our Pets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:#2A2424;">Find a Shelter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:#2A2424;">To help Shelters</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:#2A2424;">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:#2A2424;">Education Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:#2A2424;">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:#2A2424;">Community</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!--Pet's details form-->
    <div class="main">
      <div class="reg">
        <br>
        <br>
        <h2>Fill your Pet's details</h2>
        <br>

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

          <table style="margin-left:95px;">
           <tr>
               <td><label>Pet's name</label></center></td>
               <td><center><input type="text" name="petname" placeholder="Enter the pet's name" style="width:270px;border:1px solid;border-radius:4px;border-color:#CED4DA;"></center></td>
           </tr>
           <tr>
               <td><label>Age</label></td>
               <td><input type="text" name="age" placeholder="Enter the Pet's age" style="width:270px;border:1px solid;border-radius:4px;border-color:#CED4DA;"></td>
           </tr>
           <tr>
               <td><center><input type="radio" name="pets" value="cat"><label>Cat</label></center></td>
               <td><center><input type="radio" name="pets" value="dog"><label>Dog</label></center></td>
           </tr>
           <tr>
               <td><label>Breed</label></td>
               <td><input type="text" name="breed"  placeholder="Enter the Breed" style="width:270px;border:1px solid;border-radius:4px;border-color:#CED4DA;"></td>
           </tr>
           <tr>
             <td>Upload a photo </td>
             <td>
             <label for="file-input">
               <img id="previewImg" src="resources/cam.png" style="width: 30px; height: 23px;" />
               <input id="file-input" type="file" onsubmit="previewFile(this);" style="display: none;" />
             </label>
           </td>
           </tr>
           <tr>
              <td><label>Location </label></td>
              <td><input type="text" name="location" placeholder="Enter the Location" style="width:270px;border:1px solid;border-radius:4px;border-color:#CED4DA;"></td>
           </tr>
           <tr>
              <td><label>Contact no </label></td>
              <td><input type="text" name="no" placeholder="Enter the Contact no" style="width:270px;border:1px solid;border-radius:4px;border-color:#CED4DA;"></td>
           </tr>
           <tr>
             <td><label>Any special notes </label></td>
             <td><textarea name="note" rows="4" cols="21" style="width:270px;border:1px solid;border-radius:4px;border-color:#CED4DA;"></textarea></td>
           </tr>

          </table>
          <div class="d-flex justify-content-center mx-4 mb-1 mb-lg-4">
            <input type="submit" class="btn btn-primary btn-lg" name="sub" value="sub">
          </div>
       </form>


      </div>
    </div>

    <!--footer-->
    <div class="container-fluid mt-5">
    <div class="card mx-6">
        <div class="row mb-2 ">
            <div class="col-md-3 col-sm-11 col-xs-11">
                <div class="footer-text pull-left">
                    <div class="d-flex">
                        <img src="resources/logo.png" width="330px" height="130px">
                    </div>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi non pariatur numquam animi nam at impedit odit nisi.</p>
                    <div class="social mt-2 mb-3"> <i class="fa fa-facebook-official fa-lg"></i> <i class="fa fa-instagram fa-lg"></i> <i class="fa fa-twitter fa-lg"></i> <i class="fa fa-linkedin-square fa-lg"></i> <i class="fa fa-facebook"></i> </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-1 col-xs-1 mb-2"></div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <h5 class="heading">For questions & Suggestions</h5>
                <ul>
                    <li>cozyshelter@gmail.com</li><br>
                    <li>+94114356782</li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4">
                <h5 class="heading">We are waiting for your visit</h5>
                <ul class="card-text">
                    <li>155/1 Dam Street,12,colombo</li><br>
                    <li>471 Galle Road,06,Colombo</li>
                </ul>
            </div>
        </div>
        <div class="divider mb-4"> </div>
        <div class="row" style="font-size:10px;">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="pull-left">
                    <p><i class="fa fa-copyright"></i> 2022 Fotdesign</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="pull-right mr-4 d-flex policy">
                    <div>Terms of Use</div>
                    <div>Privacy Policy</div>
                    <div>Cookie Policy</div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
