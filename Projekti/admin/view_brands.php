<h3 class="text-center">All Brands</h3>
<table class="table table-bordered mt-5">
    <thead style="background-color:darkslategray;color:white;">
        <tr class="text-center">
            <th>Brand ID</th>
            <th>Brand title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $select_bra="Select * from `brands`";
        $result=mysqli_query($con,$select_bra);
        
        while($row=mysqli_fetch_assoc($result)){
             $brand_id=$row['brand_id'];
             $brand_name=$row['brand_name'];
           
        
        ?>
        <tr class="text-center">
            <th><?php echo $brand_id;?></th>
            <th><?php echo $brand_name;?></th>
            <th><a href="admin.php?edit_brands=<?php echo $brand_id?>"style="color:black;"><i class="fa-solid fa-pen-to-square"></i></a></th>
            <th><a href="admin.php?delete_brands=<?php echo $brand_id?>"style="color:black;"><i class="fa-solid fa-trash"></i></a></th>

        </tr>
        <?php
        }
        ?>
    </tbody>
</table>