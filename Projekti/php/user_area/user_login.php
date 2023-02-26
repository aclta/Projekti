<?php
      
      include('../../includes/connect.php');
      
      
      @session_start();
    
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<style>
    body {
        overflow-x: hidden;
    }
</style>

<body>
    <div class="container-fluid">
        <h2 class="text-center">User Login</h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" name="user_username" id="user_username" class="form-control"
                            placeholder="Enter your username" required="required" autocomplete="off">
                    </div>



                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" name="user_password" id="user_password" class="form-control"
                            placeholder="Enter your password" required="required" autocomplete="off">
                    </div>
            </div>

            <div class="row d-flex mt-4 pt-2 align-items-center justify-content-center">
                <div class="col-lg-12 col-xl-6">
                    <input type="submit" name="user_login" class=" py-2 px-3 border-0"
                        style="background-color:darkslategray;color:white;border-radius:5px;" value="Login">
                    <p class="small fw-bold mt-2 pt-1 mb-0 ">Don't have an account?
                        <a href="user_registration.php" style="color:#a16842;"> Register</a></p>
                </div>
            </div>

            </form>
        </div>
    </div>


</body>

</html>
<?php

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
if(isset($_POST['user_login'])){
    $user_username=$_POST['user_username'];
     $user_password=$_POST['user_password'];

    $select_query="select * from `user_table` where username='$user_username'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    $user_ip=getIPAddress();




    //cart item
    $select_query_cart="Select * from `cart_details` where ip_address='$user_ip'";
    $select_cart=mysqli_query($con,$select_query_cart);
    $rows_count_cart=mysqli_num_rows($select_cart);

    if($rows_count>0){
        $_SESSION['user_username']=$user_username;
        if(password_verify($user_password,$row_data['user_password'])){
            // echo"<script>alert('Login successful')</script>";
             if($rows_count==1 and $rows_count_cart==0){
                $_SESSION['user_username']=$user_username;
               echo"<script>alert('Login successful')</script>";
               echo"<script>window.open('profile.php','_self')</script>";
             }else{
                $_SESSION['user_username']=$user_username;
               echo"<script>alert('Login successful')</script>";
               echo"<script>window.open('payment.php','_self')</script>";
             }
        }else{
        echo"<script>alert('Invalid credencials')</script>";
        }
    }else{
        echo"<script>alert('Invalid credencials')</script>";
        }
}
?>