<?php
require('settings/core.php');

//include page header and navbar from includes file to reduce code redunduncy
require('includes/header.php');
require('includes/navbar.php');

?>	



		<!-- Product Style 1 -->
		<section class="product-area shop-sidebar shop-list shop section">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-8 col-12">
						<div class="row">
							<div class="col-12">
								<!-- Shop Top -->
								<div class="shop-top">
									<div class="shop-shorter">
										<div class="single-shorter">
											<label>Show :</label>
											<select>
												<option selected="selected">09</option>
												<option>15</option>
												<option>25</option>
												<option>30</option>
											</select>
										</div>
										<div class="single-shorter">
											<label>Sort By :</label>
											<select>
												<option selected="selected">Name</option>
												<option>Price</option>
												<option>Size</option>
											</select>
										</div>
									</div>
									<ul class="view-mode">
										<li><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
										<li class="active"><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
									</ul>
								</div>
								<!--/ End Shop Top -->
							</div>
						</div>
						<div class="row">
<?php
	// when search button is clicked in navbar file, get phrase
	if(isset($_POST['search'])){
		$phrase = $_POST['search_phrase'];

		// get product controller which contains search code
		require_once("controllers/product_controller.php");
		//pass search phrase entered to search function
		$results = searchDbController($phrase);

// save function result as results and display 
foreach( $results as $searchresult ) {
?>

								<!-- Start Single List -->
								<div class="col-12">
									<div class="row">
										<div class="col-lg-4 col-md-6 col-sm-6">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="images/products/<?php echo $searchresult["product_image"]; ?>" alt="#">
														<img class="hover-img" src="images/products/<?php echo $searchresult["product_image"]; ?>" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action-2">
														<a title="Add to cart" href="single_product.php?pid=<?php echo $searchresult["product_id"]; ?>">View Product</a>														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-12">
											<div class="list-content">
												<div class="product-content">
													<div class="product-price">
														<span>GHS <?php echo $searchresult["product_price"]; ?></span>
													</div>
													<h3 class="title"><a href="product-details.html"><?php echo $searchresult["product_name"]; ?></a></h3>
													<div class="review-inner">
														<div class="ratings">
															<ul class="rating">
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star-half-o"></i></li>
																<li class="total">(4.5)</li>
															</ul>
														</div>
													</div>
												</div>
												<p class="des"><?php echo $searchresult["product_desc"]; ?></p>
												<a href="single_product.php?pid=<?php echo $searchresult["product_id"]; ?>" class="btn">View Product</a>
											</div>
										</div>
									</div>
								</div>
<?php
	}
}

?>
							</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Product Style 1  -->	

		
		
<?php

require('includes/scripts.php');
require('includes/footer.php');


?>