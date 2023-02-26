<?php
   
        include('../includes/connect.php');
        if(isset($_POST['insert_cat'])){
         $category_name=$_POST['cat_name'];
         //select data from database
         $select_query="Select * from `categories` where category_name='$category_name'";
         $result_select = mysqli_query($con,$select_query);
         $number=mysqli_num_rows($result_select);
         if($number>0){
            echo"<script>alert('This category has already been inserted')</script>";
         }
         else{
         $insert_query="insert into `categories` (category_name) values ('$category_name')";
         $result=mysqli_query($con,$insert_query);
         if($result){
            echo"<script>alert('Category has been inserted successfully')</script>";
         }
        }
        }
    ?>
<h2 class="text-center">Insert Categories</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span style="background-color:darkslategray;" class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" name="cat_name" placeholder="Insert Categories"
        aria-label="Categories"  aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2">

        <input type="submit"style="background-color:darkslategray;border-radius:5px;color:white;" class="p-2  border-0" name="insert_cat" value="Insert Categories"
            placeholder="Insert Categories" aria-describedby="basic-addon1"> 
    </div>
</form>