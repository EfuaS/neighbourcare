<?php
require('settings/core.php');

//check if user is logged in
check_login();

// get cart total from cart.php
$total = $_GET['total'];

//include page header and navbar from includes file to reduce code redunduncy
require('includes/header.php');
require('includes/navbar.php');

?>
		<!-- Start Checkout -->
		<section class="shop checkout section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-8 col-12">
						<div class="checkout-form">
							<h2>Billing Details</h2>
							<p>Enter your Order & Delivery Details here.</p>
							<!-- Form -->
							<form class="form" method="get" action="checkout_process.php">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Full Name<span>*</span></label>
											<input type="text" name="fname" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Email Address<span>*</span></label>
											<input type="email" name="email" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Mobile Money Number<span>*</span></label>
											<input type="tel" name="phone" placeholder="Will be used for MoMo Payment" required="required">
										</div>
									</div>
									<div class=" col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Payment Reference Code<span>*</span></label>
											<input type="text" name="ref" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Country<span>*</span></label>
											<input type="text" readonly name="country" value="Ghana" >
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>City / Town<span>*</span></label>
											<input type="text"  name="city" placeholder="" >
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Region<span>*</span></label>
											<input type="text"  name="region" placeholder="Ex: Greater Accra" >
										</div>
									</div>
									<div class=" col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Street Address <span>*</span></label>
											<input type="text" name="address" placeholder="House Number and Street Name" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<input type="hidden"  name="carttotal" value="<?php echo $total; ?>" >
										</div>
									</div>
									<div class="col-12">
										<div class="form-group create-account">
											<input id="cbox" type="checkbox">
											<label>Create an account?</label>
										</div>
									</div>
								</div>
							<!--/ End Form -->
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="order-details">
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>CART  TOTALS</h2>
								<div class="content">
									<ul>
										<li>Sub Total<span>GHS <?php echo $total; ?></span></li>
										<li>(+) Shipping<span>GHS 0.00</span></li>
										<li class="last">Total<span>GHS <?php echo $total; ?></span></li>
									</ul>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Payments</h2>
								<div class="content">
									<div class="checkbox">
										<label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label>
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Cash On Delivery</label>
										<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox"> PayPal</label>
									</div>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Payment Method Widget -->
							<div class="single-widget payement">
								<div class="content">
									<img src="images/payment-method.png" alt="#">
								</div>
							</div>
							<!--/ End Payment Method Widget -->
							<!-- Button Widget -->
							<div class="single-widget get-button">
								<div class="content">
									<div class="button">
										<button type="submit" class="btn " >Proceed to Checkout</button>
									</div>
								</div>
							</div>
							</form>
							<!--/ End Button Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Checkout -->
		
		<!-- Start Shop Services Area  -->
		<section class="shop-services section home">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="ti-rocket"></i>
							<h4>Free Delivery</h4>
							<p>This Month!</p>
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
		<!-- End Shop Services -->
		
			
		<?php
		require('includes/scripts.php');
		require('includes/footer.php');
		
		
		?>