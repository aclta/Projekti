<?php
if(isset($_GET['edit_categories'])){
    $edit_category=$_GET['edit_categories'];

    $get_categories="Select * from `categories` where category_id=$edit_category";
    $result=mysqli_query($con,$get_categories);
    $row=mysqli_fetch_assoc($result);
    $category_title=$row['category_name'];
   
}
    if(isset($_POST['edit_cat'])){
        $cat_title=$_POST['category_title'];

        $update_query="Update `categories` set category_name='$cat_title' 
        where category_id='$edit_category'";
        $result_cat=mysqli_query($con,$update_query);
        if($result_cat){
         echo "<script>alert('Category has been updated successfully')</script>";
         echo "<script>window.open('./admin.php?view_categories.php','_self')</script>";

        }


}
?>

<div class="container mt-3">
    <h1 class="text-center">Edit Category</h1>
    <form action="" method="post" class="text-center">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="category_title" class="form-label">Category Title</label>
            <input type="text" name="category_title" id="category_title" class="form-control" required="required"value='<?php echo $category_title;?>'>
            <input type="submit" name="edit_cat" value="Update Categories" style="background-color:darkslategray;color:white;"
                class="btn px-3 mt-3 mb-3">
        </div>
    </form>
</div>