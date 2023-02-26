<h3 class="text-center">All Users</h3>
<table class="table table-bordered mt-5">
    <thead style="background-color:darkslategray;color:white;" class="">
        <?php
    
    $get_users="Select * from `user_table`";
    $result=mysqli_query($con,$get_users);
    $row_count=mysqli_num_rows($result);
    echo "<tr>

    <th>User Id</th>
    <th>UserName</th>
    <th>User Email</th>
    <th>User Ip</th>
    <th>User Address</th>
    <th>User Mobile</th>
    <th>Delete</th>

</tr>
</thead>
<tbody>";

if($row_count==0){
    echo"<h2 class='text-center mt-5'>No users yet</h2>";
}else{
    $number=0;
    while($row_data=mysqli_fetch_assoc($result)){
        $user_id=$row_data['user_id'];
        $username=$row_data['username'];
        $user_email=$row_data['user_email'];
        $user_ip=$row_data['user_ip'];
        $user_address=$row_data['user_address'];
        $user_mobile=$row_data['user_mobile'];
        $number++;

        ?>
        <tr>
        <th><?php echo$user_id?></th>
        <th><?php echo$username?></th>
        <th><?php echo$user_email?></th>
        <th><?php echo$user_ip?></th>
        <th><?php echo$user_address?></th>
        <th><?php echo$user_mobile?></th>
        <th><a href="admin.php?delete_users=<?php echo $user_id?>"style="color:black;"><i class="fa-solid fa-trash"></i></a></th>


    </tr>
    <?php
    }
}
    ?>
      
    </tbody>
</table>