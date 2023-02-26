<?php
if(isset($_GET['delete_brands'])){
    $delete_id=$_GET['delete_brands'];
    
    $delete_brand="Delete from `brands` where brand_id=$delete_id";
    $result_brand=mysqli_query($con,$delete_brand);
    if($result_brand){
       echo"<script>alert('Brand deleted successfully')</script>";
       echo"<script>window.open('./php/Index.php')</script>";

    }
}
?>