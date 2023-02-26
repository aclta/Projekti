<?php
if(isset($_GET['edit_brands'])){
    $edit_brand=$_GET['edit_brands'];

    $get_brands="Select * from `brands` where brand_id=$edit_brand";
    $result=mysqli_query($con,$get_brands);
    $row=mysqli_fetch_assoc($result);
    $brand_title=$row['brand_name'];
   
}
    if(isset($_POST['edit_bra'])){
        $brand_title=$_POST['brand_title'];

        $update_query="Update `brands` set brand_name='$brand_title' 
        where brand_id='$edit_brand'";
        $result_bra=mysqli_query($con,$update_query);
        if($result_bra){
         echo "<script>alert('Brand has been updated successfully')</script>";
         echo "<script>window.open('./admin.php?view_brands.php','_self')</script>";

        }


}
?>

<div class="container mt-3">
    <h1 class="text-center">Edit Brand</h1>
    <form action="" method="post" class="text-center">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="brand_title" class="form-label">Brand Title</label>
            <input type="text" name="brand_title" id="brand_title" class="form-control" required="required"value='<?php echo $brand_title;?>'>
            <input type="submit" name="edit_bra" value="Update Categories" style="background-color:darkslategray;color:white;"
                class="btn px-3 mt-3 mb-3">
        </div>
    </form>
</div>