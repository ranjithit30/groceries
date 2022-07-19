<?php 
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php',;_self)</script>";
}else{

?>


<?php 
if (isset($_GET['edit_slider'])) {
	$edit_id=$_GET['edit_slider'];
	$edit_slider="select * from slider where id='$edit_id'";
	$run_slider=mysqli_query($con,$edit_slider);
	$row_edit=mysqli_fetch_array($run_slider);
	$slider_id=$row_edit['id'];
	$slider_name=$row_edit['slider_name'];
	$slider_image=$row_edit['slider_image'];
}
?>

<div class="col-lg-10 col-sm-8 col-md-9" style="float: right;">

<div class="row"> <!-- 1 row Start -->
	
<div class="col-lg-12"> <!-- col-lg-12 Start -->
	
<ol class="breadcrumb"><!-- breadcrumb Start -->
	
<li class="active">
	
<i class="fa fa-dashboard"></i> Dashboard / Edit Slider

</li>

</ol> <!-- breadcrumb End -->

</div> <!-- col-lg-12 End -->

</div> <!-- 1 row End -->

<div class="row"> <!-- 2 row Start -->
	
<div class="col-lg-12"> <!-- col-lg-12 Start -->
	
<div class="panel panel-default"> <!-- panel panel-default Start -->
	
<div class="panel-heading"> <!-- panel-heading Start -->
	
<h3 class="panel-title">
	
<i class="fa fa-money fa-fw"></i> Edit Slider

</h3>

</div> <!-- panel-heading End -->

<div class="panel-body"> <!-- panel-body start --> 
	
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"> <!-- form-horizontal Start -->
	
<div class="form-group"> <!-- form-group Start -->
	
<label class="col-md-3 control-label">Slider Name:</label>

<div class="col-md-6">
	
<input type="text" name="slider_name" class="form-control" value="<?php echo $slider_name; ?>">

</div>

</div> <!-- form-group End -->

<div class="form-group"> <!-- form-group Start -->
	
<label class="col-md-3 control-label">Slider Image:</label>

<div class="col-md-6">
	
<input type="file" name="slider_image" class="form-control" required="">
<br>
<img src="slider_images/<?php echo $slider_image; ?>" width="70" height="70">
</div>

</div> <!-- form-group End -->

<div class="form-group"> <!-- form-group start -->
	
<label class="col-md-3 control-label"></label>

<div class="col-md-6">
	
<input type="submit" name="update" value="Update Now" class="btn btn-primary form-control">

</div>

</div> <!-- form-group end -->

</form> <!-- form-horizontal End -->

</div> <!-- panel-body End -->

</div> <!-- panel panel-default End -->

</div> <!-- col-lg-12 End -->

</div> <!-- 2 row End --> 

</div>


<?php 
if (isset($_POST['update'])) {
	$slider_name=$_POST['slider_name'];
	$slider_image=$_FILES['slider_image']['name'];
	$temp_name=$_FILES['slider_image']['tmp_name'];
	move_uploaded_file($temp_name,"slider_images/$slider_image");
	$update_slider="update slider set slider_name='$slider_name',slider_image='$slider_image' where id='$slider_id'";
	$run_slider=mysqli_query($con,$update_slider);
	if ($run_slider) {
		echo "<script>alert('inserted')</script>";
		echo "<script>window.open('index.php?view_slider','_self')</script>";	
	}
}
?>


<?php } ?>