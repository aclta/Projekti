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
    <title>Payment</title>
</head>
<style>
    img{
        margin-left:25%;
        width:50%;
    }
</style>
<body>
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
    $user_ip=getIpAddress();
    $get_user="Select * from `user_table` where user_ip='$user_ip'";
    $result=mysqli_query($con,$get_user); 
    $run_query=mysqli_fetch_array($result); 
    $user_id=$run_query['user_id'];
    
    ?>
    <div class="continer">
        <h2 class="text-center" style="color:darkslategray;">Confirm your payment</h2>
        <div class="row d-flex justify-content-center align-items-center my-5">
       
            <div class="col-md-6">
                <a href="order.php?user_id=<?php echo $user_id;?>"><h2 class="text-center">Confirm here.You will pay in cash after receiving the order</h2></a>
            </div>
        </div>
    </div>
</body>
<!-- =//<//?php echo $user_id;?> -->
</html>