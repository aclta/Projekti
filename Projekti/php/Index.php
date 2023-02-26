<?php
      
      include('../includes/connect.php');
      include('../functions/common_function.php');
      
    
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/453ddbb027.js" crossorigin="anonymous">
  </script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>
<style>
  body {
    overflow-x: hidden;
  }
</style>

<body>
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-body-light "style="background-color:darkslategray;">
      <div class="container-fluid">
        <img src="../Images/logo.png" class="logo" alt="" width="5%" height="5%">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active"style="color:white;" aria-current="page" href="home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link"style="color:white;" href="index.php">Products</a></li>
            <li class="nav-item"><a class="nav-link"style="color:white;" href="./user_area/user_registration.php">Register</a></li>
            <li class="nav-item"><a class="nav-link"style="color:white;" href="contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link"style="color:white;" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>
                  <?php
              //cart item numbers
             
             cartitem();
             ?>
                </sup></a>
            </li>
            <li class="nav-item"><a class="nav-link" style="color:white;"href="#">Total Price:
                <?php
             
              
    
              total_cart_price();
              
              ?>€</a></li>
          </ul>

        </div>
      </div>
    </nav>
    </nav><?php
    getIPAddress();   
    if(isset($_GET['add_to_cart'])){
    
    $get_ip_add=getIPAddress(); 
    $get_product_id=$_GET['add_to_cart'];
    $select_query="Select * from `cart_details` where ip_address='$get_ip_add' and product_id=$get_product_id";
    $result_query=mysqli_query($con,$select_query); 
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows>0){
      echo"<script>alert('This item is already present in cart')</script>";
      echo"<script>window.open('index.php','_self')</script>";
    }else{
        $insert_query="insert into `cart_details`
        (product_id,ip_address,quantity) values('$get_product_id','$get_ip_add',0)";
        $result_query=mysqli_query($con,$insert_query); 
      echo"<script>alert('Item is added to cart')</script>";
        echo"<script>window.open('index.php','_self')</script>";

    }
}

?>
    <div class="bg-light">
      <h3 class="text-center">Products</h3>
    </div>

    <div class="row">
      <div class="col-md-10">
        <!-- products -->
        <div class="row">
          <!-- fetching products -->
          <?php
       
         getProducts();
         getUniqueCategory();
         
        ?>


          <!-- row -->
        </div>
        <!-- col -->
      </div>

      <div class="col-md-2 p-0"style="background-color:darkslategray;">
        <!--Brands to be displayed-->
        <ul class="navbar-nav me-auto text-center">
            

          <ul class="navbar-nav  text-center">
            <li class="nav-item"style="background-color:#a16842;"><a href="#" class="nav-link text-light">
                <h4>Categories</h4>
              </a></li>

            <?php
               displayCategories();

               ?>

          </ul>

      </div>
    </div>
    <!--Last child <div class="bg-info p-3 text-center">
        <p>All rights reserved</p>-->
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>
<!-- https://github.com/aclta/Projekti.git -->
</html>