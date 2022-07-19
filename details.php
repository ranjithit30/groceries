<?php 
session_start();
include("includes/db.php");
include("functions/functions.php");
?>

<?php 
if (isset($_GET['pro_id'])) {
	$pro_id=$_GET['pro_id'];
	$get_product="select * from products where product_id='$pro_id' ";
	$run_product=mysqli_query($con,$get_product);
	$row_product=mysqli_fetch_array($run_product);
	$p_cat_id=$row_product['p_cat_id'];
	$p_title=$row_product['product_title'];
	$p_price=$row_product['product_price'];
	$p_desc=$row_product['product_desc'];
	$p_img1=$row_product['product_img1'];
	$p_img2=$row_product['product_img2'];
	$p_img3=$row_product['product_img3'];
	$get_p_cat="select * from product_categories where p_cat_id='$p_cat_id' ";
	$run_p_cat=mysqli_query($con,$get_p_cat);
	$row_p_cat=mysqli_fetch_array($run_p_cat);
	$p_cat_id=$row_p_cat['p_cat_id'];
	$p_cat_title=$row_p_cat['p_cat_title'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce Store</title>

<!-- Latest compiled and minified CSS -->

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


<div id="content">
	<div class="container"> <!--container start-->
		<div class="col-md-3"><!--col-md-3 Start-->
			<?php
			include("includes/sidebar.php");
			?>
		</div><!--col-md-3 End-->

<div class="col-md-9">
	<div class="row" id="productmain">
		<div class="col-sm-6"> <!-- col-sm-6 Start --> 
			<div id="mainimage">
				<div id="mycarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
						<li data-target="#mycarousel" data-slide-to="1"></li>
						<li data-target="#mycarousel" data-slide-to="2"></li>
					</ol>
					<div class=""> <!--carousel-inner Start-->
						<div class="">
							<center>
								<img src="admin_area/product_images/<?php echo $p_img1; ?>" class="img-responsive">
							</center>
						</div>

					</div> <!--carousel-inner End-->



				</div>
			</div>
		</div> <!-- col-sm-6 End -->
		<div class="col-sm-6">
			<div class="box"> <!-- box start -->
				
				<?php
				addCart();  
				?> 
				<div>
				<form  style="text-align:center;" action="details.php?add_cart=<?php echo $pro_id ?>" method="post" class="form-horizontal"> <!-- form start -->
					<div class="form-group"> <!-- form-group Start -->
						<label style="font-family: 'Josefin Sans', sans-serif;">Product Quantity</label>
						<br>
						<div class="col-md-7"> <!-- col-md-7 Start -->
							<select name="product_qty" style="margin-left: 140px;" class="form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div> <!-- col-md-7 End -->
					</div> <!-- form-group End -->
					<div class="form-group">
						<label style="font-family: 'Josefin Sans', sans-serif;">Product Grade</label>
						<br>
						<div class="col-md-7" >
							<select name="product_size"   style="margin-left: 140px;" class="form-control">
								<option>Select a Size</option>
								<option>A Grade</option>
								<option>B Grade</option>
							</select>
						</div>
					</div>
					<p class="price">Rs.<?php echo $p_price; ?></p>
					<p class="text-center buttons">
						<button class="btn btn-primary" type="submit">
							<i class="fa fa-shopping-cart"></i>Add to Cart
						</button>
					</p>
				</form> 
						</div><!-- Form End -->
			</div> <!-- box End -->
			<div class="col-xs-4">
				<a href="#" class="thumb">
					<img src="admin_area/product_images/<?php echo $p_img1 ?>" class="img-responsive">
				</a>
			</div>
		</div>
	</div>
	<div class="box" id="details">
		<h4 style="font-family: 'Josefin Sans', sans-serif;">Product Details</h4>
		<p><?php echo $p_desc ?></p>
		<h4 style="font-family: 'Josefin Sans', sans-serif;">Size</h4>
		<a style="font-family: 'Josefin Sans', sans-serif;">Details of the product</a>
	</div>
</div>

</div> <!--container End-->
</div> <!-- content End -->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>