<!DOCTYPE html>
<html lang="en">
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" >Boxes</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></a></li>
				<li><a href="/users">Login</a></li>
				<li><a href="/main">Home</a></li>
				<li><a href="/users/view_create">Create</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			   <li><a href="#">Logout</a></li>
			</ul>
		</div>
	</nav>
	
	<div class='web'>
		<form action="<?php echo site_url('Stripe_payment/checkout');?>" method="POST">
			<script src="https://checkout.stripe.com/checkout.js"
				class="stripe-button"
				data-key="XXX_YOUR_PUBLISHER_KEY"
				data-image="your site image"
				data-name="w3code.in"
				data-description="Demo Transaction ($100.00)"
				data-amount="10000" />
			</script>
		</form>
	</div>
</body>
</html>