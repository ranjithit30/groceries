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
<i class="fa fa-dashboard"></i> Dashboard / View Products Categories
</li>
</ol> <!-- breadcrumb End -->
</div> <!-- col-lg-12 End -->
</div> <!-- row End -->

<div class="row"> <!-- row Start -->
<div class="col-lg-12"> <!-- col-lg-12 Start -->
<div class="panel panel-default"> <!-- panel panel-default Start -->
<div class="panel-heading"> <!-- panel-heading Start -->
<h3 class="panel-title"> <!-- panel-title Start -->
<i class="fa fa-money fa-fw"></i> View Products Categories
</h3> <!-- panel-title end -->
</div> <!-- panel-heading End -->

<div class="panel-body"> <!-- panel-body Start -->
<div class="table-responsive"> <!-- table-responsive Start -->
<table class="table table-bordered table-hover table-striped"> <!-- table table-bordered table-hover table-striped Start -->
<thead> <!-- thead Start -->
<tr>
<th>Product Category Id</th>
<th>Product Category Title</th>
<th>Product Category Description</th>
<th>Delete Product Category</th>
<th>Edit Product Category</th>
</tr>
</thead> <!-- thead End -->
<tbody> <!-- tbody Start -->
<?php 
$i=0;
$get_p_cats="select * from product_categories";
$run_p_cats=mysqli_query($con,$get_p_cats);
while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
	$p_cat_id=$row_p_cats['p_cat_id'];
	$p_cat_title=$row_p_cats['p_cat_title'];
	$p_cat_desc=$row_p_cats['p_cat_desc'];
	$i++;
?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $p_cat_title; ?></td>
<td width="300"><?php echo $p_cat_desc; ?></td>
<td>
<a href="index.php?delete_p_cat=<?php echo $p_cat_id; ?>">
<i class="fa fa-trash-o"></i> Delete
</a>
</td>
<td>
<a href="index.php?edit_p_cat=<?php echo $p_cat_id; ?>">
<i class="fa fa-pencil"></i> Edit
</a>
</td>
</tr>
<?php } ?>
</tbody> <!-- tbody End --> 
</table> <!-- table table-bordered table-hover table-striped End -->	
</div> <!-- table-responsive end -->
</div> <!-- panel-body End -->
</div> <!-- panel panel-default End -->
</div> <!-- col-lg-12 End -->
</div> <!-- row End -->  
</div>
<?php } ?>