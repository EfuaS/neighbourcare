<?php

//include page header and navbar from includes file to reduce code redunduncy
require('settings/core.php');
require('includes/header.php');
require('includes/navbar.php');
require(dirname(__FILE__)).'/controllers/cart_controller.php';


$visitor_ip =getRealIpAddr();
$cartItems = getAllCartItemsController($visitor_ip);
?>
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
<?php
// initialize cart subtotal 
$total = 0;

       foreach( $cartItems as $cartItem ) {
?>
							<tr>


								<td class="image" data-title="No"><img src="images/products/<?php echo $cartItem["product_image"]; ?>" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#"><?php echo $cartItem["product_name"]; ?></a></p>
									<p class="product-des"><?php echo $cartItem['product_desc'];  ?></p>
								</td>
								<td class="price" id="productPrice" data-title="Price"><span>GHS <?php echo $cartItem["product_price"]; ?></span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">
										<input type="number" readonly name="quant" class="input-number"  data-min="1" data-max="100" value="<?php echo $cartItem["qty"]; ?>">
									</div>
									<!--/ End Input Order -->
								</td>
								<td class="total-amount" id='total' data-title="Total"><span> <?php print_r(number_format($cartItem["product_price"] * $cartItem["qty"])); ?></span></td>

								<td class="action" data-title="Remove" ><a href="actions/mng_cart.php?cartremoveid=<?php echo $cartItem["product_id"]; ?>"><i class="ti-trash remove-icon"></i></a></td>

							</tr>

<?php

$total = $total + $cartItem["product_price"] * $cartItem["qty"];

						}
?>

						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<!-- <div class="coupon">
										<form action="#" target="_blank">
											<input name="Coupon" placeholder="Enter Your Coupon">
											<button class="btn">Apply</button>
										</form>
									</div> -->
									<!-- <div class="checkbox">
										<label class="checkbox-inline" for="2"><input name="news" id="2" > Shipping (+10$)</label>
									</div> -->
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<!-- Calculate  and display cart total -->
										<li>Cart Subtotal<span>GHS <?php print_r(number_format($total,2));?></span></li>
										<li>Shipping<span>Free</span></li>
										<li class="last">You Pay<span>GHS <?php print_r(number_format($total,2));?></span></li>
									</ul>
									<div class="button5">
										<a href="checkout.php?total=<?php echo $total; ?>" class="btn">Checkout</a>
										<a href="index.php" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
			
	<!-- Start Shop Services Area  -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>This Month</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
<br>
<br>
<br>
<br>	
	
		<?php
		require('includes/scripts.php');
		require('includes/footer.php');
		
		
		?>