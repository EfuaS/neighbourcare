<?php
require('settings/core.php');

//include page header and navbar from includes file to reduce code redunduncy
require('includes/header.php');
require('includes/navbar.php');

?>
				
		<!-- Shop Register -->
		<section class="shop login section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-6 offset-lg-3 col-12">
						<div class="login-form">
							<h2>Register</h2>
							<p>Please register in order to checkout more quickly</p>
							<!-- Form -->
							<form class="form" method="post" action="actions/registerprocess.php">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label>Your Full Name<span>*</span></label>
											<input type="text" name="name" placeholder="" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>Your Email<span>*</span></label>
											<input type="text" name="email" placeholder="" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>Your Contact<span>*</span></label>
											<input type="tel" name="tel" placeholder="" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>Your Password<span>*</span></label>
											<input type="password" name="password" placeholder="" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>Confirm Password<span>*</span></label>
											<input type="password" name="cpassword" placeholder="" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group login-btn">
											<button class="btn" name="regbtn" type="submit">Register</button>
											<a href="login.php" >Login</a>
										</div>
									</div>
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Login -->
		
<?php
require('includes/scripts.php');
require('includes/footer.php');


?>