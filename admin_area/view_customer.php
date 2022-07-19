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
	
<i class="fa fa-dashboard"></i> Dashboard / View Customers

</li>
	
</ol> <!-- breadcrumb End -->

</div> <!-- col-lg-12 End --> 

</div> <!-- row End --> 

<div class="row"> <!-- 2nd row Start -->

<div class="col-lg-12"> <!-- col-lg-12 Start -->
	
<div class="panel panel-default"> <!-- panel panel-default Start -->
	
<div class="panel-heading"> <!-- panel-heading Start -->
	
<h3 class="panel-title"> <!-- panel-title Start -->
	
<i class="fa fa-money fa-fw"></i> View Customers

</h3> <!-- panel-title End -->

</div> <!-- panel-heading End -->

<div class="panel-body"> <!-- panel-body Start -->
	
<div class="teble-responsive"> <!-- teble-responsive Start -->
	
<table class="table table-bordered table-hover table-striped"> <!-- table table-bordered table-hover table-striped Start -->

<thead> <!-- thead Start -->
	
<tr>
	<th>Customer No</th>
	<th>Customer Name</th>
	<th>Customer Email</th>
	<th>Customer Image</th>
	<th>Customer Country</th>
	<th>Customer City</th>
	<th>Customer Phone Number</th>
	<th>Customer Delete</th>
</tr>

</thead> <!-- thead End --> 
	
<tbody> <!-- tbody Start -->
	
<?php 

$i=0;

$get_c="select * from customers";

$run_c=mysqli_query($con,$get_c);

while ($row_c=mysqli_fetch_array($run_c)) {
	$c_id=$row_c['customer_id'];
	$c_name=$row_c['customer_name'];
	$c_email=$row_c['customer_email'];
	$c_image=$row_c['customer_image'];
	$c_country=$row_c['customer_country'];
	$c_city=$row_c['customer_city'];
	$c_contact=$row_c['customer_contact'];
	$i++;

?>

<tr>
<td><?php echo $i; ?></td>
<td><?php echo $c_name; ?></td>
<td><?php echo $c_email; ?></td>
<td><center><img src="../customer/customer_images/<?php echo $c_image; ?>" width="70" height="60"></center></td>
<td><?php echo $c_country; ?></td>
<td><?php echo $c_city; ?></td>
<td><?php echo $c_contact; ?></td>
<td>
<a href="index.php?customer_delete=<?php echo $c_id; ?>">
<i class="fa fa-trash-o"></i> Delete
</a>
</td>
</tr>

<?php } ?>

</tbody> <!-- tbody End --> 

</table> <!-- table table-bordered table-hover table-striped end -->

</div> <!-- teble-responsive end -->

</div> <!-- panel-body end -->

</div>

</div>

</div>

</div>

<?php } ?>