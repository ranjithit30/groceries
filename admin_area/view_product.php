<?php
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}else{

?>
<div class="col-lg-10 col-sm-8 col-md-9" style="float: right;">
<div class="row"> <!-- row1 Start -->
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard / View Product
			</li>
		</ol>
	</div>
</div> <!-- row1 Close -->

<div class="row"> <!-- row2 Start -->
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"></i> View Products
				</h3>
			</div>

			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th> Product Id</th>
								<th> Product Title</th>
								<th> Product Image</th>
								<th> Product Size</th>
								<th> Product Keyword</th>
								<th> Product Date</th>
								<th> Product Delete</th>
								<th> Product Edit</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$i=0;
							$get_product="select * from products";
							$run_p=mysqli_query($con,$get_product);
							while ($row=mysqli_fetch_array($run_p)) {
								$pro_id=$row['product_id'];
								$product_title=$row['product_title'];
								$product_img1=$row['product_img1'];
								$product_price=$row['product_price'];
								$product_keywords=$row['product_keywords'];
								$date=$row['date'];
								$i++;
							?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $product_title ?></td>
								<td><img src="product_images/<?php echo $product_img1 ?>" class="img-responsive" width="50" height="40"></td>
								<td><?php echo $product_price ?></td>
								<td><?php echo $product_keywords ?></td>
								<td><?php echo $date ?></td>	
								<td>
									<a href="index.php?delete_product=<?php echo $pro_id ?>">
										<i class="fa fa-trash-o"></i> Delete
									</a>
								</td>
								<td>
									<a href="index.php?edit_product=<?php echo $pro_id ?>">
										<i class="fa fa-pencil"></i> Edit
									</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div> <!-- row2 End -->


</div>
<?php } ?>