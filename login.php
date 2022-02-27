<?php
require('settings/core.php');

//include page header and navbar from includes file to reduce code redunduncy
require('includes/header.php');
require('includes/navbar.php');

?>
				
		<!-- Shop Login -->
		<section class="shop login section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-6 offset-lg-3 col-12">
						<div class="login-form">
							<h2>Login</h2>
							<h3> Welcome Back !</h3>
							<!-- Form -->
							<form class="form" method="post" action="actions/loginprocess.php">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label>Your Email<span>*</span></label>
											<input type="email"  placeholder="" name="log_mail" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>Your Password<span>*</span></label>
											<input type="password"  placeholder="" name="log_pass" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group login-btn">
											<button name="logbtn" class="btn" type="submit">Login</button>
											<a href="register.php" >Register</a>
										</div>
										<!-- <a href="#" class="lost-pass">Lost your password?</a> -->
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