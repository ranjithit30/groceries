<?php 
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce Store</title>

<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

<link rel="stylesheet" href="styles/style.css">

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


		<div class="col-md-12"><!-- col-md-12 start -->
			<?php 
			if (!isset($_SESSION['customer_email'])) {
				include('customer/customer_login.php');
			}else {
				include('payment_options.php');
			}
			?>
		</div><!-- col-md-12 End -->

		</div> <!--container End-->
</div> <!-- content End -->
