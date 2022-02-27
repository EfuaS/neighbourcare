<?php
require("settings/core.php");
require("controllers/checkout_controller.php");



check_login();
// get user email and use it to get customer id.
$usermail = $_SESSION["email"];
// get customer if
$getCustIdResults = getCustId_controller ($usermail);

// order details of receiver of orders . might not neccessarily be to the owner of the account
$name  = $_GET["fname"];
$email = $_GET["email"];  
$phone = $_GET["phone"];
$ref = $_GET["ref"];
$city = $_GET["city"];  
$region = $_GET["region"];  
$address = $_GET["address"];
$carttotal = $_GET['carttotal'];
$invoice_no = rand(1000, 2147483647);
$customer_id = $getCustIdResults['0']['customer_id'];

// at this point order has been placed successfully, so insert into orders table in db
// If successful insertion then proceed to process payment
$insertResults = addOrderConttoller($customer_id,$invoice_no,$name,$phone,$email,$city,$region,$address,$carttotal);


    require("includes/header.php");
    require("includes/navbar.php");


?>

				
		<!-- Payment Form -->
		<section class="shop login section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-6 offset-lg-3 col-12">
						<div class="login-form">
							<h2>Payment Form</h2>
							<h3> Fill details below to complete payment</h3>
							<!-- Form -->
							<form class="form" id="paymentForm">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label>Your Email<span>*</span></label>
											<input type="email" value="<?php echo $email; ?>" id="mail" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>Amount<span>*</span></label>
											<input type="number" value="<?php echo $carttotal; ?>" id="amt" readonly>
										</div>
									</div>
                                    <div class="col-12">
										<div class="form-group">
											<input type="hidden" value="<?php echo $invoice_no; ?>" id="invoice" >
										</div>
									</div>
                                    <div class="col-12">
										<div class="form-group">
											<label>Payment Reference<span>*</span></label>
											<input type="text"  value="<?php echo $ref; ?>" id="ref" >
										</div>
									</div>

									<div class="col-12">
										<div class="form-group login-btn">
											<button name="paybtn" class="btn" onclick="payWithPaystack()" type="submit">Proceed</button>
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

<script src="https://js.paystack.co/v1/inline.js"></script> 



<script> 
            var paymentForm = document.getElementById('paymentForm');
            paymentForm.addEventListener('submit', payWithPaystack, false);
            function payWithPaystack(e) {
                let email = document.getElementById('mail').value
                let amount = document.getElementById('amt').value
                let invoice = document.getElementById('invoice').value



                e.preventDefault()
                var handler = PaystackPop.setup({
                    key: 'pk_test_ff644bb327c10e5393677f660553c3fffec45468', // Replace with your public key
                    email: document.getElementById('mail').value,
                    amount: document.getElementById('amt').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
                    currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
                    ref: document.getElementById('ref').value, // Replace with a reference you generated
                    callback: function(response) {
                    //this happens after the payment is completed successfully
                    var reference = response.reference;
                    alert('Payment complete! Reference: ' + reference);
                    // Make an AJAX call to your server with the reference to verify the transaction
                    window.location = `actions/process_payment.php?ref=${reference}&email=${email}&amount=${amount}&invoice=${invoice}`
                    },
                    onClose: function() {
                    alert('Transaction was not completed, window closed.');
                    },
                });
            handler.openIframe();
            }
</script>