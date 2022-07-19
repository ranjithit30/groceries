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
	
<i class="fa fa-dashboard"></i> Dashboard / View Users

</li>
	
</ol> <!-- breadcrumb End -->

</div> <!-- col-lg-12 End --> 

</div> <!-- row End --> 

<div class="row"> <!-- 2nd row Start -->

<div class="col-lg-12"> <!-- col-lg-12 Start -->
	
<div class="panel panel-default"> <!-- panel panel-default Start -->
	
<div class="panel-heading"> <!-- panel-heading Start -->
	
<h3 class="panel-title"> <!-- panel-title Start -->
	
<i class="fa fa-money fa-fw"></i> View Users

</h3> <!-- panel-title End -->

</div> <!-- panel-heading End -->

<div class="panel-body"> <!-- panel-body Start -->
	
<div class="teble-responsive"> <!-- teble-responsive Start -->
	
<table class="table table-bordered table-hover table-striped"> <!-- table table-bordered table-hover table-striped Start -->

<thead> <!-- thead Start -->
	
<tr>
	<th>User No</th>
	<th>User Name</th>
	<th>User Email</th>
	<th>User Image</th>
	<th>User Country</th>
	<th>User Job</th>
	<th>Delete User</th>
</tr>

</thead> <!-- thead End --> 
	
<tbody> <!-- tbody Start -->
	
<?php 

$i=0;

$get_admin="select * from admins";

$run_admin=mysqli_query($con,$get_admin);

while ($row_admin=mysqli_fetch_array($run_admin)) {
	$admin_id=$row_admin['admin_id'];
	$admin_name=$row_admin['admin_name'];
	$admin_email=$row_admin['admin_email'];
	$admin_image=$row_admin['admin_image'];
	$admin_country=$row_admin['admin_country'];
	$admin_job=$row_admin['admin_job'];
	$i++;

?>

<tr>
<td><?php echo $i; ?></td>
<td><?php echo $admin_name; ?></td>
<td><?php echo $admin_email; ?></td>
<td><center><img src="admin_images/<?php echo $admin_image; ?>" width="70" height="60"></center></td>
<td><?php echo $admin_country; ?></td>
<td><?php echo $admin_job; ?></td>
<td>
<a href="index.php?admin_delete=<?php echo $admin_id; ?>">
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





<?php 
}
?>