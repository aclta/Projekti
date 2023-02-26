<?php
   
        include('../includes/connect.php');
        if(isset($_POST['insert_brands'])){
         $brand_name=$_POST['brands_title'];
         //select data from database
         $select_query="Select * from `brands` where brand_name='$brand_name'";
         $result_select = mysqli_query($con,$select_query);
         $number=mysqli_num_rows($result_select);
         if($number>0){
            echo"<script>alert('This brand already been inserted')</script>";
         }
         else{
         $insert_query="insert into `brands` (brand_name) values ('$brand_name')";
         $result=mysqli_query($con,$insert_query);
         if($result){
            echo"<script>alert('Brand has been inserted successfully')</script>";
         }
        }
        }
    ?>
<h2 class="text-center">Insert Brands</h2>

<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span style="background-color:darkslategray;" class="input-group-text " id="basic-addon1"><i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" name="brands_title" placeholder="Insert Brands"
        aria-label="Brands"  aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2">

    <input type="submit"style="background-color:darkslategray;border-radius:5px;color:white;" class=" p-2  border-0" name="insert_brands" value="Insert Brands"
            placeholder="Insert Brands" aria-describedby="basic-addon1"> 

            
    </div>
</form>