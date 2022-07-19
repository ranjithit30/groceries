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



<div id="content"> <!-- content start -->
		<div class="col-md-9" id="cart"> <!-- col-md-9 Start -->
			<div class="box">
				<form action="cart.php" method="post" enctype="multipart-form-data">

					<h1>Shopping Cart</h1>
					<?php 
					$ip_add=getUserIp();
					$select_cart="select * from cart where ip_add='$ip_add' ";
					$run_cart=mysqli_query($con,$select_cart);
					$count=mysqli_num_rows($run_cart);
					?>
					<p class="text-muted">Currently You have <?php echo $count ?> item(s) in your cart</p>
					<div class="table-responsive"><!-- table-responsive Start -->
						<table class="table">
							<thead>
								<tr>
									<th colspan="2">Product</th>
									<th>Quantity</th>
									<th>Unit-Price</th>
									<th>Size</th>
									<th colspan="1">Delete</th>
									<th colspan="1">Sub-Total</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$total=0; 
								while ($row=mysqli_fetch_array($run_cart)) {
									$pro_id=$row['p_id'];
									$pro_size=$row['size'];
									$pro_qty=$row['qty'];
									$get_product="select * from products where product_id='$pro_id' ";
									$run_pro=mysqli_query($con,$get_product);
									while ($row=mysqli_fetch_array($run_pro)) {
										$p_title=$row['product_title'];
										$p_img1=$row['product_img1'];	
										$p_price=$row['product_price'];	
										$sub_total=$row['product_price']*$pro_qty;
										$total += $sub_total; //$total=$total + $sub_total;	
								?>
								<tr>
									<td><img src="admin_area/product_images/<?php echo $p_img1 ?>"></td>
									<td><?php echo $p_title ?></td>
									<td><?php echo $pro_qty ?></td>
									<td>Rs.<?php echo $p_price ?></td>
									<td><?php echo $pro_size ?></td>
									<td><input type="checkbox" name="remove[]" value="<?php echo $pro_id ?>"></td>
									<td>Rs.<?php echo $sub_total ?></td>
								</tr>
								<?php } } ?>
							</tfoot>
						</table>
					</div> <!-- table-responsive End -->
					
					<div class="box-footer">
						<div class="pull-left"><!-- pull-left Start -->
							<h4>Total Price</h4>
						</div><!-- pull-left End -->
						<div class="pull-right"><!-- pull-right Start -->
							<h4>Rs.<?php echo $total ?></h4>
						</div> <!-- pull-right End -->
					</div>
					<div class="box-footer">
						<div class="pull-left"><!-- pull-left Start -->
							<a href="index.php" class="btn btn-default">
								<i class="fa fa-chevron-left"></i> Continue Shopping
							</a>
						</div><!-- pull-left End -->
						<div class="pull-right"><!-- pull-right Start -->
							<button class="btn btn-default" type="submit" name="update" value="Update Cart">
								<i class="fa fa-refresh"></i> Update Cart
							</button>
							<a href="checkout.php" class="btn btn-primary">
								Proceed to Checkout <i class="fa fa-chevron-right"></i>
							</a>
						</div> <!-- pull-right End -->
					</div>
				</form>
			</div>

			<?php 
			function update_cart(){
				global $con;
				if (isset($_POST['update'])) {
					foreach ($_POST['remove'] as $remove_id) {
						$delete_product="delete from cart where p_id='$remove_id' ";
						$run_del=mysqli_query($con,$delete_product);
						if ($run_del) {
							echo "<script>window.open('cart.php','_self')</script>";
						}
					}
				}
			}
			echo @$up_cart=update_cart();
			?>

		</div> <!-- col-md-9 End -->

		<div class="col-md-3"> <!-- col-md-3 Start -->
			<div class="box" id="order-summary">
				<div class="box-header">
					<h3>Order Summary</h3>
				</div>
				<p class="text-muted">
					Shipping and additional costs are calculated based on the value you have entered
				</p>
				<div class="table-responsive">
					<table class="table">
						<tbody>
							<tr>
								<td>Order Sub-Total</td>
								<th>Rs.<?php echo $total ?></th>
							</tr>
							<tr>
								<td>Shipping and handling</td>
								<td>Rs.0</td>
							</tr>
							<tr>
								<td>Tax</td>
								<td>Rs.0</td>
							</tr>
							<tr class="total">
								<td>Total</td>
								<th>Rs.<?php echo $total ?></th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div> <!-- col-md-3 End -->
		

		</div> <!--container End-->
</div> <!-- content End -->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>