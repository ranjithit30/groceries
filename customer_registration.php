<?php 
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce Store</title>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="styles/style.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">


<style>
ul {
  list-style-type: none;

  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  font-family: 'Josefin Sans', sans-serif;
}

li {
  float: left;
  
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
}

li a:hover {
  background-color: #111;
  text-align:center;
}
.logo-image{
width:50px;
height:50px;
}
</style>

</head>
<body>
	
<div>

<ul>
<li><a href="index.php"><img style="width:50px;" src=""></a></li>
  <li><a class="index.php" href="#home">Home</a></li>
  <li><a href="shop.php">Shop</a></li>
  <li>
							<?php 
							if (!isset($_SESSION['customer_email'])) {
								echo "<a href='checkout.php'>My Account</a>";
							}else{
								echo "<a href='customer/my_account.php?my_order'>My Account</a>";
							}
							?>
						</li>
  <li><a href="cart.php">Cart</a></li>

  <li style="float:right"></li>



  <li style="float:right">				<a href="cart.php" style="float: left;">
					<span><?php item(); ?> items in cart</span>
				</a></li>
</ul>







</div>
<br>



<div id="content" style="font-family: 'Josefin Sans', sans-serif;"> <!-- content start -->

		<div class="col-md-12"> <!-- col-md-9 Start -->
			<div class="box"> <!-- box Start -->
				<div class="box-header"> <!-- box-header Start -->
					<center>
						<h2>Customer Registration</h2>
					</center>
				</div> <!-- box-header End -->
				<center>
				<form action="customer_registration.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Customer Name</label>
						<input type="text" name="c_name" required="" class="form-control">
					</div>

					<div class="form-group">
						<label>Customer Email</label>
						<input type="text" name="c_email" class="form-control" required="">
					</div>

					<div class="form-group">
						<label>Customer Password</label>
						<input type="password" name="c_password" class="form-control" required="">
					</div>

					<div class="form-group">
						<label>Country</label>
						<input type="text" name="c_country" class="form-control" required="">
					</div>

					<div class="form-group">
						<label>City</label>
						<input type="text" name="c_city" class="form-control" required="">
					</div>

					<div class="form-group">
						<label>Contact Number</label>
						<input type="text" name="c_contact" class="form-control" required="">
					</div>

					<div class="form-group">
						<label>Address</label>
						<input type="text" name="c_address" class="form-control" required="">
					</div>

					<div class="form-group">
						<label>Image</label>
						<input type="file" name="c_image" class="form-control" required="">
					</div>

					<div class="text-center">
						<button type="submit" name="submit" class="btn btn-primary">
							<i class="fa fa-user-md"></i> Register
						</button>
					</div>

				</form>
				</center>
			</div> <!-- box End -->
		</div> <!-- col-md-9 End -->

		</div> <!--container End-->
</div> <!-- content End -->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>


<?php 
if (isset($_POST['submit'])) {
	$c_name=$_POST['c_name'];
	$c_email=$_POST['c_email'];
	$c_password=$_POST['c_password'];
	$c_country=$_POST['c_country'];
	$c_city=$_POST['c_city'];
	$c_contact=$_POST['c_contact'];
	$c_address=$_POST['c_address'];
	$c_image=$_FILES['c_image']['name'];
	$c_tmp_image=$_FILES['c_image']['tmp_name'];
	$c_ip=getUserIp();

	move_uploaded_file($c_tmp_image,"customer/customer_images/$c_image");
	$insert_customer="insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values('$c_name','$c_email','$c_password','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
	$run_customer=mysqli_query($con,$insert_customer);
	$sel_cart="select * from cart where ip_add='$c_ip' ";
	$run_cart=mysqli_query($con,$sel_cart);
	$check_cart=mysqli_num_rows($run_cart);
	if ($check_cart>0) {
		$_SESSION['customer_email']=$c_email;
		echo "<script> alert('You have been registered successfully') </script>";
		echo "<script>window.open('checkout.php','_self')</script>";
	}else{
		$_SESSION['customer_email']=$c_email;
		echo "<script>alert('You have been registered successfully')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}

}	
?>