<?php 
session_start();
if(!isset($_SESSION['customer_email'])){
	echo "<script>window.open('../checkout.php','_self')</script>";
}else{
include("includes/db.php");
include("functions/functions.php");
if (isset($_GET['order_id'])) {
	$order_id=$_GET['order_id'];
}
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
			<div class="box">
				<h1 align="center">Please confirm your payment</h1>
				<form action="confirm.php?update_id=<?php echo $order_id ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Invoice Number</label>
						<input type="text" class="form-control" name="invoice_number" required="">
					</div>
					<div class="form-group">
						<label>Amount</label>
						<input type="text" class="form-control" name="amount" required="">
					</div>
					<div class="form-group">
						<label>Select Payment Mode</label>
						<select class="form-control" name="payment_mode">
							<option>Bank Transfer</option>
							<option>Paypal</option>
							<option>PayuMoney</option>
							<option>Paytm</option>
						</select>
					</div>
					<div class="form-group">
						<label>Transaction Number</label>
						<input type="text" class="form-control" name="trfr_number" required="">
					</div>
					<div class="form-group">
						<label>Payment Date</label>
						<input type="date" class="form-control" name="date" required="">
					</div>
					<div class="text-center">
						<button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">
							Confirm Payment
						</button>
					</div>
				</form>
				<?php 
				if (isset($_POST['confirm_payment'])) {
					$update_id=$_GET['update_id'];
					$invoice_number=$_POST['invoice_number'];
					$amount=$_POST['amount'];
					$payment=$_POST['payment_mode'];
					$trfr_number=$_POST['trfr_number'];
					$date=$_POST['date'];
					$invoice_no=$_POST['update_id'];
					$complete="complete";
					$insert="insert into payments (invoice_id,amount,payment_mode,ref_no,payment_date) values ('$invoice_number','$amount','$payment','$trfr_number','$date')";
					$run_insert=mysqli_query($con,$insert);
					$update_q="update customer_order set order_status='$complete' where order_id='$update_id' ";
					$run_insert=mysqli_query($con,$update_q);
					// $update_p="update pending_order set order_status='$complete' where order_id='$update_id' ";
					// $run_insert=mysqli_query($con,$update_p);
					echo "<script>alert('Your order has been received')</script>";
					echo "<script>window.open('my_account.php?order','_self')</script>";

				}
				?>
			</div>
		</div>

		</div> <!--container End-->
</div> <!-- content End -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>