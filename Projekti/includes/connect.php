<?php
$con=mysqli_connect('localhost','root','','mystore');
if($con){
    echo"Connection Succesful";
}else{
    die(mysqli_error($con));
}









// $con=mysqli_connect('localhost','root','','mystore');
// if(!$con)
//     die(mysqli_error($con));
// }
?>