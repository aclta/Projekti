<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/453ddbb027.js" crossorigin="anonymous"></script>
    <title>All Products</title>
</head>

<body>
    <h3 class="text-center">All Products</h3>
    <table class="table-bordered mt-5 table">
        <thead style="background-color:darkslategray;color:white;">
            <tr class="text-center">
                <th>Product Id</th>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Total Sold</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
        <tbody>
            <?php
            $get_products="Select * from `products`";
            $result=mysqli_query($con,$get_products);
            while($row=mysqli_fetch_assoc($result)){
                
                $product_id=$row["product_id"];
                $product_name=$row["product_name"];
                $product_image=$row["product_image"];
                $product_price=$row["product_price"];
                $status=$row["status"];
                ?>
                <tr class="text-center">
                <th><?php echo $product_id?></th>
                <th><?php echo $product_name?></th>
                <th><img src="../Images/<?php echo $product_image?>" width="25px"heigth="6%"></th>
                <th><?php echo $product_price?> €</th>
                <th><?php
                     $get_count="Select * from `orders_pending` where product_id=$product_id";
                     $result_count=mysqli_query($con,$get_count);
                    $rows_count=mysqli_num_rows( $result_count);
                    echo $rows_count;?>
                 </th>
                <th><?php echo$status?></th>
                <th><a href="admin.php?edit_products=<?php echo $product_id?>" style="color:black;"><i class="fa-solid fa-pen-to-square"></i></a></th>
                <th><a href="admin.php?delete_product=<?php echo $product_id?>"style="color:black;"><i class="fa-solid fa-trash"></i></a></th>


            </tr>
          
            <?php
             }
            ?>
        
        </tbody>
        </thead>
    </table>
</body>

</html>