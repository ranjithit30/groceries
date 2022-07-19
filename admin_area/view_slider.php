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
	
<i class="fa fa-dashboard"></i> Dashboard / View Sliders

</li>
	
</ol> <!-- breadcrumb End -->

</div> <!-- col-lg-12 End --> 

</div> <!-- row End --> 

<div class="row"> <!-- 2nd row Start -->

<div class="col-lg-12"> <!-- col-lg-12 Start -->
	
<div class="panel panel-default"> <!-- panel panel-default Start -->
	
<div class="panel-heading"> <!-- panel-heading Start -->
	
<h3 class="panel-title"> <!-- panel-title Start -->
	
<i class="fa fa-money fa-fw"></i> View Sliders

</h3> <!-- panel-title End -->

</div> <!-- panel-heading End -->

<div class="panel-body"> <!-- panel-body Start -->

<?php 
$get_slides="select * from slider";
$run_slides=mysqli_query($con,$get_slides);
while ($row_slides=mysqli_fetch_array($run_slides)) {
	$slider_id=$row_slides['id'];
	$slider_name=$row_slides['slider_name'];
	$slider_image=$row_slides['slider_image'];
?>	

<div class="col-lg-3 col-md-3"> <!-- col-lg-3 col-md-3 Start -->
	
<div class="panel panel-primary"> <!-- panel panel-primary Start -->
	
<div class="panel-heading"><!--  panel-heading Start -->
	
<h3 class="panel-title" align="center">
<?php echo $slider_name; ?>
</h3>

</div> <!--  panel-heading End -->

<div class="panel-body"> <!-- panel-body Start -->

<img src="slider_images/<?php echo $slider_image; ?>" class="img-responsive">

</div> <!-- panel-body End -->

<div class="panel-footer"> <!-- panel-footer Start -->
	
<center>
	
<a href="index.php?delete_slider=<?php echo $slider_id ?>" class="pull-left">

<i class="fa fa-trash-o"></i> Delete

</a>	

<a href="index.php?edit_slider=<?php echo $slider_id ?>" class="pull-right">

<i class="fa fa-pencil"></i> Edit

</a>

<div class="clearfix">
	
</div>

</center>

</div> <!-- panel-footer End -->

</div> <!-- panel panel-primary End -->

</div> <!-- col-lg-3 col-md-3 End -->

<?php } ?>

</div> <!-- panel-body End -->


</div> <!-- panel panel-default End -->

</div> <!-- col-lg-12 End -->

</div> <!-- 2nd row End -->
<?php } ?>

