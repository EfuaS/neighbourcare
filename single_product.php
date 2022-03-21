<?php

require('settings/core.php');

//include page header and navbar from includes file to reduce code redunduncy
require('includes/header.php');
require('includes/navbar.php');

require("controllers/product_controller.php");

 //retrieve chosen product from database with product id
$pid = $_GET['pid'];
$one_product = getOneProductController($pid);


// initialize product quantity to 1
$productqty = 1;
$product_name = null;
?>

		<!-- Shop Single -->
		<section class="shop single section">
<?php
    foreach ($one_product as $x => $product_record) {

		$product_name = $product_record["product_name"];
?>
					<div class="container">
						<div class="row"> 
							<div class="col-12">
								<div class="row">
									<div class="col-lg-6 col-12">
										<!-- Product Slider -->
										<div class="product-gallery">
											<!-- Images slider -->
											<div class="flexslider-thumbnails">
												<ul class="slides">
													<li data-thumb="images/products/<?php echo $product_record["product_image"]; ?>" rel="adjustX:10, adjustY:">
														<img src="images/products/<?php echo $product_record["product_image"]; ?>" alt="#">
													</li>
												</ul>
											</div>
											<!-- End Images slider -->
										</div>
										<!-- End Product slider -->
									</div>
									<div class="col-lg-6 col-12">
										<div class="product-des">
											<!-- Description -->
											<div class="short">
												<h4>Here's what you chose...</h4>
												<div class="rating-main">
													<ul class="rating">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-half-o"></i></li>
														<li class="dark"><i class="fa fa-star-o"></i></li>
														<li>Rating</li>
													</ul>
												</div>
												<p class="price"><span class="discount">GHS <?php echo $product_record["product_price"]; ?></span> </p>
												<p class="description"><?php echo $product_record["product_desc"]; ?></p>
											</div>
											<!--/ End Description -->
											<!-- Product Buy -->
											<div class="product-buy">
												<div class="quantity">
													<h6>Quantity :</h6>
													<!-- Input Order -->
                                                    <form method="post" action="actions/mng_cart.php"> 
                                                        <div class="input-group">
                                                            <input type="number" name="qty" value="1" required>
															<input type="hidden" name="product_id" value="<?php echo $product_record["product_id"]; ?>">
                                                        </div>
													<!--/ End Input Order -->

												</div>
												<div class="add-to-cart">
													<input type='submit' class='btn btn-primary' value='Add to Cart'>
												</div>
												</form>

												<p class="cat">For fabrics, Quantity refers to Yards.</p>
											</div>
											<!--/ End Product Buy -->
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="product-info">
											<div class="nav-main">
												<!-- Tab Nav -->
												<ul class="nav nav-tabs" id="myTab" role="tablist">
													<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a></li>
												</ul>
												<!--/ End Tab Nav -->
											</div>
											<div class="tab-content" id="myTabContent">
												<!-- Reviews Tab -->
												<div class="tab-pane " id="reviews" role="tabpanel">
													<div class="tab-single review-panel">
														<div class="row">
															<div class="col-12">
																<div class="ratting-main">
																	<div class="avg-ratting">
																		<h4>What others think</h4>
																		<span>Based on several comments</span>
																	</div>

<?php
// check if reviews exists for this product from database
	//get reviews of product
	$check = getReviewsController($product_name);
	 if (!empty($check)) {
		 
		foreach ($check as $x => $review) {
?>
			<!-- Single Rating -->
			<div class="single-rating">
				<div class="rating-author">
					<img src="images/undraw_profile_1.svg" alt="#">
				</div>
				<div class="rating-des">
					<h5><?php echo $review['Person_Name'];?></h5>
					<div class="ratings">
					<h6 >Stars: <?php echo $review['Rating'];?></h6><ul class="rating"><i class="fa fa-star"></i> 																			
				</ul>
					</div>
					<p><?php echo $review['Message'];?></p>
				</div>
			</div>
			<!--/ End Single Rating -->

<?php
	 }
	 }elseif (empty($check)) {
?>
		<div class="single-rating">
		<div class="rating-des">
			<h5>No Reviews for this product yet.</h5>
		</div>
	</div>
<?php
	 }

?>
																</div>
																<!-- Review -->
																<div class="comment-review">
																	<div class="add-review">
																		<h5>Add A Review</h5>
																		<p>Your email address will not be published. Required fields are marked</p>
																	</div>
																	<h4>Your Rating</h4>
																	<div class="review-inner">
																		<div class="ratings">
																			<ul class="rating">
																				<li><i class="fa fa-star"></i></li>
																				<li><i class="fa fa-star"></i></li>
																				<li><i class="fa fa-star"></i></li>
																				<li><i class="fa fa-star"></i></li>
																				<li><i class="fa fa-star"></i></li>
																			</ul>
																		</div>
																	</div>
																</div>
																<!--/ End Review -->
																<!-- Form -->
																<form class="form" method="post" action="review.php">
																	<div class="row">
																		<div class="col-lg-6 col-12">
																			<div class="form-group">
																				<label>Your Name </label>
																				<input name="reveiwer" type="text" required>
																			</div>
																		</div>
																		<div class="col-lg-6 col-12">
																			<div class="form-group">
																				<label>Product Name<span>*</span></label>
																				<input name="rev_product" type="text" value="<?php echo $product_record["product_name"]; ?>" readonly>
																			</div>
																		</div>
																		<div class="col-lg-6 col-12">
																			<div class="form-group">
																				<label>Your Email *</label>
																				<input name="rev_email" type="email" required>
																				<input name="pro_id" type="hidden" value="<?php echo $product_record["product_id"]  ?>" >
																			</div>	
																		</div>
																		<div class="col-lg-6 col-12">
																			<div class="form-group">
																				<select  name="rev_rating">
																					<option value="1">1 Star</option>
																					<option value="2">2 Stars</option>
																					<option value="3">3 Stars</option>
																					<option value="4">4 Stars</option>
																					<option value="5">5 Stars</option>
																				</select>  
																			</div>	
																		</div>
																		<div class="col-12">
																			<div class="form-group message">
																				<label>Your Review<span>*</span></label>
																				<textarea name="rev_message" placeholder="" required></textarea>
																			</div>
																		</div>
																		<div class="col-12">
																			<div class="form-group button">
																				<button type="submit" name="reviewbtn" class="btn ">Submit Review</button>
																			</div>
																		</div>
																	</div>
																</form>
																<!--/ End Form -->
															</div>
														</div>
													</div>
												</div>
												<!--/ End Reviews Tab -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
<?php
    }
?>
		</section>
		<!--/ End Shop Single -->
		
				
<?php
require('includes/scripts.php');
require('includes/footer.php');


?>