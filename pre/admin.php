<?php

@include 'config.php';

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM products WHERE id = $id");
   header('location:admin_page.php');
};

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin page</title>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>


<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>


<div class="admin-product-form-container">

	<form action="<?php $_SERVER['PHP_SELF'] ?>" methord="post" enctype="multipart/form-data">
		<h2>ADD PRODUCT</h2>
		PRODUCT NAME: <input type="text" placeholder="Enter product name" name="product_name" class="box"><br>
		PRODUCT PRICE: <input type="number" placeholder="Enter product Price" name="product_price" class="box"><br>
		SELECT IMAGE:<input type="file" name="product_image" class="box"><br>
		<input type="submit" name="add_product" class="btn" value="Add a product"  >
		<input type="reset" name="add_product" class="btn" value="Reset" >
	</form>

</div>	

</body>
</html> 