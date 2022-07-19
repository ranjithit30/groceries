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
	
<i class="fa fa-dashboard"></i> Dashboard / View Categories

</li>
	
</ol> <!-- breadcrumb End -->

</div> <!-- col-lg-12 End --> 

</div> <!-- row End --> 

<div class="row"> <!-- 2nd row Start -->

<div class="col-lg-12"> <!-- col-lg-12 Start -->
	
<div class="panel panel-default"> <!-- panel panel-default Start -->
	
<div class="panel-heading"> <!-- panel-heading Start -->
	
<h3 class="panel-title"> <!-- panel-title Start -->
	
<i class="fa fa-money fa-fw"></i> View Categories

</h3> <!-- panel-title End -->

</div> <!-- panel-heading End -->

<div class="panel-body"> <!-- panel-body Start -->
	
<div class="table-responsive"> <!-- table-responsive Start -->
	
<table class="table table-bordered table-hover table-striped"> <!-- table table-bordered table-hover table-striped Start -->
	
<thead> <!-- thead Start -->
	
<tr>

<th>Category Id</th>
<th>Category Title</th>
<th>Category Description</th>
<th>Delete Category</th>
<th>Edit Category</th>

</tr>

</thead> <!-- thead End -->

<tbody>
	
<?php 
$i=0;
$get_cats="select * from categories";
$run_cats=mysqli_query($con,$get_cats);
while ($row_cats=mysqli_fetch_array($run_cats)) {
	$cat_id=$row_cats['cat_id'];
	$cat_title=$row_cats['cat_title'];
	$cat_desc=$row_cats['cat_desc'];
	$i++;

?>

</tbody>

<tr>
	
<td><?php echo $i; ?></td>

<td><?php echo $cat_title; ?></td>

<td width="300"><?php echo $cat_desc; ?></td>

<td>
	
<a href="index.php?delete_cat=<?php echo $cat_id; ?>">

<i class="fa fa-trash-o"></i> Delete

</a>

</td>

<td>
	
<a href="index.php?edit_cat=<?php echo $cat_id; ?>">

<i class="fa fa-pencil"></i> Edit

</a>

</td>

</tr>

<?php } ?>

</table> <!-- table table-bordered table-hover table-striped End -->

</div> <!-- table-responsive End -->

</div> <!-- panel-body End -->


</div> <!-- panel panel-default End -->

</div> <!-- col-lg-12 End -->

</div> <!-- 2nd row End -->
<?php } ?>