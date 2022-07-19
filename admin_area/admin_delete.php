<?php 
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
else{
	
?>



<?php 
if(isset($_GET['admin_delete'])){
	$delete_id=$_GET['admin_delete'];
	$delete_admin="delete from admins where admin_id='$delete_id'";
	$run_delete=mysqli_query($con,$delete_admin);
	if ($run_delete) {
		echo "<script>alert('User Details Has Been Deleted Successfully and login again')</script>";
		echo "<script>window.open('login.php','_self')</script>";
		session_destroy();
		
	}
}
?>

<?php } ?>
