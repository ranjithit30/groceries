<?php 
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
else{


?>

<div class="col-lg-10 col-sm-8 col-md-9" style="float: right;">

<div class="row"> <!-- row Start --> 
	
<div class="col-lg-12"> <!-- col-lg-12 Start -->

<ol class="breadcrumb"> <!-- breadcrumb Start -->

<li class="active">
	
<i class="fa fa-dashboard"></i> Dashboard / View Orders

</li>
	
</ol> <!-- breadcrumb End -->

</div> <!-- col-lg-12 End --> 

</div> <!-- row End --> 

<div class="row"> <!-- 2nd row Start -->

<div class="col-lg-12"> <!-- col-lg-12 Start -->
	
<div class="panel panel-default"> <!-- panel panel-default Start -->
	
<div class="panel-heading"> <!-- panel-heading Start -->
	
<h3 class="panel-title"> <!-- panel-title Start -->
	
<i class="fa fa-money fa-fw"></i> View Orders

</h3> <!-- panel-title End -->

</div> <!-- panel-heading End -->

<div class="panel-body"> <!-- panel-body Start -->
	
<div class="table-responsive"><!--  table-responsive start -->
	
<table class="table table-bordered table-hover table-striped"> <!-- table table-bordered table-hover table-striped start -->

<thead> <!-- thead Start -->

<tr>

<th>Order No</th>
<th>Customer Email</th>
<th>Invoice No</th>
<th>Product Title</th>
<th>Product Qty</th>
<th>Product Size</th>
<th>Order Date</th>
<th>Total Amount</th>
<th>Order Status</th>
<th>Delete Order</th>

</tr>
	
</thead> <!-- thead end -->

<tbody> <!-- tbody Start -->
	
<?php 
$i=0;
$get_orders="select * from customer_order";
$run_orders=mysqli_query($con,$get_orders);
while ($row_orders=mysqli_fetch_array($run_orders)) {
	$order_id=$row_orders['order_id'];
	$c_id=$row_orders['customer_id'];
	$invoice_no=$row_orders['invoice_no'];
	$product_id=$row_orders['product_id'];
	$qty=$row_orders['qty'];
	$size=$row_orders['size'];
	$order_date=$row_orders['order_date'];
	$due_amount=$row_orders['due_amount'];
	$order_status=$row_orders['order_status'];
	$get_products="select * from products where product_id='$product_id'";
	$run_products=mysqli_query($con,$get_products);
	$row_products=mysqli_fetch_array($run_products);
	$product_title=$row_products['product_title'];
	$i++;
?>

<tr>

<td><?php echo $i; ?></td>
<td>
<?php 
$get_customer="select * from customers where customer_id='$c_id'";
$run_customer=mysqli_query($con,$get_customer);
$row_customer=mysqli_fetch_array($run_customer);
$customer_email=$row_customer['customer_email'];
echo $customer_email;
?>	
</td>
<td bgcolor="yellow"><?php echo $invoice_no; ?></td>
<td><?php echo $product_title; ?></td>
<td><?php echo $qty; ?></td>
<td><?php echo $size; ?></td>
<td><?php echo $order_date; ?></td>
<td>Rs.<?php echo $due_amount; ?></td>
<td>
<?php 
if ($order_status=='pending') {
	echo $order_status='Pending';
}
else{
	echo $order_status='Completed';
}
?>
</td>
<td>
<a href="index.php?order_delete=<?php echo $order_id; ?>">
<i class="fa fa-trash-o"></i> Delete
</a>
</td>
</tr>

<?php } ?>

</tbody> <!-- tbody end -->

</table> <!-- table table-bordered table-hover table-striped end -->

</div> <!--  table-responsive End -->

</div> <!-- panel-body end -->

</div>

</div>

</div>

</div>


<?php } ?>