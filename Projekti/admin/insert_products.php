<?php
      mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        include('../includes/connect.php');
 
        if(isset($_POST['insert_product'])){ 
            

        $product_tile=$_POST['product_title'];
        $product_description=$_POST['product_description'];
        $product_keyword=$_POST['product_keyword'];
        $product_categories=$_POST['product_categories'];
        $product_brands=$_POST['product_brands'];
        $product_price=$_POST['product_price'];
        $product_status='true';

        $product_image=$_FILES['product_image']['name'];
        $tmp_image=$_FILES['product_image']['tmp_name'];


   


         if($product_tile=='' or $product_description=='' or $product_keyword=='' or $product_categories=='' or   
         $product_brands=='' or $product_image=='' or $product_price==''  ){
         echo"<script>alert('Please fill all the available fields')</script>";
         exit();
         }else{
       
               


           


        $insert_product="insert into `products` (product_name,product_description,product_keyword,category_id
        ,brand_id,product_image,product_price,date,status) values ('$product_tile','$product_description',
        '$product_keyword','$product_categories','$product_brands','$product_image','$product_price',
        NOW(),'$product_status')";
        $result_query=mysqli_query($con,$insert_product);
        if($result_query){
         echo"<script>alert('Successfully inserted the product')</script>";
        }
    }
 }      
      
    
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/453ddbb027.js" crossorigin="anonymous"></script>
    <title>Insert Products</title>
</head>

<body class="bg-light">
    <div class="container mt-3 ">
        <h1 class="text-center">Insert Products</h1>
        <div class="form-outline mb-4 w-50 m-auto">

            <!-- title -->
            <form action="" method="post" enctype="multipart/form-data">
                <label for="product_title" class="form-label">Product Name</label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                    placeholder="Enter product name" autocomplete="off" required>
        </div>

        <!-- description -->
        <div class="form-outline mb-4 w-50 m-auto">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="product_description" class="form-label">Product Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control"
                    placeholder="Enter product description" autocomplete="off" required>
        </div>

        <!-- keyword -->
        <div class="form-outline mb-4 w-50 m-auto">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="product_keyword" class="form-label">Product Keyword</label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control"
                    placeholder="Enter product keyword" autocomplete="off" required>
        </div>

        <!-- categories -->
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_categories" class="form-select" id="">
                <option value="">Select Categories</option>

                <?php
               $select_categories="Select * from `categories`";
               $result_categories = mysqli_query($con,$select_categories);
               while($row_data=mysqli_fetch_assoc($result_categories)){
                $category_name=$row_data['category_name'];
                $category_id=$row_data['category_id'];
                echo " <option value='$category_id'>$category_name</option> ";
               }
                ?>

            </select>
        </div>

        <!-- brands -->
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_brands" class="form-select" id="">
                <option value="">Select Brands</option>
                <?php
               $select_brands="Select * from `brands`";
               $result_brands = mysqli_query($con,$select_brands);
               while($row_data=mysqli_fetch_assoc($result_brands)){
                $brand_name=$row_data['brand_name'];
                $brand_id=$row_data['brand_id'];
                echo " <option value='$brand_id'>$brand_name</option> ";
               }
                ?>
            </select>
        </div>

        <!-- Image -->
        <div class="form-outline mb-4 w-50 m-auto">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="product_image" class="form-label">Product Image</label>
                <input type="file" name="product_image" id="product_image" class="form-control" autocomplete="off"
                    required>
        </div>

        <!-- price -->
        <div class="form-outline mb-4 w-50 m-auto">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control"
                    placeholder="Enter product price" autocomplete="off" required>
        </div>

        <!-- submit -->
        <div class="form-outline mb-4 w-50 m-auto">
            <form action="" method="post" enctype="multipart/form-data">

                <input type="submit" value="Insert Product" name="insert_product" style="background-color:darkslategray;color:white;"class="btn  mb-3 px-3">
        </div>



        </form>
    </div>
</body>

</html>