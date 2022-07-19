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
	
<i class="fa fa-dashboard"></i> Dashboard / Insert Category

</li>

</ol> <!-- breadcrumb End -->


</div> <!-- col-lg-12 End -->
	
</div> <!-- row End --> 

<div class="row"> <!-- row Start -->
	
<div class="col-lg-12"> <!-- col-lg-12 Start -->

<div class="panel panel-default"> <!-- panel panel-default Start -->
	
<div class="panel-heading"> <!-- panel-heading Start -->
	
<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Insert Category

</h3>

</div> <!-- panel-heading End -->

<div class="panel-body"> <!-- panel-body Start -->

<form class="form-horizontal" action="" method="post"> <!-- form-horizontal Start -->
	
<div class="form-group"><!--  form-group Start -->
	
<label class="col-md-3 control-label">Category Title
</label>

<div class="col-md-6"> <!-- col-md-6 Start -->
	
<input type="text" name="cat_title" class="form-control">

</div> <!-- col-md-6 End -->

</div> <!--  form-group End -->

<div class="form-group"> <!-- form-group Start -->

<label class="col-md-3 control-label">Category Description</label>	

<div class="col-md-6"> <!-- col-md-6 Start -->
	
<textarea type="text" name="cat_desc" class="form-control">
	
</textarea>

</div> <!-- col-md-6 End -->

</div> <!-- form-group End -->

<div class="form-group"> <!-- form-group Start -->
	
<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="submit" value="Insert Category" class="btn btn-primary form-control">

</div>

</div> <!-- form-group End -->

</form> <!-- form-horizontal End -->

</div> <!-- panel-body End -->

</div> <!-- panel panel-default End -->

</div> <!-- col-lg-12 End -->

</div> <!-- row End -->

</div>


<?php 
if (isset($_POST['submit'])) {
	$cat_title=$_POST['cat_title'];
	$cat_desc=$_POST['cat_desc'];
	$insert_cat="insert into categories (cat_title,cat_desc) values ('$cat_title','$cat_desc')";
	$run_cat=mysqli_query($con,$insert_cat);
	if ($run_cat) {
		echo "<script>alert('New Category Has Been Inserted')</script>";
		echo "<script>window.open('index.php?view_categories','_self')</script>";
	}
}
?>

<?php } ?>