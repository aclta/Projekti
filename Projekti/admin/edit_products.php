<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if(isset($_GET['edit_products'])){
    $edit_id=$_GET['edit_products'];
    $get_data="Select * from `products` where product_id=$edit_id";
    $result=mysqli_query($con,$get_data);
    $row=mysqli_fetch_assoc($result);
    $product_title=$row['product_name'];
    $product_description=$row['product_description'];
    $product_keyword=$row['product_keyword'];
    $category_id=$row['category_id'];
    $brand_id=$row['brand_id'];
    $product_image=$row['product_image'];
    $product_price=$row['product_price'];
    

   
   $select_category="Select * from `categories` where category_id=$category_id";
   $result_category=mysqli_query($con,$select_category);
   $row_category=mysqli_fetch_assoc($result_category);
   $category_title=$row_category['category_name'];

//    echo $category_title;

   $select_brand="Select * from `brands` where brand_id=$brand_id";
   $result_brand=mysqli_query($con,$select_brand);
   $row_brand=mysqli_fetch_assoc($result_brand);
   $brand_title=$row_brand['brand_name'];

//    echo $brand_title;
}


?>


<div class="container mt-5">
    <h1 class="text-center">Edit Product</h1>
    <form action="" method="post" enctype="multiple/form-data">
        <div class="form-outline m-auto w-50 mb-4">
            <label for="product_title" class="form-label">Product title</label>
            <input type="text" value="<?php echo $product_title?>" name="product_title" id="product_title" required="required" class="form-control">
        </div>
        <div class="form-outline m-auto w-50 mb-4">
            <label for="product_description" class="form-label">Product Description</label>
            <input type="text" value="<?php echo $product_description?>"name="product_description" id="product_description" required="required"
                class="form-control">
        </div>
        <div class="form-outline m-auto w-50 mb-4">
            <label for="product_keywords" class="form-label">Product Keywords</label>
            <input type="text" value="<?php echo $product_keyword?>" name="product_keywords" id="product_keywords" required="required" class="form-control">
        </div>
        <div class="form-outline m-auto w-50 mb-4">
            <label for="product_category" class="form-label">Product Category</label>
            <select name="product_category" class="form-select">
                <option value="<?php echo $category_title?>"><?php echo $category_title?></option>
             <?php
             $select_all_category="Select * from `categories`";
             $result_all_category=mysqli_query($con,$select_all_category);
             while($row_all_category=mysqli_fetch_assoc($result_all_category)){
             
             $category_title=$row_all_category['category_name'];
             $category_id=$row_all_category['category_id'];
             echo"<option value='$category_id'>$category_title</option>";

             }
             


             
             ?>
            </select>
        </div>
        <div class="form-outline m-auto w-50 mb-4">
            <label for="product_brands" class="form-label">Product Brands</label>
            <select name="product_brands" class="form-select">
            <option value="<?php echo $brand_title?>"><?php echo $brand_title?></option>
                
                <?php
               $select_all_brands="Select * from `brands`";
               $result_all_brands=mysqli_query($con,$select_all_brands);
               while($row_all_brands=mysqli_fetch_assoc($result_all_brands)){
               
               $brand_title=$row_all_brands['brand_name'];
               $brand_id=$row_all_brands['brand_id'];
               echo"<option value='$brand_id'>$brand_title</option>";
  
               }
 

                
                ?>
             
            </select>
        </div>
        <div class="form-outline m-auto w-50 mb-4">
            <label for="product_image" class="form-label">Product Image</label>
            <div class="d-flex">
                <input type="file" id="product_image" name="product_image" class="form-control w-90 m-auto"
                    required="required">
                <img src="../Images/<?php echo $product_image?>" alt="" height="15%" width="15%" srcset="">
            </div>
        </div>
        <div class="form-outline m-auto w-50 mb-4">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" value="<?php echo $product_price?>" name="product_price" id="product_price" required="required" class="form-control">
        </div>
        <div class="m-auto w-50">
            <input type="submit"name="edit_product" value="Update Product"class="btn px-3 mb-3"style="background-color:darkslategray;color:white;">
        </div>
    </form>
</div>

<?php
      mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    if(isset($_POST['edit_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keyword=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brands=$_POST['product_brands']; 
    $product_price=$_POST['product_price']; 

   

    if($product_title=='' or $product_description=='' or $product_keyword=='' or $product_category=='' or   
         $product_brands=='' or $product_price==''  ){
         echo"<script>alert('Please fill all the fields')</script>";
         }else{
           
           

        $update_product="Update `products` set product_name='$product_title',product_description='$product_description',
        product_keyword='$product_keyword'
        ,category_id='$product_category',brand_id='$product_brands'
        ,product_price='$product_price',date=NOW() where product_id=$edit_id";
        $result_update=mysqli_query($con,$update_product);
        if($result_update){
         echo"<script>alert('Product Updated')</script>";
         echo"<script>window.open('insert_productS.php','_self')</script>";

        }
    }
}
?>