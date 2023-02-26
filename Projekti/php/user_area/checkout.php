<?php
      
      include('../../includes/connect.php');
 
      
    
   
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
    <title>Checkout</title>
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-body-light "style="background-color:darkslategray;">
            <div class="container-fluid">
                <img src="../../Images/logo.png" class="logo" alt="" width="5%" height="5%">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active"style="color:white;" aria-current="page" href="../Home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link"style="color:white;" href="../Index.php">Products</a></li>
                        <li class="nav-item"><a class="nav-link"style="color:white;" href="user_registration.php">Register</a></li>
                        <li class="nav-item"><a class="nav-link"style="color:white;" href="#">Contact</a></li>

                    </ul>

                </div>
            </div>
        </nav>
        
        <?php
    //    function getIPAddress() {  
    //     //whether ip is from the share internet  
    //      if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
    //                 $ip = $_SERVER['HTTP_CLIENT_IP'];  
    //         }  
    //     //whether ip is from the proxy  
    //     elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
    //                 $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    //      }  
    // //whether ip is from the remote address  
    //     else{  
    //              $ip = $_SERVER['REMOTE_ADDR'];  
    //      }  
    //      return $ip;  
    // } 
     
 

?>
        <div class="bg-light">
            <h3 class="text-center">Products</h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- products -->
                <div class="row">
                <?php
                if(!isset($_SESSION['username'])){
                    include('user_login.php');
                }else{
                    include('payment.php');

                }
                ?>
                 </div>  
            </div>
            <!--Last child <div class="bg-info p-3 text-center">
             <p>All rights reserved</p>-->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>