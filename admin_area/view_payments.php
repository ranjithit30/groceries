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
	
<i class="fa fa-dashboard"></i> Dashboard / View Payments

</li>
	
</ol> <!-- breadcrumb End -->

</div> <!-- col-lg-12 End --> 

</div> <!-- row End --> 

<div class="row"> <!-- 2nd row Start -->

<div class="col-lg-12"> <!-- col-lg-12 Start -->
	
<div class="panel panel-default"> <!-- panel panel-default Start -->
	
<div class="panel-heading"> <!-- panel-heading Start -->
	
<h3 class="panel-title"> <!-- panel-title Start -->
	
<i class="fa fa-money fa-fw"></i> View Payments

</h3> <!-- panel-title End -->

</div> <!-- panel-heading End -->

<div class="panel-body"> <!-- panel-body Start -->
	
<div class="table-responsive"><!--  table-responsive start -->
	
<table class="table table-bordered table-hover table-striped"> <!-- table table-bordered table-hover table-striped start -->

<thead> <!-- thead Start -->

<tr>

<th>Payment No</th>
<th>Invoice No</th>
<th>Amount Paid</th>
<th>Payment Method</th>
<th>Reference No</th>
<th>Payment Date</th>
<th>Delete Payment</th>

</tr>
	
</thead> <!-- thead end -->

<tbody> <!-- tbody Start -->
	
<?php 
$i=0;
$get_payments="select * from payments";
$run_payments=mysqli_query($con,$get_payments);
while ($row_payments=mysqli_fetch_array($run_payments)) {
	$payment_id=$row_payments['payment_id'];
	$invoice_no=$row_payments['invoice_id'];
	$amount=$row_payments['amount'];
	$payment_mode=$row_payments['payment_mode'];
	$ref_no=$row_payments['ref_no'];
	$payment_date=$row_payments['payment_date'];
	$i++;
?>

<tr>

<td><?php echo $i; ?></td>
<td bgcolor="yellow"><?php echo $invoice_no; ?></td>
<td><?php echo $amount; ?></td>
<td><?php echo $payment_mode; ?></td>
<td><?php echo $ref_no; ?></td>
<td><?php echo $payment_date; ?></td>
<td>
<a href="index.php?payment_delete=<?php echo $payment_id; ?>">
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