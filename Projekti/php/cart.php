<?php
      
include('../includes/connect.php');
include('../functions/common_function.php');

@session_start();


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
    <title>Cart</title>
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-body-light" style="background-color:darkslategray;">
            <div class="container-fluid">
                <img src="../Images/logo.png" class="logo" alt="" width="5%" height="5%">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" style="color:white;" aria-current="page"
                                href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:white;" href="index.php">Products</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:white;"
                                href="./user_area/user_registration.php">Register</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:white;" href="#">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:white;" href="cart.php"><i
                                    class="fa-solid fa-cart-shopping"></i><sup>
                                    <?php
        //cart item numbers
       
       cartitem();
       ?>
                                </sup></a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
        <?php
 

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
        <!-- fourth child table -->
        <div class="container">
            <div class="row">
                <form action="" method="post">
                    <table class="table table-bordered text-center">


                        <?php
                     $get_ip_add=getIPAddress();
                     $total_price=0;
                     $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
                     $result=mysqli_query($con,$cart_query); 
                     $result_count=mysqli_num_rows($result);
                     if($result_count>0){
                     echo"

                     <thead>
                     <th>Product title</th>
                     <th>Product Image</th>
                     <th>Quantity</th>
                     <th>Total Price</th>
                     <th>Remove Item</th>
                     <th colspan='2'>Operations</th>
                     </tr>
                     </thead>
                     <tbody>";
                     
                     while($row=mysqli_fetch_array($result)){
                      $product_id=$row['product_id'];   
                     $select_products="Select * from `products` where product_id='$product_id'";
                     $result_products=mysqli_query($con,$select_products); 
                     while($row_product_price=mysqli_fetch_array($result_products)){
                         $product_price=array($row_product_price['product_price']);
                         $price_table=$row_product_price['product_price'];
                         $product_tile=$row_product_price['product_name'];
                         $product_image=$row_product_price['product_image'];

                         $product_values=array_sum($product_price);
                         $total_price +=$product_values;
                     
                    ?>

                        <tr>
                            <td><?php echo$product_tile?></td>
                            <td><img src="../Images/<?php echo$product_image?>" width="50px" heigth="50px" alt="">
                            </td>
                            <td><input type="text" name="qty" class="form-input w-50"></td>

                            <?php 
                    $get_ip_add=getIPAddress();
                    if(isset($_POST['update_cart'])){
                        $quantities=$_POST['qty'];
                        $update_cart=" Update `cart_details` set quantity=$quantities where
                        ip_address='$get_ip_add' ";
                        $results_products_quantity=mysqli_query($con,$update_cart); 
                        $total_price=$total_price*$quantities;

                    }
                    ?>
                            <td>€<?php echo$price_table?>.00</td>
                            <td><input type="checkbox" name="removeitem[]" value="<?php echo$product_id?>"></td>
                            <td>
                                <input type="submit" name="update_cart" value="Update" class="p-3 py-2 mb-3 border-0"
                                    style="background-color:darkslategray;color:white;border-radius:5px;">
                                <!-- <p><button class="bg-info px-3 py-2 mx-3 border-0">Remove</button></p> -->
                                <input type="submit" name="remove_cart" value="Remove" class="p-3 py-2 mb-3 border-0"
                                    style="background-color:#a16842;color:white;border-radius:5px;">
                            </td>
                        </tr>
                        </tbody>
                    <!-- </table> -->
                    <div class="d-flex mb-3">
                        <?php
                    } 
                    }
                    }else{
                        echo"<h2 class='text-center'style='color:darkslategray;'>Cart is empty</h2>";
                    }
                    $get_ip_add=getIPAddress();
                    $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
                    $result=mysqli_query($con,$cart_query); 
                    $result_count=mysqli_num_rows($result);
                    if($result_count>0){
                        echo"
                        </table> 
                        <h4 class='px-3'>Subtotal:<strong>€$total_price</strong></h4>
                        <input type='submit'style='background-color:darkslategray;color:white;border-radius:5px;' 
                        value='Continue Shopping' class='px-3 py-2 mx-3 border-0'
                        name='continue_shopping'>
                        
                        <button style='background-color:#a16842;border-radius:5px;' class=' px-3 py-2 border-0'>
                        <a href='./user_area/checkout.php'
                         class='text-light text-decoration-none'>Checkout</a>
                        </button>";
                    }else{
                        echo"
                        <input type='submit'value='Continue Shopping' style='background-color:darkslategray;color:white;border-radius:5px;'
                        class='p-3 py-2 border-0'
                        name='continue_shopping'>
                        ";
                    }
                    if(isset($_POST['continue_shopping'])){
                        echo"<script>window.open('index.php','_self')</script>";
                    }
                    ?>

                        <!-- Subtotal -->
                       
                </form>
            </div>
        </div>
    </div>


    <!-- remove item -->
    <?php
  function remove_cart_item(){
    global $con;
    if(isset($_POST['remove_cart'])){
         foreach($_POST['removeitem'] as $remove_id){
        echo $remove_id;
        $delete_query="Delete from `cart_details` where product_id=$remove_id";
        $run_delete=mysqli_query($con,$delete_query);
        if($run_delete){
            echo"<script>window.open('cart.php','_self')</script>";
        }
       }
      }
     }
echo $remove_item = remove_cart_item();
?>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>