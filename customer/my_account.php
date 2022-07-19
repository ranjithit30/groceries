<?php 
session_start();
if(!isset($_SESSION['customer_email'])){
	echo "<script>window.open('../checkout.php','_self')</script>";
}else{
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
body{
	font-family: 'Josefin Sans', sans-serif;
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


<div id="content"> <!-- content start -->

		<div class="col-md-3"><!--col-md-3 Start-->
			<?php
			include("includes/sidebar.php");
			?>
		</div><!--col-md-3 End-->

		<div class="col-md-9">
			<!-- Including my order.php page Start --> 
			<?php
			if(isset($_GET['my_order'])){
			include("my_order.php");
			}
			?>
			<!-- Including my order.php page End -->
			
			<!-- Including my Payoffline.php page Start -->
			<?php
			if(isset($_GET['pay_offline'])){
			include("pay_offline.php");
			}
			?>
			<!-- Including my Payoffline.php page End -->

			<!-- Including my Edit Account.php page Start -->
			<?php
			if(isset($_GET['edit_act'])){
			include("edit_act.php");
			}
			?>
			<!-- Including my Edit Account.php page End -->

			<!-- Including Change_pass.php page Start -->
			<?php
			if(isset($_GET['change_pass'])){
			include("change_password.php");
			}
			?>
			<!-- Including Change_pass.php page End -->

			<!-- Including delete.php page Start -->
			<?php
			if(isset($_GET['delete_ac'])){
			include("delete_ac.php");
			}
			?>
			<!-- Including delete.php page End -->
		</div>

		</div> <!--container End-->
</div> <!-- content End -->





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>