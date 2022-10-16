<?php

@include 'config.php';


?>



<!DOCTYPE html>
<head>
    
    <link rel="stylesheet" href="v2.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div class="box">
    
    <form>
        <input type="text" name="" placeholder="Type...">
        <input type="submit" name="" value="search"
 </form>   
</div>






<div class="cl">
     <?php

   $select = mysqli_query($conn, "SELECT * FROM products");
   
   ?>
    <div class ="gallery">

<!--product1-->
        <div class="content">
            <img src="image1.png">
            <h3>fjklds</h3>
            <p>In publishing and graphic design, Loram ipsum is a placeholder text commonly used to </p>
            <h6>$100.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>   
            </ul>
            <button class="buy-1">ADD TO MENU</button>
        </div> 


 <!--product2-->
        <div class="content">
            <img src="images2.png">
            <h3>Pizza</h3>
            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to </p>
            <h6>$100.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>   
            </ul>
            <button class="buy-1">ADD TO MENU</button>
        </div> 

 <!--product3-->
        <div class="content">
            <img src="image3.png">
            <h3>Pizza</h3>
            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to</p>
            <h6>$100.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>   
            </ul>
            <button class="buy-1">ADD TO MENU</button>
        </div> 

 <!--product4-->
        <div class="content">
            <img src="image1.png">
            <h3>Pizza</h3>
            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to</p>
            <h6>$100.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>   
            </ul>
            <button class="buy-1">ADD TO MENU</button>
        </div> 

 <!--product5-->
        <div class="content">
            <img src="image1.png">
            <h3>Pizza</h3>
            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to </p>
            <h6>$100.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>   
            </ul>
            <button class="buy-1">ADD TO MENU</button>
        </div> 


 <!--product2-->
        <div class="content">
            <img src="images2.png">
            <h3>Pizza</h3>
            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to</p>
            <h6>$100.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>   
            </ul>
            <button class="buy-1">ADD TO MENU</button>
        </div>        


    </div>
 </div>   
        
</body>
</html>