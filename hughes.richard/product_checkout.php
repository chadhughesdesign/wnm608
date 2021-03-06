<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";
$cart = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Checkout Page</title>

	<?php include "parts/meta.php";?>

	<style>
		body {
  		background-image: url('images/cement.jpg');
  		background-repeat: no-repeat;
  		background-attachment: fixed;
  		background-size: cover;
		}
	</style>

</head>
<body>

	<?php include "parts/navbar.php"; ?>
	
		<div class="container">
			<div class="grid gap">
				<div class="col-xs-12 col-md-5">
					<div class="card soft">
						<h1>Review Order</h1>
						<div class="div class card-section">
							
							<?php 
							echo array_reduce($cart,function($r,$o){
								$totalfixed = number_format($o->total,2,'.','');
								return $r."<div class='display-flex'>
									<div class='flex-stretch' style= 'font-weight: bold; color: var(--color-neutral-medium);'>$o->product_name</div>
									<div class='flex-none'>&dollar;$totalfixed</div>	
								</div>";
								}) ?>
						</div>
						<?= cartTotals(); ?>		
					</div>
				</div>
				
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<h1>Product Checkout</h1>

						<form class="form">
							<h3>Address</h3>

							<div class="form-control">
								<label  for="address-street" class="form-label">Street</label>
								<input id= "address-street" type="text" placeholder="Street Name" class="form-input">
							</div>

							<div class="form-control">
								<div class="grid gap">
									<div class="col-xs-12 col-md-6">
										<label  for="address-city" class="form-label">City</label>
										<input id= "address-city" type="text" placeholder="City" class="form-input">
									</div>

									<div class="col-xs-12 col-md-6">
										<label  for="address-state" class="form-label">State</label>
										<input id= "address-state" type="text" placeholder="State" class="form-input">
									</div>
								</div>
							</div>

							<div class="form-control">
								<label  for="address-zip" class="form-label">Zip Code</label>
								<input id= "address-zip" type="text" placeholder="Zip Code" class="form-input">
							</div>

							<div class="form-control">
								<div class="grid gap">
									<div class="col-xs-12 col-md-6">
										<label  for="address-country" class="form-label">Country</label>
										<input id= "address-country" type="text" placeholder="Country" class="form-input">
									</div>
								</div>
							</div>

						
							<H3>Payment</H3>
							<div class="form-control">
								<label  for="payment-name" class="form-label">Full Name</label>
								<input id= "payment-name" type="text" placeholder="Name" class="form-input">
							</div>

							<div class="form-control">
								<label  for="payment-number" class="form-label">Card Number</label>
								<input id= "payment-number" type="text" placeholder="####-####-####-####" class="form-input">
							</div>

							<div class="form-control">
								<div class="grid gap">
									<div class="col-xs-12 col-md-6">
										<label  for="payment-expiration" class="form-label">Expiration</label>
										<input id= "payment-expiration" type="text" placeholder="MM-YY" class="form-input">
									</div>

									<div class="col-xs-12 col-md-6">
										<label  for="payment-cvv" class="form-label">CVV</label>
										<input id= "payment-cvv" type="text" placeholder="CVV" class="form-input">
									</div>
								</div>
							</div>

							<div class="form-control">
								<label  for="address-zip" class="form-label">Zip Code</label>
								<input id= "address-zip" type="text" placeholder="Zip Code" class="form-input">
							</div>

							<div class="form-control">
								<div class="grid gap">
									<div class="col-xs-12 col-md-6">
										<label  for="address-country" class="form-label">Country</label>
										<input id= "address-country" type="text" placeholder="Country" class="form-input">
									</div>
								</div>
							</div>
							<div class="form-control">
							<!-- <input type="submit" class="form-button" value="submit"> -->
							<a href="product_confirmation.php" class="form-button">Complete Checkout</a>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>






</body>
</html>