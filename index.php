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



<div id="advantage"> <!-- advantage Start -->
	<div class="container"> <!-- container Start -->
		<div class="same-height-row"> <!-- same-height-row Start -->
			<div class="col-sm-4"> <!-- col-sm-4 Start -->
				<div class="box same-height"> <!-- box same-height Start -->
					<div class="icon">
						<i class="fa fa-heart"></i> 
					</div>
					<h3><a href="#">For Farmers</a></h3>
					<p>
						helps the farmers to grow with you by ordering the products from forfarmers
					</p>
				</div> <!-- box same-height End -->
			</div> <!-- col-sm-4 End -->
		</div> <!-- same-height-row End -->

		<div class="same-height-row"> <!-- same-height-row Start -->
			<div class="col-sm-4"> <!-- col-sm-4 Start -->
				<div class="box same-height"> <!-- box same-height Start -->
					<div class="icon">
						<i class="fa fa-heart"></i> 
					</div>
					<h3><a href="#">BEST PRICES</a></h3>
					<p>
						You can check on all other sites about the prices and than compare with us.
					</p>
				</div> <!-- box same-height End -->
			</div> <!-- col-sm-4 End -->
		</div> <!-- same-height-row End -->

		<div class="same-height-row"> <!-- same-height-row Start -->
			<div class="col-sm-4"> <!-- col-sm-4 Start -->
				<div class="box same-height"> <!-- box same-height Start -->
					<div class="icon">
						<i class="fa fa-heart"></i> 
					</div>
					<h3><a href="#">WE LOVE OUR CUSTOMERS</a></h3>
					<p>
						We are known to provide best possible service.
					</p>
				</div> <!-- box same-height End -->
			</div> <!-- col-sm-4 End -->
		</div> <!-- same-height-row End -->
	</div> <!-- container End -->


</div> <!-- advantage End -->

<div id="hot"> <!-- hot Start -->
 <!-- box Start -->
		<div class="container"> <!-- container Start -->
			<div class="col-md-12"> <!-- col-md-12 Start -->
				<h3>Latest this Week</h3>
			</div><!-- col-md-12 End -->
		</div> <!-- container End -->
</div> <!-- hot End -->
<br>

<div id="content" class="container"> <!-- container Start -->
	<div class="row"> <!-- row Start -->
		<?php  
		getPro();
		?>
	</div> <!-- row End -->
</div> <!-- container End -->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>