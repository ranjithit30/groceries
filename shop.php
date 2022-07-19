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
	
		<div class="col-md-3"><!--col-md-3 Start-->
			<?php
			include("includes/sidebar.php");
			?>
		</div><!--col-md-3 End-->
		<div style="font-family: 'Josefin Sans', sans-serif;" ><!--col-md-9 Start-->
			<?php 
			if(!isset($_GET['p_cat'])){
				if(!isset($_GET['cat_id'])){
					echo "<div>
					<h1>Shop</h1>
					</div>";
				}
			}
			?>
			<br>

			<div class="row"> <!-- row start -->
				<?php 
				if(!isset($_GET['p_cat'])){
					if(!isset($_GET['cat_id'])){
						$per_page=6;
						if(isset($_GET['page'])){
							$page=$_GET['page'];
						}else {
							$page=1;
						}
						$start_from=($page-1) * $per_page;
						$get_product="select * from products order by 1 DESC LIMIT $start_from, $per_page";
						$run_pro=mysqli_query($con,$get_product);
						while ($row=mysqli_fetch_array($run_pro)) {
							$pro_id=$row['product_id'];
							$pro_title=$row['product_title'];
							$pro_price=$row['product_price'];
							$pro_img1=$row['product_img1'];

							echo "
							<div class='col-md-4 col-sm-6 center-responsive'>
							<div class='' style='tex-align:center;'>
							<a href='details.php?pro_id=$pro_id'>
							<img src='admin_area/product_images/$pro_img1' style='width: 100px;'>
							</a>
							<div class='text'>
							<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
							<p class='price'> Rs.$pro_price
							</p>
							<p class='buttons'>
							<a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i> Add to Cart</a>
							</p>
							</div>
							</div>
							</div>

							";
						}

				?>
				
			</div> <!-- row End -->

			<center>
				<ul class="pagination"> 
					<?php 
					$query="select * from products";
					$result=mysqli_query($con,$query);
					$total_record=mysqli_num_rows($result);
					$total_pages=ceil($total_record / $per_page);
					echo "
					<li><a href='shop.php?page=1'>".'First Page'."</a></li>

					";
					for($i=1; $i<=$total_pages; $i++){
						echo "
						<li><a href='shop.php?page=".$i."'>".$i." </a></li>
						";
					};
					echo "
					<li><a href='shop.php?page=$total_pages'>".'Last Page'."</a></li>

					";

					}
					}
					?>
				</ul>
			</center>
			
			<?php 
			getPcatPro();
			getCatPro();
			?>
			
		</div> <!--col-md-9 End-->
	</div> <!--container End-->
</div> <!-- content End -->


</body>
</html>