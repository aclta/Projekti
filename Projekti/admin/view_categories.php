<h3 class="text-center">All Categories</h3>
<table class="table table-bordered mt-5">
    <thead style="background-color:darkslategray;color:white;">
        <tr class="text-center">
            <th>Category ID</th>
            <th>Category title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $select_cat="Select * from `categories`";
        $result=mysqli_query($con,$select_cat);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
             $category_id=$row['category_id'];
             $category_name=$row['category_name'];
           $number++;
        
        ?>
        <tr class="text-center">
            <th><?php echo $category_id;?></th>
            <th><?php echo $category_name;?></th>
            <th><a href="admin.php?edit_categories=<?php echo $category_id?>"style="color:black;"><i class="fa-solid fa-pen-to-square"></i></a></th>
            <th><a href="admin.php?delete_categories=<?php echo $category_id?>"style="color:black;"><i class="fa-solid fa-trash"></i></a></th>

        </tr>
        <?php
        }
        ?>
    </tbody>
</table>