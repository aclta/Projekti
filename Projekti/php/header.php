<?php
include('../includes/connect.php');
include('../functions/common_function.php');


?>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/453ddbb027.js" crossorigin="anonymous">
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  #lggg{
    width:70px;
    height:70px;

  }
</style>
<body>


    <div class="container-fluid p-0" style="background-color:darkslategray;">
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg bg-body-light " style="background-color:darkslategray;">
                <div class="container-fluid">
                    <img src="../Images/logo.png"id="lggg" class="logo" alt="" width="2%" height="2%">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link active" style="color:white;" aria-current="page"
                                    href="home.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" style="color:white;" href="index.php">Products</a>
                            </li>
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
                            <li class="nav-item"><a class="nav-link" style="color:white;" href="#">Total Price:
                                    <?php
                     
                      
            
                      total_cart_price();
                      
                      ?>€</a></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>

</body>

</html>