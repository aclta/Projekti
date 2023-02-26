
<?php
      
      include('../includes/connect.php');
      
     
   
   
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
    <h2 class="text-center mb-4">Admin Registration</h2>
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
                    <label for="admin_email" class="form-label">Email</label>
                    <input type="text" name="admin_email" id="admin_email" class="form-control"
                     placeholder="Enter your email" required="required" autocomplete="off">
                </div>
                    <div class="form-outline mb-4">
                        <label for="admin_password" class="form-label">Password</label>
                        <input type="admin_password" name="admin_password" id="admin_password" class="form-control"
                            placeholder="Enter your password" required="required" autocomplete="off">
                    </div>
                    
                        <div>
                            <input type="submit" name="admin_register" class=" py-2 px-3 border-0"
                                style="background-color:darkslategray;color:white;border-radius:5px;" value="Register">
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
getIPAddress();

if(isset($_POST['admin_register'])){
    $admin_name=$_POST['admin_name'];
    $admin_email=$_POST['admin_email'];
    $admin_password	=$_POST['admin_password'];
    $hash_password=password_hash($admin_password,PASSWORD_DEFAULT);
   
    $select_query="select * from `admin_table` where admin_name='$admin_name' or admin_email='$admin_email'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo"<script>alert('Admin name and email already exists')</script>";


    }else{
        $insert_query="insert into `admin_table` (admin_name,admin_email,admin_password) values ('$admin_name','$admin_email','$hash_password')";
        $sql_execute=mysqli_query($con,$insert_query);
    }



}

?>