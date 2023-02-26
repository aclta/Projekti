 <?php  
      

 function getProducts(){
    global $con;
 if(!isset($_GET['category'])){
    if(!isset($_GET['brands'])){  
    $select_query="Select * from `products` order by product_name";
    $result_query=mysqli_query($con,$select_query); 
    while($row=mysqli_fetch_assoc($result_query)){
      //$row['product_name']
      $product_id=$row['product_id'];
      $product_name=$row['product_name'];
      $product_description=$row['product_description'];
      $product_keyword=$row['product_keyword'];
      $product_image=$row['product_image'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo"<div class='col-md-4 mb-2'>
      <div class='card'><img src='../Images/$product_image' class='card-img-top' alt='$product_name'>
        <div class='card-body'>
          <h5 class='card-title'>$product_name</h5>
          <p class='card-text'>$product_description</p>
          <p class='card-text'>€$product_price.00</p>
          <a href='Index.php?add_to_cart=$product_id' class='btn'style='background-color:darkslategray;color:white;'>Add to cart</a>
    
         
        </div>
      </div>
    </div>";
   }
 }
}
}
function getUniqueCategory(){
    global $con;
if(isset($_GET['category'])){       
    $category_id=$_GET['category'];
    $select_query="Select * from `products` where category_id=$category_id";
    $result_query=mysqli_query($con,$select_query); 
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
      echo"<h2 class='text-center text-danger'>No stock for this category</h2>";
    }
    while($row=mysqli_fetch_assoc($result_query)){
      //$row['product_name']
      $product_id=$row['product_id'];
      $product_name=$row['product_name'];
      $product_description=$row['product_description'];
      $product_keyword=$row['product_keyword'];
      $product_image=$row['product_image'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo"<div class='col-md-4 mb-2'>
      <div class='card'><img src='../Images/$product_image' class='card-img-top' alt='$product_name'>
        <div class='card-body'>
          <h5 class='card-title'>$product_name</h5>
          <p class='card-text'>$product_description</p>
          <p class='card-text'>€$product_price.00</p>
          <a href='Index.php?add_to_cart=$product_id' style='background-color:darkslategray;color:white;'class='btn'>Add to cart</a>
          
        </div>
      </div>
    </div>";
   }
   }
}


        function displayCategories(){
            global $con;
            $select_categories="Select * from `categories`";
            $result_categories = mysqli_query($con,$select_categories);
            while($row_data=mysqli_fetch_assoc($result_categories)){
             $category_name=$row_data['category_name'];
             $category_id=$row_data['category_id'];
             echo "<li class='nav-item '><a href='index.php?category=$category_id' class='nav-link text-light'>$category_name</a></li>";
            }
                }
function total_cart_price(){
    global $con;
    $get_ip_add=getIPAddress();
    $total_price=0;
    $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
    $result=mysqli_query($con,$cart_query); 
    while($row=mysqli_fetch_array($result)){
     $product_id=$row['product_id'];   
    $select_products="Select * from `products` where product_id='$product_id'";
    $result_products=mysqli_query($con,$select_products); 
    while($row_product_price=mysqli_fetch_array($result_products)){
        $product_price=array($row_product_price['product_price']);
        $product_values=array_sum($product_price);
        $total_price +=$product_values;
    }
    }
     echo $total_price;
  }
  function cartitem(){
    if(isset($_GET['add_to_cart'])){
    global $con;
    $get_ip_add=getIPAddress();
    $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query=mysqli_query($con,$select_query); 
    $count_cart_items=mysqli_num_rows($result_query);
    }else{
    global $con;
    $get_ip_add=getIPAddress();
    $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query=mysqli_query($con,$select_query); 
    $count_cart_items=mysqli_num_rows($result_query);
    }
    echo$count_cart_items;
    } 
    // function remove_cart_item(){
    //     global $con;
    //     if(isset($_POST['remove_cart'])){
    //          foreach($_POST['removeitem'] as $remove_id){
    //         echo $remove_id;
    //         $delete_query="Delete from `cart_details` where product_id=$remove_id";
    //         $run_delete=mysqli_query($con,$delete_query);
    //         if($run_delete){
    //             echo"<script>window.open('cart.php','_self')</script>";
    //         }
    //        }
    //       }
    //      }

    function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  


function get_user_details(){mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  global $con;
   $username=$_SESSION['username'];
  $get_details="Select * from `user_table` where username='$username'";
  $result_query=mysqli_query($con,$get_details);
  while($row_query=mysqli_fetch_array($result_query)){
    $user_id=$row_query['user_id'];
    if(!isset($_GET['edit_account'])){
      if(!isset($_GET['my_orders'])){
        if(!isset($_GET['delete_account'])){
           $get_orders="Select * from `user_orders` where user_id=$user_id and order_status='pending'";
            $result_orders_query=mysqli_query($con,$get_orders);
            $row_count=mysqli_num_rows($result_orders_query);
            if($row_count>0){
              echo"<h3 class='text-center'>You have <span>$row_count</span> pending orders</h3>";
            }


        }
      }
    }
  }
}
?>   




