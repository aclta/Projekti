<?php
      
      include('../includes/connect.php');
      
      
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
    <title>Admin Login</title>
</head>
<style>
    body {
        overflow: hidden;
    }
</style>

<body>
    <div class="container-fluid m-3"></div>
    <h2 class="text-center mb-4">Admin Login</h2>
    <div class="d-flex row  mt-5 align-items-center justify-content-center">
        <div class="col-lg-6 col-lx-5">
            <img src="../Images/images.png" width="80%" alt="">
        </div>
        <div class="col-lg-6 col-lx-4">
            <form action="" method="post">
                <div class="form-outline mb-4">

                    <label for="admin_name" class="form-label">Username</label>
                    <input type="text" name="admin_name" id="admin_name" class="form-control"
                        placeholder="Enter your username" required="required" autocomplete="off">

                    <div class="form-outline mb-4">
                        <label for="admin_password" class="form-label">Password</label>
                        <input type="password" name="admin_password" id="admin_password" class="form-control"
                            placeholder="Enter your password" required="required" autocomplete="off">
                    </div>
                    
                        <div>
                            <input type="submit" name="admin_login" class=" py-2 px-3 border-0"
                                style="background-color:darkslategray;color:white;border-radius:5px;" value="Login">
                            <p class="small fw-bold mt-2 pt-1 mb-0 ">Aren't Admin?
                                <a href="../php/user_area/user_registration.php" style="color:#a16842;"> Go Back</a></p>
                        </div>
                    </form>
                    </div>
                </div>
            

        </div>
    </div>
</div>
</body>

</html>
<?php
if(isset($_POST['admin_login'])){
    $admin_name=$_POST['admin_name'];
     $admin_password=$_POST['admin_password'];

    $select_query="select * from `admin_table` where admin_name='$admin_name'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);


    if($rows_count>0){
        $_SESSION['admin_name']=$admin_name;
        if(password_verify($admin_password,$row_data['admin_password'])){
            // echo"<script>alert('Login successful')</script>";
             if($rows_count==1 and $rows_count_cart==0){
                $_SESSION['admin_name']=$admin_name;
               echo"<script>alert('Login successful')</script>";
               echo"<script>window.open('admin.php','_self')</script>";
             }else{
                $_SESSION['admin_name']=$admin_name;
               echo"<script>alert('Login successful')</script>";
               echo"<script>window.open('admin.php','self')</script>";
             }
        }else{
        echo"<script>alert('Invalid credencials')</script>";
        }
    }else{
        echo"<script>alert('Invalid credencials')</script>";
        }
}
?>