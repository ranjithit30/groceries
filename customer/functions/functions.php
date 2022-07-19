<?php 




$db=mysqli_connect("localhost","root","","ecom");
function getPro(){
	global $db;
	$get_product="select * from products order by 1 DESC LIMIT 0,6";
	$run_products=mysqli_query($db,$get_product);
	while ($row_product=mysqli_fetch_array($run_products)) {
		$pro_id=$row_product['product_id'];
		$pro_title=$row_product['product_title'];
		$pro_price=$row_product['product_price'];
		$pro_img1=$row_product['product_img1'];

		echo "<div class='col-md-4 col-sm-6'>
		<div class='product'>
		<a href='details.php?pro_id=$pro_id'> 
		<img src='admin_area/product_images/$pro_img1' class='img-responsive'>
		</a>
		<div class='text'>
		<h3><a href='details.php?pro_id=$pro_id'>$pro_title </a></h3>
		<p class='price'>Rs.$pro_price </p>
		<p class='buttons'>
		<a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a> 
		<a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i> Add to Cart</a> 
		</p>
		</div>


		</div>

		</div>";

	}
}

//for getting user ip start
function getUserIp(){
	switch (true){
		case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
		case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP']; 
		case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
		default : return $_SERVER['REMOTE_ADDR'];
	}
}

//items count start
function item(){
	global $db;
	$ip_add=getUserIp();
	$get_items="select * from cart where ip_add='$ip_add' ";
	$run_item=mysqli_query($db,$get_items);
	$count=mysqli_num_rows($run_item);
	echo $count;
}
//items count End

//total price start

function totalPrice(){
	global $db;
	$ip_add=getUserIp();
	$total=0;
	$select_cat="select * from cart where ip_add='$ip_add' ";
	$run_cart=mysqli_query($db,$select_cat);
	while ($record=mysqli_fetch_array($run_cart)){
		$pro_id=$record['p_id'];
		$pro_qty=$record['qty'];
		$get_price="select * from products where product_id='$pro_id' ";
		$run_price=mysqli_query($db,$get_price);
		while ($row=mysqli_fetch_array($run_price)) {
			$sub_total=$row['product_price']*$pro_qty;
			$total += $sub_total;
		}
	}
	echo $total;
}

//total price End
?>