<?php
if(isset($_GET['delete_users'])){
    $delete_id=$_GET['delete_users'];
    
    $delete_users="Delete from `user_table` where user_id='$delete_id'";
    $result_orders=mysqli_query($con,$delete_users);
    if($result_orders){
       echo"<script>alert('User deleted successfully')</script>";
       echo"<script>window.open('./php/Index.php')</script>";

    }
}
?>