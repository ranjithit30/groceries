<?php 
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
else{


?>


<?php 
if (isset($_GET['edit_cat'])) {
	$edit_id=$_GET['edit_cat'];
	$edit_cat="select * from categories where cat_id='$edit_id'";
	$run_edit=mysqli_query($con,$edit_cat);
	$row_edit=mysqli_fetch_array($run_edit);
	$c_id=$row_edit['cat_id'];
	$c_title=$row_edit['cat_title'];
	$c_desc=$row_edit['cat_desc'];
}
?>

<div class="col-lg-10 col-sm-8 col-md-9" style="float: right;">

<div class="row"> <!-- row Start --> 
	
<div class="col-lg-12"> <!-- col-lg-12 Start -->

<ol class="breadcrumb"> <!-- breadcrumb Start -->

<li class="active">
	
<i class="fa fa-dashboard"></i> Dashboard / Edit Categories

</li>
	
</ol> <!-- breadcrumb End -->

</div> <!-- col-lg-12 End --> 

</div> <!-- row End --> 

<div class="row"> <!-- 2nd row Start -->

<div class="col-lg-12"> <!-- col-lg-12 Start -->
	
<div class="panel panel-default"> <!-- panel panel-default Start -->
	
<div class="panel-heading"> <!-- panel-heading Start -->
	
<h3 class="panel-title"> <!-- panel-title Start -->
	
<i class="fa fa-money fa-fw"></i> Edit Categories

</h3> <!-- panel-title End -->

</div> <!-- panel-heading End -->

<div class="panel-body"> <!-- panel-body Start -->
	
<form class="form-horizontal" action="" method="post"><!-- form-horizontal Start -->
	
<div class="form-group"> <!-- form-group Start -->
	
<label class="col-md-3 control-label">Category Title</label>

<div class="col-md-6">
	
<input type="text" name="cat_title" class="form-control" value="<?php echo $c_title; ?>">

</div>

</div> <!-- form-group End -->

<div class="form-group"> <!-- form-group Start -->
	
<label class="col-md-3 control-label">Category Description</label>

<div class="col-md-6">
	
<textarea type="text" name="cat_desc" class="form-control">

<?php echo $c_desc; ?>

</textarea>

</div>

</div> <!-- form-group End -->

<div class="form-group"> <!-- form-group Start -->
	
<label class="col-md-3 control-label"></label>

<div class="col-md-6">
	
<input type="submit" name="update" value="Update Category" class="btn btn-primary form-control">

</div>

</div> <!-- form-group End -->

</form> <!-- form-horizontal End -->

</div> <!-- panel-body End -->

</div> <!-- 2nd row End -->

</div> <!-- col-lg-12 End -->

</div> <!-- panel panel-default End -->

</div>

<?php 
if (isset($_POST['update'])) {
	$cat_title=$_POST['cat_title'];
	$cat_desc=$_POST['cat_desc'];
	$update_cat="update categories set cat_title='$cat_title',cat_desc='$cat_desc' where cat_id='$c_id'";
	$run_cat=mysqli_query($con,$update_cat);
	if ($run_cat) {
		echo "<script>alert('One Category Has Been Updated')</script>";
		echo "<script>window.open('index.php?view_categories','_self')</script>";
	}
}
?>

<?php } ?>