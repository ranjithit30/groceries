<?php 
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
else{

?>

<?php 
if (isset($_GET['delete_slider'])) {
	$delete_id=$_GET['delete_slider'];
	$delete_slider="delete from slider where id='$delete_id'";
	$run_delete=mysqli_query($con,$delete_slider);
	if ($run_delete) {
		echo "<script>alert('One Slide Has Been Deleted')</script>";
		echo "<script>window.open('index.php?view_slider','_self')</script>";
	}
}
?>

<?php } ?>