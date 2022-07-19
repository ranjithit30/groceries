<?php
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}else{

?>
<div class="col-lg-10 col-sm-6 col-md-9" style="float: right;">
<div class="row"> <!--1 Row Start-->
	<div class="col-lg-12">
		<h1 class="page-header">Dashboard</h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard
			</li>
		</ol>
	</div>
</div> <!--1 Row End-->
<div class="row"> <!--2 Row Start-->
<div class="col-lg-3 col-md-6"> <!-- col-lg-3 col-md-6 Start -->
<div class="panel panel-voilet"> <!-- panel panel-blue Start -->
<div class="panel-heading"> <!-- panel-heading Start -->
<div class="row"> <!--panel-heading row Start-->
<div class="col-xs-3"><!--col-xs-3 Start-->
<i class="fa fa-tasks fa-5x"></i>
</div><!--col-xs-3 End-->	
<div class="col-xs-9 text-right"> <!-- col-xs-9 text-right Start -->
<div class="huge"><?php echo $count_pro ?></div>
<div>Products</div>
</div><!-- col-xs-9 text-right End -->
</div><!--panel-heading row End-->
</div><!--panel-heading End-->
<a href="index.php?view_product">
<div class="panel-footer"><!--  panel-footer Start -->
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix"></div>
</div> <!-- panel-footer Ends -->
</a>
</div> <!-- panel panel-blue End -->
</div> <!--col-lg-3 col-md-6 End-->

<div class="col-lg-3 col-md-6"> <!-- col-lg-3 col-md-6 Start -->
<div class="panel panel-voilet"> <!-- panel panel-yellow Start -->
<div class="panel-heading"> <!-- panel-heading Start -->
<div class="row"> <!-- panel-heading row Start -->
<div class="col-xs-3"> <!-- col-xs-3 Start -->
<i class="fa fa-shopping-cart fa-5x"></i>
</div> <!-- col-xs-3 End -->
<div class="col-xs-9 text-right"> <!-- col-xs-9 text-right Start -->
<div class="huge"><?php echo $count_p_cat ?></div>
<div>Products Categories</div>
</div> <!-- col-xs-9 text-right End -->
</div> <!-- panel-heading row End -->
</div> <!-- panel-heading End -->
<a href="index.php?view_product_cat">
<div class="panel-footer"> <!-- panel-footer Starts -->
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix"></div>
</div><!-- panel-footer End -->
</a>
</div> <!-- panel panel-yellow End -->
</div> <!-- col-lg-3 col-md-6 End -->

<div class="col-lg-3 col-md-6"> <!-- col-lg-3 col-md-6 Start -->
<div class="panel panel-voilet"> <!-- panel panel-yellow Start -->
<div class="panel-heading"> <!-- panel-heading Start -->
<div class="row"> <!-- panel-heading row Start -->
<div class="col-xs-3"> <!-- col-xs-3 Start -->
<i class="fa fa-clipboard fa-5x"></i>
</div> <!-- col-xs-3 End -->
<div class="col-xs-9 text-right"> <!-- col-xs-9 text-right Start -->
<div class="huge"><?php echo $count_cat ?></div>
<div>Categories</div>
</div> <!-- col-xs-9 text-right End -->
</div> <!-- panel-heading row End -->
</div> <!-- panel-heading End -->
<a href="index.php?view_categories">
<div class="panel-footer"> <!-- panel-footer Starts -->
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix"></div>
</div><!-- panel-footer End -->
</a>
</div> <!-- panel panel-yellow End -->
</div> <!-- col-lg-3 col-md-6 End -->


<div class="col-lg-3 col-md-6"> <!-- col-lg-3 col-md-6 Start -->
<div class="panel panel-voilet"> <!-- panel panel-red Start -->
<div class="panel-heading"> <!-- panel-heading Start -->
<div class="row"> <!-- panel-heading row Start -->
<div class="col-xs-3"> <!-- col-xs-3 Start -->
<i class="fa fa-support fa-5x"></i>
</div> <!-- col-xs-3 End -->
<div class="col-xs-9 text-right"> <!-- col-xs-9 text-right Start -->
<div class="huge"><?php echo $count_slider ?></div>
<div>Sliders</div>
</div> <!-- col-xs-9 text-right End -->
</div> <!-- panel-heading row End -->
</div> <!-- panel-heading End -->
<a href="index.php?view_slider">
<div class="panel-footer"> <!-- panel-footer Starts -->
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix"></div>
</div><!-- panel-footer End -->
</a>
</div> <!-- panel panel-red End -->
</div> <!-- col-lg-3 col-md-6 End -->



<div class="col-lg-3 col-md-6"> <!-- col-lg-3 col-md-6 Start -->
<div class="panel panel-voilet"> <!-- panel panel-green Start -->
<div class="panel-heading"> <!-- panel-heading Start -->
<div class="row"> <!-- panel-heading row Start -->
<div class="col-xs-3"> <!-- col-xs-3 Start -->
<i class="fa fa-signal fa-5x"></i>
</div> <!-- col-xs-3 End -->
<div class="col-xs-9 text-right"> <!-- col-xs-9 text-right Start -->
<div class="huge"><?php echo $count_cust ?></div>
<div>Customers</div>
</div> <!-- col-xs-9 text-right End -->
</div> <!-- panel-heading row End -->
</div> <!-- panel-heading End -->
<a href="index.php?view_customer">
<div class="panel-footer"> <!-- panel-footer Starts -->
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix"></div>
</div><!-- panel-footer End -->
</a>
</div> <!-- panel panel-green End -->
</div> <!-- col-lg-3 col-md-6 End -->

<div class="col-lg-3 col-md-6"> <!-- col-lg-3 col-md-6 Start -->
<div class="panel panel-voilet"> <!-- panel panel-red Start -->
<div class="panel-heading"> <!-- panel-heading Start -->
<div class="row"> <!-- panel-heading row Start -->
<div class="col-xs-3"> <!-- col-xs-3 Start -->
<i class="fa fa-sitemap fa-5x"></i>
</div> <!-- col-xs-3 End -->
<div class="col-xs-9 text-right"> <!-- col-xs-9 text-right Start -->
<div class="huge"><?php echo $count_order ?></div>
<div>Orders</div>
</div> <!-- col-xs-9 text-right End -->
</div> <!-- panel-heading row End -->
</div> <!-- panel-heading End -->
<a href="index.php?view_order">
<div class="panel-footer"> <!-- panel-footer Starts -->
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix"></div>
</div><!-- panel-footer End -->
</a>
</div> <!-- panel panel-red End -->
</div> <!-- col-lg-3 col-md-6 End -->

<div class="col-lg-3 col-md-6"> <!-- col-lg-3 col-md-6 Start -->
<div class="panel panel-voilet"> <!-- panel panel-red Start -->
<div class="panel-heading"> <!-- panel-heading Start -->
<div class="row"> <!-- panel-heading row Start -->
<div class="col-xs-3"> <!-- col-xs-3 Start -->
<i class="fa fa-info-circle fa-5x"></i>
</div> <!-- col-xs-3 End -->
<div class="col-xs-9 text-right"> <!-- col-xs-9 text-right Start -->
<div class="huge"><?php echo $count_payments ?></div>
<div>Payments</div>
</div> <!-- col-xs-9 text-right End -->
</div> <!-- panel-heading row End -->
</div> <!-- panel-heading End -->
<a href="index.php?view_payments">
<div class="panel-footer"> <!-- panel-footer Starts -->
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix"></div>
</div><!-- panel-footer End -->
</a>
</div> <!-- panel panel-red End -->
</div> <!-- col-lg-3 col-md-6 End -->

<div class="col-lg-3 col-md-6"> <!-- col-lg-3 col-md-6 Start -->
<div class="panel panel-voilet"> <!-- panel panel-red Start -->
<div class="panel-heading"> <!-- panel-heading Start -->
<div class="row"> <!-- panel-heading row Start -->
<div class="col-xs-3"> <!-- col-xs-3 Start -->
<i class="fa fa-info-circle fa-5x"></i>
</div> <!-- col-xs-3 End -->
<div class="col-xs-9 text-right"> <!-- col-xs-9 text-right Start -->
<div class="huge"><?php echo $count_admins ?></div>
<div>Users</div>
</div> <!-- col-xs-9 text-right End -->
</div> <!-- panel-heading row End -->
</div> <!-- panel-heading End -->
<a href="index.php?view_user">
<div class="panel-footer"> <!-- panel-footer Starts -->
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix"></div>
</div><!-- panel-footer End -->
</a>
</div> <!-- panel panel-red End -->
</div> <!-- col-lg-3 col-md-6 End -->


<div class="row"> <!--3rd row Start -->
<div class="col-lg-8" style="width:100%"> <!-- col-lg-8 Start -->
<div class="panel panel-primary"> <!-- panel panel-primary Start -->
<div class="panel-heading"> <!-- panel-heading Start -->
<h3 class="panel-title"> <!-- panel-title Start -->
<i class="fa fa-money fa-fw"></i> New Orders
</h3> <!-- panel-title End -->
</div> <!-- panel-heading End -->
<div class="panel-body"> <!-- panel-body Start -->
<div class="table-responsive"> <!-- table-responsive Start -->
<table class="table table-bordered table-hover table-striped"> <!-- table table-bordered table-hover table-striped Start -->
<thead> <!-- thead Start -->
<tr>
<th>Order No:</th>
<th>Customer Email:</th>
<th>Invoice No:</th>
<th>Product Id:</th>
<th>Total:</th>
<th>Date:</th>
<th>Status:</th>
</tr>
</thead> <!-- thead End -->
<tbody> <!-- tbody Start -->
<?php 
$i=0;
$get_order="select * from customer_order order by 1 DESC LIMIT 0,5";
$run_order=mysqli_query($con,$get_order);
while ($row_order=mysqli_fetch_array($run_order)) {
	$order_id=$row_order['order_id'];
	$customer_id=$row_order['customer_id'];
	$product_id=$row_order['product_id'];
	$invoice_no=$row_order['invoice_no'];
	$qty=$row_order['qty'];
	$size=$row_order['size'];
	$status=$row_order['order_status'];
	$i++;
?>
<tr>
<td><?php echo $i ?></td>
<td>
	<?php 
	$get_cust="select * from customers where customer_id='$customer_id' ";
	$run_cust=mysqli_query($con,$get_cust);
	$row_customer=mysqli_fetch_array($run_cust);
	$customer_email=$row_customer['customer_email'];
	echo $customer_email;
	?>
</td>
<td><?php echo $invoice_no ?></td>
<td><?php echo $product_id ?></td>
<td><?php echo $qty ?></td>
<td><?php echo $size ?></td>
<td><?php echo $status ?></td>
</tr>
<?php } ?>
</tbody> <!-- tbody End -->
</table><!-- table table-bordered table-hover table-striped End --> 
</div> <!-- table-responsive End -->
<div class="text-right"> <!-- text-right Start -->
<a href="index.php?view_order">
View All Orders <i class="fa fa-arrow-circle-right"></i>
</a>
</div> <!-- text-right End -->
</div><!-- panel-body End -->
</div> <!-- panel panel-primary End -->
</div> <!-- col-lg-8 End -->



</div>
<?php } ?>