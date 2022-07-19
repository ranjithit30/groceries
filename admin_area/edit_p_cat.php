<?php 
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
<?php 
if (isset($_GET['edit_p_cat'])) {
	$edit_p_cat_id=$_GET['edit_p_cat'];
	$edit_p_cat_query="select * from product_categories where p_cat_id='$edit_p_cat_id'";
	$run_edit=mysqli_query($con,$edit_p_cat_query);
	$row_edit=mysqli_fetch_array($run_edit);
	$p_cat_id=$row_edit['p_cat_id'];
	$p_cat_title=$row_edit['p_cat_title'];
	$p_cat_desc=$row_edit['p_cat_desc'];
}
?>

<div class="col-lg-10 col-sm-8 col-md-9" style="float: right;">

<div class="row"> <!-- row Start -->

<div class="col-lg-12"> <!-- col-lg-12 Start -->

<ol class="breadcrumb"> <!-- breadcrumb Start -->
	
<li class="active">
	
<i class="fa fa-dashboard"></i> Dashboard / Edit Products Categories

</li>

</ol> <!-- breadcrumb End -->


</div> <!-- col-lg-12 End -->
	
</div> <!-- row End --> 

<div class="row"> <!-- row Start -->
	
<div class="col-lg-12"> <!-- col-lg-12 Start -->

<div class="panel panel-default"> <!-- panel panel-default Start -->
	
<div class="panel-heading"> <!-- panel-heading Start -->
	
<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit Products Categories

</h3>

</div> <!-- panel-heading End -->

<div class="panel-body"> <!-- panel-body Start -->

<form class="form-horizontal" action="" method="post"> <!-- form-horizontal Start -->
	
<div class="form-group"> <!-- form-group Start -->
	
<label class="col-md-3 control-label">Product Category Title</label>

<div class="col-md-6">

<input type="text" name="p_cat_title" class="form-control" value="<?php echo $p_cat_title; ?>">

</div>

</div> <!-- form-group End -->

<div class="form-group"> <!-- form-group Start -->
	
<label class="col-md-3 control-label">Product Category Description</label>

<div class="col-md-6">

<textarea type="text" name="p_cat_desc" class="form-control">
<?php echo $p_cat_desc; ?>
</textarea>
</div>

</div> <!-- form-group End -->

<div class="form-group"> <!-- form-group Start -->
	
<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="update" value="Update Now" class="btn btn-primary form-control">

</div>

</div> <!-- form-group End -->

</form> <!-- form-horizontal End -->
</div> <!-- panel-body End -->

</div> <!-- panel panel-default End -->

</div> <!-- col-lg-12 End -->

</div> <!-- row End -->


<?php 
if (isset($_POST['update'])) {
	$p_cat_title=$_POST['p_cat_title'];
	$p_cat_desc=$_POST['p_cat_desc'];

	$update_p_cat="update product_categories set p_cat_title='$p_cat_title',p_cat_desc='$p_cat_desc' where p_cat_id='$p_cat_id'";
	$run_p_cat=mysqli_query($con,$update_p_cat);
	if ($run_p_cat) {
		echo "<script>alert('Product Category has been Updated')</script>";
		echo "<script>window,open('index.php?view_product_cat','_self')</script>";
	}
}
?>



<?php } ?>