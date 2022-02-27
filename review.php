<?php
require('settings/core.php');

//include page header and navbar from includes file to reduce code redunduncy
require('includes/header.php');
require('includes/navbar.php');

function success(){
	echo('<p>Submitted Sucessfully. You should receive a call from us soon.</p>');
}


?>
  
	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h4>Looking for a fabric that's not here? </h4>
									<h3>We can get it for you</h3>
									<?php
									if (isset($_POST['reviewbtn'])) {
										$username = $_POST['name'];
										$product_name = $_POST['product_name'];
										$usermail = $_POST['email'];
										$user_contact = $_POST['contact'];
										$message = $_POST['message'];
									
										include('controllers/product_controller.php');
									
										// insert into custom order table
										$check = createCustomOrderContr($username,$product_name,$usermail,$user_contact,$message);
										if ($check = true) {
											// return to previous page
											success();
										}else {
											//go to error page
											echo('Something went wrong, try again'); 
										}
									}
									
									?>
								</div>
								<form class="form" method="post" action="review.php">
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Name <span>*</span></label>
												<input name="name" type="text" required>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Product Name<span>*</span></label>
												<input name="product_name" type="text" required>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input name="email" type="email" required>
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Contact Number<span>*</span></label>
												<input name="contact" type="tel" required>
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Tell us more about it<span>*</span></label>
												<textarea required name="message"></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" name="reviewbtn" class="btn ">Submit</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="single-head">
								<div class="single-info">
									<i class="fa fa-phone"></i>
									<h4 class="title">Contact Us:</h4>
									<ul>
										<li>+233 24 398 8909</li>
										<li>+233 54 091 4554</li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-envelope-open"></i>
									<h4 class="title">Email:</h4>
									<ul>
										<li><a href="mailto:info@yourwebsite.com">info@ncare.com</a></li>
										<li><a href="mailto:info@yourwebsite.com">support@ncare.com</a></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-location-arrow"></i>
									<h4 class="title">Our Address:</h4>
									<ul>
										<li>Krakue Road,<br> A-Lang, <br>Community Two,<br> Tema,<br> Ghana</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ End Contact -->	
	
<?php




require('includes/scripts.php');
require('includes/footer.php');



?>