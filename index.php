<?php
require('settings/core.php');

//include page header and navbar from includes file to reduce code redunduncy

require('includes/navbar.php');
require('includes/header.php');
$visitor_ip = getRealIpAddr();

require(dirname(__FILE__)).'/controllers/cart_controller.php';
$cartCount = count(countCartController($visitor_ip));
$_SESSION['cartcount'] = $cartCount;

?>

	<!-- Slider Area -->
	<section class="hero-area3">
		<div class="container">
			<div class="row">
					<div class="col-12">
						<div class="section-title">
							<br>
							<h2>Free Delivery This MONTH !!</h2>
						</div>
				</div>

				<div class="col-lg-8 col-12">
				<a href='fabrics.php'> 
					<div class="big-content ">
					</div>
				</a>
				</div>
				<div class="col-lg-4 col-12">
				<a href='cosmetics.php'> 
					<div class="small-content first">
						<div class="inner">
						</div>
					</div>
					</a>
					<a href='perfumes.php'> 
					<div class="small-content secound">
						<div class="inner">
						</div>
					</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Slider Area -->
	
	<!-- Start Small Banner  -->
	<!-- <section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				 Single Banner  -->
				<!-- <div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="./images/bags.png" alt="#">
						<div class="content">
							<p>Women's Bags</p>
							<h3>Fashionable <br> Hand Bags</h3>
							<a href="accessories.php">Shop Now</a>
						</div>
					</div>
				</div> -->
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<!-- <div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="./images/fabrics.png" alt="#">
						<div class="content">
							<p>African Prints</p>
							<h3>Popular Ankara <br> Designers</h3>
							<a href="fabrics.php">Shop Now</a>
						</div>
					</div>
				</div> -->
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<!-- <div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="./images/cosmetics.png" alt="#">
						<div class="content">
							<p>Cosmetics</p>
							<h3>YOur Favorite <br> Brands Here</h3>
							<a href="cosmetics.php">Shop Now</a>
						</div>
					</div>
				</div> -->
				<!-- /End Single Banner  -->
			<!-- </div>
		</div> -->
	<!-- </section> --> 
	<!-- End Small Banner -->
	
	<!-- <br>
	<br>
	<hr	>
	<br>
	<br> -->
	<!-- Brands Carousel -->
<!-- <section> 
	<div class="brand-carousel section-padding owl-carousel">
		<div class="single-logo">
		  <img src="images/Logos/2.png" alt="nivea">
		</div>
	  <div class="single-logo">
		  <img src="images/Logos/1.png" alt="dove">
		</div>
	  <div class="single-logo">
		  <img src="images/Logos/5.png" alt="gtp">
		</div>
	  <div class="single-logo">
		  <img src="images/Logos/6.png" alt="woodin">
		</div>
	  <div class="single-logo">
		  <img src="images/Logos/4.png" alt="dior">
		</div>
	  <div class="single-logo">
		  <img src="images/Logos/3.png" alt="channel">
		</div>
	  </div>
</section> -->
	<br>



	<!-- Start Product Area -->
    <div class="product-area section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Ankara for all Occassions</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="product-info">
						<div class="nav-main">
							<!-- Tab Nav -->
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Fun & Outings</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Classics</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Colorful</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Woodin</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Lace</a></li>
							</ul>
							<!--/ End Tab Nav -->
						</div>
						<div class="tab-content" id="myTabContent">
							<!-- Start Single Tab -->
							<div class="tab-pane fade show active" id="man" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/products/African Print 1.jpeg" alt="#">
														<img class="hover-img" src="images/products/African Print 1.jpeg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Blue Symbolic African Print Design</a></h3>
													<div class="product-price">
														<span>GHS 15.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/products/African Print 2.jpeg" alt="#">
														<img class="hover-img" src="images/products/African Print 2.jpeg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Awesome Yellow Show</a></h3>
													<div class="product-price">
														<span>GHS 13.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/products/African Print 3.jpeg" alt="#">
														<img class="hover-img" src="images/products/African Print 3.jpeg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Sun Inspired Ankara Design</a></h3>
													<div class="product-price">
														<span>GHS 17.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/products/African Print 4.jpeg" alt="#">
														<img class="hover-img" src="images/products/African Print 4.jpeg" alt="#">
														<span class="new">New</span>
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Aquatic Blend of Pink Design</a></h3>
													<div class="product-price">
														<span>GHS 12.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="women" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/fabrics/57.png" alt="#">
														<img class="hover-img" src="images/fabrics/57.png" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Black and White Design</a></h3>
													<div class="product-price">
														<span>GHS 20.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/fabrics/52.png" alt="#">
														<img class="hover-img" src="images/fabrics/52.png" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">FLowery Black GHS  White Show</a></h3>
													<div class="product-price">
														<span>GHS 29.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/fabrics/45.png" alt="#">
														<img class="hover-img" src="images/fabrics/45.png" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Black and White Design</a></h3>
													<div class="product-price">
														<span>GHS 20.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/fabrics/50.png" alt="#">
														<img class="hover-img" src="images/fabrics/50.png" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">FLowery Black GHS  White Show</a></h3>
													<div class="product-price">
														<span>GHS 29.00 /yard</span>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="kids" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/fabrics/1.png" alt="#">
														<img class="hover-img" src="images/fabrics/1.png" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Red & Black Funeral Clothe</a></h3>
													<div class="product-price">
														<span>GHS 30.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/fabrics/5.png" alt="#">
														<img class="hover-img" src="images/fabrics/5.png" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Pure Black Funeral Clothe</a></h3>
													<div class="product-price">
														<span>GHS 29.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/fabrics/3.png" alt="#">
														<img class="hover-img" src="images/fabrics/3.png" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Red & Black Funeral Clothe</a></h3>
													<div class="product-price">
														<span>GHS 30.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/fabrics/8.png" alt="#">
														<img class="hover-img" src="images/fabrics/8.png" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Pure Black Funeral Clothe</a></h3>
													<div class="product-price">
														<span>GHS 29.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="accessories" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/products/woodin1.jpeg" alt="#">
														<img class="hover-img" src="images/products/woodin1.jpeg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Woodin Design Brown</a></h3>
													<div class="product-price">
														<span>GHS 49.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/products/woodin2.jpeg" alt="#">
														<img class="hover-img" src="images/products/woodin2.jpeg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Woodin Design Blue</a></h3>
													<div class="product-price">
														<span>GHS 59.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/products/woodin3.jpeg" alt="#">
														<img class="hover-img" src="images/products/woodin3.jpeg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Woodin Design Green</a></h3>
													<div class="product-price">
														<span>GHS 39.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="essential" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/products/lace1.jpeg" alt="#">
														<img class="hover-img" src="images/products/lace1.jpeg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Beautiful Black Lace</a></h3>
													<div class="product-price">
														<span>GHS 129.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/products/lace2.jpeg" alt="#">
														<img class="hover-img" src="images/products/lace2.jpeg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="cosmetics.php">Lavender Floral Lace</a></h3>
													<div class="product-price">
														<span>GHS 159.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/products/lace3.jpeg" alt="#">
														<img class="hover-img" src="images/products/lace3.jpeg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Beautiful Red Lace</a></h3>
													<div class="product-price">
														<span>GHS 149.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="fabrics.php">
														<img class="default-img" src="images/products/lace4.jpeg" alt="#">
														<img class="hover-img" src="images/products/lace4.jpeg" alt="#">
														<span class="new">New</span>
													</a>
													<div class="button-head">
														<div class="product-action-2">
															<a title="Add to cart" href="fabrics.php">View More</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="fabrics.php">Ivory Beaded Lace</a></h3>
													<div class="product-price">
														<span>GHS 145.00 /yard</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<!-- End Product Area -->

	<!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="./images/perfumes.png" alt="#">
						<div class="content">
							<p>Try our</p>
							<h3><span> 100%</span> High Quality <br> Perfumes</h3>
							<a href="cosmetics.php">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="./images/baggs.png" alt="bags">
						<div class="content">
							<p>Try our</p>
							<h3>Premuim <br> hand bags</h3>
							<a href="accessories.php" class="btn">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->
	
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hot Sale Cosmetics</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="cosmetics.php">
									<img class="default-img" src="./images/1.png" alt="Nivea Spray ">
									<img class="hover-img" src="./images/1.png" alt="Nivea Spray ">
									<span class="out-of-stock">Hot</span>
								</a>
								<div class="button-head">
									<div class="product-action-2">
										<a title="Add to cart" href="cosmetics.php">View More</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Shower gel Product -->
						<div class="single-product">
                            <div class="product-img">
                                <a href="cosmetics.php">
                                    <img class="default-img" src="./images/3.png" alt="#">
                                    <img class="hover-img" src="./images/3.png" alt="#">
                                </a>
                            </div>
                        </div>
						<!-- End Shower gel Product -->
						<!-- Start Dove soap Product -->
						<div class="single-product">
                            <div class="product-img">
                                <a href="cosmetics.php">
                                    <img class="default-img" src="./images/2.png" alt="dove soap">
                                    <img class="hover-img" src="./images/2.png" alt="dove soap">
                                </a>
                            </div>
                        </div>
						<!-- End Dove soap Product -->
						<!-- Start Palmers Product -->
						<div class="single-product">
                            <div class="product-img">
                                <a href="cosmetics.php">
                                    <img class="default-img" src="./images/5.png" alt="Palmers">
                                    <img class="hover-img" src="./images/5.png" alt="Palmers">
                                </a>
                            </div>
                        </div>
						<!-- End Palmers Product -->
						<!-- Start Roll ON Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="cosmetics.php">
									<img class="default-img" src="./images/4.png" alt="rollon">
									<img class="hover-img" src="./images/4.png" alt="rollon">
								</a>
							</div>
						</div>
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	
		<!-- Start Shop Home List  -->
		<section class="shop-home-list section">
		<div class="container">
		<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hot & New</h2>
					</div>
				</div>
            </div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Perfumes</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="images/perfumes/lancome.jpg" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h4 class="title"><a href="#">Lancome IDOLE</a></h4>
									<p class="price with-discount">$59</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="images/perfumes/dior poison.jpg" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Dior Hypnotic Poison</a></h5>
									<p class="price with-discount">$44</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="images/perfumes/eros.jpg" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Versace Eros</a></h5>
									<p class="price with-discount">$89</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Body Splash</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="images/perfumes/victoria.png" >
									<!-- <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a> -->
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title">Victoria's Secret Coconut Passion</h5>
									<p class="price with-discount">GHS 40</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="images/perfumes/victoria2.jpg" alt="#">
									<!-- <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a> -->
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Victoria's Secret Coconut Craze</a></h5>
									<p class="price with-discount">GHS 33</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="images/perfumes/victoria3.jpg" alt="#">
									<!-- <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a> -->
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Victoria's Secret Coconut Twist</a></h5>
									<p class="price with-discount">GHS 45</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Top viewed</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="images/bio.jpg" >
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a>Bio Oil</a></h5>
									<p class="price with-discount">$22</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="images/palmers.png" alt="#">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a>Palmers Fade Cream</a></h5>
									<p class="price with-discount">$35</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="images/clear essence.png" alt="#">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a>Clear Essence skin Beautifying Milk</a></h5>
									<p class="price with-discount">$99</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Home List  -->

	
	<!-- Start Cowndown Area -->
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="images/grand.png" alt="#">
						</div>	
					</div>	
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title">Deal of the Month</p>
								<h3 class="title">Free Delivery this MONTH !!</h3>
								<p class="text"> To celebrate the Grand Opening of our Online Store, Neighbour Care is giving free delivery for all your purchases this month of <span class="title">Febuary</span>. </p>
								<h1 class="price">GHS 0 <s>GHS 25</s></h1>
								<div class="coming-time">
									<div class="" data-countdown="2022/02/30"></div>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- /End Cowndown Area -->
	
	
	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Fast Delivery</h4>
						<p>Always</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Affordable</h4>
						<p>and quality</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Secure Payment</h4>
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
	<!-- End Shop Services Area -->
	
	
	
 <?php
require('includes/scripts.php');
require('includes/footer.php');


?>
