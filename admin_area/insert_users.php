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
	
<i class="fa fa-dashboard"></i> Dashboard / Insert User

</li>
	
</ol> <!-- breadcrumb End -->

</div> <!-- col-lg-12 End --> 

</div> <!-- row End --> 

<div class="row"> <!-- row Start -->
	
<div class="col-lg-12"> <!-- col-lg-12 start -->

<div class="panel panel-default"> <!-- panel panel-default start -->
	
<div class="panel-heading"> <!-- panel-heading Start -->
	
<h3 class="panel-title">
	
<i class="fa fa-money fa-fw"></i> Insert User

</h3>

</div> <!-- panel-heading End -->

<div class="panel-body"> <!-- panel-body start -->
	
<form class="form-horizontal" method="post" enctype="multipart/form-data">
	
<div class="form-group"> <!-- form-group start --> 
	
<label class="col-md-3 control-label">User Name</label>

<div class="col-md-6"> <!-- col-md-6 Start -->
	
<input type="text" name="admin_name" class="form-control" required="">

</div> <!-- col-md-6 End -->

</div> <!-- form-group end -->

<div class="form-group"> <!-- form-group start --> 
	
<label class="col-md-3 control-label">User Email</label>

<div class="col-md-6"> <!-- col-md-6 Start -->
	
<input type="text" name="admin_email" class="form-control" required="">

</div> <!-- col-md-6 End -->

</div> <!-- form-group end -->

<div class="form-group"> <!-- form-group start --> 
	
<label class="col-md-3 control-label">User Password</label>

<div class="col-md-6"> <!-- col-md-6 Start -->
	
<input type="password" name="admin_pass" class="form-control" required="">

</div> <!-- col-md-6 End -->

</div> <!-- form-group end -->

<div class="form-group"> <!-- form-group start --> 
	
<label class="col-md-3 control-label">User Country</label>

<div class="col-md-6"> <!-- col-md-6 Start -->
	
<input type="text" name="admin_country" class="form-control" required="">

</div> <!-- col-md-6 End -->

</div> <!-- form-group end -->

<div class="form-group"> <!-- form-group start --> 
	
<label class="col-md-3 control-label">User Job</label>

<div class="col-md-6"> <!-- col-md-6 Start -->
	
<input type="text" name="admin_job" class="form-control" required="">

</div> <!-- col-md-6 End -->

</div> <!-- form-group end -->

<div class="form-group"> <!-- form-group start --> 
	
<label class="col-md-3 control-label">User Contact</label>

<div class="col-md-6"> <!-- col-md-6 Start -->
	
<input type="text" name="admin_contact" class="form-control" required="">

</div> <!-- col-md-6 End -->

</div> <!-- form-group end -->

<div class="form-group"> <!-- form-group start --> 
	
<label class="col-md-3 control-label">User About</label>

<div class="col-md-6"> <!-- col-md-6 Start -->
	
<textarea name="admin_about" class="form-control" row="3"></textarea>

</div> <!-- col-md-6 End -->

</div> <!-- form-group end -->

<div class="form-group"> <!-- form-group start --> 
	
<label class="col-md-3 control-label">User Image</label>

<div class="col-md-6"> <!-- col-md-6 Start -->
	
<input type="file" name="admin_image" class="form-control" required="">

</div> <!-- col-md-6 End -->

</div> <!-- form-group end -->

<div class="form-group"> <!-- form-group start -->
	
<label class="col-md-3 control-label"></label>

<div class="col-md-6"> <!-- col-md-6 start -->
	
<input type="submit" name="submit" value="Insert User" class="btn btn-primary btn-primary form-control">

</div> <!-- col-md-6 end -->

</div> <!-- form-group end -->

</form>

</div> <!-- panel-body end --> 

</div> <!-- panel panel-default end -->
	
</div>

</div> <!-- row end -->

</div>

<?php 
if (isset($_POST['submit'])) {
	$admin_name=$_POST['admin_name'];
	$admin_email=$_POST['admin_email'];
	$admin_pass=$_POST['admin_pass'];
	$admin_country=$_POST['admin_country'];
	$admin_job=$_POST['admin_job'];
	$admin_contact=$_POST['admin_contact'];
	$admin_about=$_POST['admin_about'];
	$admin_image=$_FILES['admin_image']['name'];
	$temp_admin_image=$_FILES['admin_image']['tmp_name'];
	move_uploaded_file($temp_admin_image,"admin_images/$admin_image");
	$insert_admin="insert into admins (admin_name,admin_email,admin_pass,admin_image,admin_contact,admin_country,admin_job,admin_about) values ('$admin_name','$admin_email','$admin_pass','$admin_image','$admin_contact','$admin_country','$admin_job','$admin_about')";
	$run_admin=mysqli_query($con,$insert_admin);
	if ($run_admin) {
		echo "<script>alert('User Added Successfully')</script>";
		echo "<script>window.open('index.php?view_user','_self')</script>";
	}
}
?>

<?php } ?>