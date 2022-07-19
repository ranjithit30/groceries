<?php 
if (!isset($_SESSION['admin_email'])) {
	echo "<script></script>";
}
else{
?>

<div class="col-lg-10 col-sm-8 col-md-9" style="float: right;">

<div class="row"> <!-- row Start --> 
	
<div class="col-lg-12"> <!-- col-lg-12 Start -->

<ol class="breadcrumb"> <!-- breadcrumb Start -->

<li>
	
<i class="fa fa-dashboard"></i> Dashboard / Insert Product Category

</li>
	
</ol> <!-- breadcrumb End -->

</div> <!-- col-lg-12 End --> 

</div> <!-- row End --> 

<div class="row"> <!-- 2nd row Start -->

<div class="col-lg-12"> <!-- col-lg-12 Start -->
	
<div class="panel panel-default"> <!-- panel panel-default Start -->
	
<div class="panel-heading"> <!-- panel-heading Start -->
	
<h3 class="panel-title"> <!-- panel-title Start -->
	
<i class="fa fa-money fa-fw"></i> Insert Product Category

</h3> <!-- panel-title End -->

</div> <!-- panel-heading End -->


<div class="panel-body"> <!-- panel-body Start -->
	
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"> <!-- form-horizontal Start -->
	
<div class="form-group"> <!-- form-group Start -->

<label class="col-md-3 control-label">Product Category Title</label>

<div class="col-md-6">
	
<input type="text" name="p_cat_title" class="form-control">

</div>

</div> <!-- form-group End --> 

<div class="form-group"> <!-- form-group Start -->

<label class="col-md-3 control-label">Product Category Description</label>

<div class="col-md-6">
	
<textarea type="text" name="p_cat_desc" class="form-control">
</textarea>

</div>

</div> <!-- form-group End --> 

<div class="form-group"> <!-- form-group Start -->
	
<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">

</div>

</div> <!-- form-group End --> 

</form> <!-- form-horizontal End -->

</div> <!-- panel-body End --> 

</div> <!-- panel panel-default End --> 

</div> <!-- col-lg-12 End --> 	

</div> <!--2nd row End -->

</div>

<?php 
if (isset($_POST['submit'])) {
	$p_cat_title=$_POST['p_cat_title'];
	$p_cat_desc=$_POST['p_cat_desc'];

	$insert_p_cat="insert into product_categories (p_cat_title,p_cat_desc) values ('$p_cat_title','$p_cat_desc')";
	$run_p_cat=mysqli_query($con,$insert_p_cat);
	if ($run_p_cat) {
		echo "<script>alert('New Product Category Has been Inserted')</script>";
		echo "<script>window.open('index.php?view_p_cats','_self')</script>";
	}
}
?>


<?php } ?>