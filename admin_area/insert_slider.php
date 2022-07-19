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
	
<i class="fa fa-dashboard"></i> Dashboard / Insert Slider
</li>

</ol> <!-- breadcrumb End -->


</div> <!-- col-lg-12 End -->
	
</div> <!-- row End --> 

<div class="row"> <!-- row Start -->
	
<div class="col-lg-12"> <!-- col-lg-12 Start -->

<div class="panel panel-default"> <!-- panel panel-default Start -->
	
<div class="panel-heading"> <!-- panel-heading Start -->
	
<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Insert Slider

</h3>

</div> <!-- panel-heading End -->

<div class="panel-body"> <!-- panel-body Start -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"> <!-- form-horizontal Start -->
	
<div class="form-group"><!--  form-group Start -->
	
<label class="col-md-3 control-label"> Slider Name
</label>

<div class="col-md-6"> <!-- col-md-6 Start -->
	
<input type="text" name="slider_name" class="form-control">

</div> <!-- col-md-6 End -->

</div> <!--  form-group End -->

<div class="form-group"> <!-- form-group Start -->

<label class="col-md-3 control-label">Slider Image</label>	

<div class="col-md-6"> <!-- col-md-6 Start -->
	
<input type="file" name="slider_image" class="form-control" required="">
	
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
	$slider_name=$_POST['slider_name'];
	$slider_image=$_FILES['slider_image']['name'];
	$temp_name=$_FILES['slider_image']['tmp_name'];
	$view_slides="select * from slider";
	$view_run_slides=mysqli_query($con,$view_slides);
	$count=mysqli_num_rows($view_run_slides);
	if ($count<4) {
		move_uploaded_file($temp_name,"slider_images/$slider_image");
		$insert_slider="insert into slider (slider_name,slider_image) values ('$slider_name','$slider_image')";
		$run_slider=mysqli_query($con,$insert_slider);
		echo "<script>alert('inserted')</script>";
		echo "<script>window.open('index.php?view_slider','_self')</script>";
	}
	else{
		echo "<script>alert('already inserted')</script>";
		echo "<script>window.open('index.php?view_slider','_self')</script>";
	}
}
?>

<?php } ?>