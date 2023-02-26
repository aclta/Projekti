<?php
      
      include('../../includes/connect.php');
      include('../../functions/common_function.php');  
     
   
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registration</title>
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
             <form action="" method="post" enctype="multiple/form-data">
                <div class="form-outline mb-4">
                    <label for="user_username" class="form-label">Username</label>
                    <input type="text" name="user_username" id="user_username" class="form-control"
                     placeholder="Enter your username" required="required" autocomplete="off">
                </div>

                <div class="form-outline mb-4">
                    <label for="user_email" class="form-label">Email</label>
                    <input type="text" name="user_email" id="user_email" class="form-control"
                     placeholder="Enter your email" required="required" autocomplete="off">
                </div>

                <div class="form-outline mb-4">
                    <label for="user_password" class="form-label">Password</label>
                    <input type="password" name="user_password" id="user_password" class="form-control"
                     placeholder="Enter your password" required="required" autocomplete="off">
                </div>

                <div class="form-outline mb-4">
                    <label for="cf_user_password" class="form-label">Confirm Password</label>
                    <input type="password" name="cf_user_password" id="cf_user_password" class="form-control"
                     placeholder="Confirm password" required="required" autocomplete="off">
                </div>

                <div class="form-outline mb-4">
                    <label for="user_address" class="form-label">Address</label>
                    <input type="text" name="user_address" id="user_address" class="form-control"
                     placeholder="Enter your address" required="required" autocomplete="off">
                </div>
                
                <div class="form-outline mb-4">
                    <label for="user_contact" class="form-label">Contact</label>
                    <input type="text" name="user_contact" id="user_contact" class="form-control"
                     placeholder="Enter your mobile number" required="required" autocomplete="off">
                </div>

                <div class="mt-4 pt-2">
                   
                    <input type="submit" name="user_register" class=" py-2 px-3 border-0"value="Register"style="background-color:darkslategray;color:white;border-radius:5px;"
                 >
                    <p class="small fw-bold mt-2 pt-1">Already have an account?
                        <a href="user_login.php"style="color:#a16842;"> Login</a></p>
                        <p class="small fw-bold mt-2 pt-1">You are an admin?
                        <a href="../../admin/admin_login.php"style="color:#a16842;"> Login</a></p>
                </div>

             </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
getIPAddress();

if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $cf_user_password=$_POST['cf_user_password'];
   $user_ip=getIPAddress();
    $user_address=$_POST['user_address'];
    $user_contact=$_POST['user_contact'];
    
    $select_query="select * from `user_table` where username='$user_username' or user_email='$user_email'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo"<script>alert('Username and Email already exists')</script>";


    }else if($user_password!=$cf_user_password){
        echo"<script>alert('Passwords do not match')</script>";

    }else{
        $insert_query="insert into `user_table` (username,user_email,user_password,user_ip,user_address,user_mobile) values ('$user_username','$user_email','$hash_password','$user_ip','$user_address','$user_contact')";
        $sql_execute=mysqli_query($con,$insert_query);
    }

    $select_cart_items="Select * from `cart_details` where ip_address='$user_ip'";
    $result_cart=mysqli_query($con,$select_cart_items);
    $rows_count=mysqli_num_rows($result_cart);
    if($rows_count>0){
        $_SESSION['username']=$user_username;
        echo"<script>alert('You have items in your cart')</script>";
        echo"<script>window.open('checkout.php','_self')</script>";

    }else{
        echo"<script>window.open('../Index.php','_self')</script>";

    }

}

?>