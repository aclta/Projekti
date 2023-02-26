<?php
      include('../includes/connect.php');
      include('../functions/common_function.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/453ddbb027.js" crossorigin="anonymous"></script>
    <title>Admin Dashboard</title>
</head>

<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg bg-body-light " style="background-color:darkslategray;">
            <div class="container-fluid">
                <img src="../Images/logo.png" class="logo" alt="" width="5%" height="5%">

                <nav class="navbar navbar-expand-lg bg-body-light" style="background-color:darkslategray;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!--third child-->
        <div class="row">
            <div class="col-md-12  p-1 d-flex align-items-center" style="background-color:#a16842;">
                <div class="p-3">
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">

                    <button style="background-color:darkslategray;border-radius:5px;" class="my-3">
                    <a href="insert_products.php" class="nav-link text-light my-1 p-1">Insert Products</a>
                </button>

                    <button style="background-color:darkslategray;border-radius:5px;">
                    <a href="admin.php?view_products"class="nav-link text-light  my-1 p-1">View Products</a>
                        </button>

                    <button style="background-color:darkslategray;border-radius:5px;">
                    <a href="admin.php?insert_categories" class="nav-link text-light my-1 p-1">Insert Categories</a>
                </button>

                    <button style="background-color:darkslategray;border-radius:5px;">
                    <a href="admin.php?view_categories"class="nav-link text-light  my-1 p-1">View Categories</a>
                        </button>

                    <button style="background-color:darkslategray;border-radius:5px;">
                          <a href="admin.php?insert_brands"  class="nav-link text-light  my-1 p-1">Insert Brands</a>
                        </button>

                    <button style="background-color:darkslategray;border-radius:5px;">
                           <a href="admin.php?view_brands" class="nav-link text-light  my-1 p-1">View Brands</a>
                        </button>

                    <button style="background-color:darkslategray;border-radius:5px;">
                          <a href="admin.php?list_orders"  class="nav-link text-light  my-1 p-1">All Orders</a>
                        </button>

                    <button style="background-color:darkslategray;border-radius:5px;">
                    <a href="admin.php?list_users"class="nav-link text-light  my-1 p-1">List Users</a>
                        </button>
                        <button style="background-color:darkslategray;border-radius:5px;">
                    <a href="admin.php?admin_registration"class="nav-link text-light  my-1 p-1">Add Admin</a>
                        </button>

                    <button style="background-color:darkslategray;border-radius:5px;">
                    <a href="../php/Index.php"class="nav-link text-light  my-1 p-1">Logout</a>
                        </button>






                </div>

            </div>
        </div>
    </div>
    <!--fourth child-->
    <div class="container my-3">
        <?php
    if(isset($_GET['insert_categories'])){
        include('insert_categories.php');
    }
    if(isset($_GET['insert_brands'])){
        include('insert_brands.php');
    }
    if(isset($_GET['view_products'])){
        include('view_products.php');
    }
    if(isset($_GET['edit_products'])){
        include('edit_products.php');
    }
    if(isset($_GET['delete_product'])){
        include('delete_product.php');
    }
    if(isset($_GET['view_categories'])){
        include('view_categories.php');
    }
    if(isset($_GET['view_brands'])){
        include('view_brands.php');
    }
    if(isset($_GET['edit_brands'])){
        include('edit_brands.php');
    }
    if(isset($_GET['edit_categories'])){
        include('edit_categories.php');
    }
    if(isset($_GET['delete_brands'])){
        include('delete_brands.php');
    }
    if(isset($_GET['delete_categories'])){
        include('delete_categories.php');
    }
    if(isset($_GET['list_orders'])){
        include('list_orders.php');
    }
    if(isset($_GET['list_users'])){
        include('list_users.php');
    }
    if(isset($_GET['delete_orders'])){
        include('delete_orders.php');
    }
    if(isset($_GET['delete_users'])){
        include('delete_users.php');
    }
    if(isset($_GET['admin_registration'])){
        include('admin_registration.php');
    }
    ?>
    </div>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>