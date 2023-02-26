<h3 class="text-center">All Orders</h3>
<table class="table table-bordered mt-5">
    <thead style="background-color:darkslategray;color:white;" class="">
        <?php
    
    $get_orders="Select * from `user_orders`";
    $result=mysqli_query($con,$get_orders);
    $row_count=mysqli_num_rows($result);
    echo "<tr>

    <th>Order ID</th>
    <th>User Id</th>
    <th>Due Amount</th>
    <th>Invoice Number</th>
    <th>Total Products</th>
    <th>Order Date</th>
    <th>Status</th>
    <th>Delete</th>

</tr>
</thead>
<tbody>";

if($row_count==0){
    echo"<h2 class='text-center mt-5'>No orders yet</h2>";
}else{
    $number=0;
    while($row_data=mysqli_fetch_assoc($result)){
        $order_id=$row_data['order_id'];
        $user_id=$row_data['user_id'];
        $amount_due=$row_data['amount_due'];
        $invoice_number=$row_data['invoice_number'];
        $total_products=$row_data['total_products'];
        $order_date=$row_data['order_date'];
        $order_status=$row_data['order_status'];
        $number++;

        ?>
        <tr>
        <th><?php echo$order_id?></th>
        <th><?php echo$user_id?></th>
        <th><?php echo$amount_due?> €</th>
        <th><?php echo$invoice_number?></th>
        <th><?php echo$total_products?></th>
        <th><?php echo$order_date?></th>
        <th><?php echo$order_status?></th>
        <th><a href="admin.php?delete_orders=<?php echo $order_id?>"style="color:black;"><i class="fa-solid fa-trash"></i></a></th>


    </tr>
    <?php
    }
}
    ?>
      
    </tbody>
</table>