<!DOCTYPE html>
<html>
<head>
	<title>Product Details</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>

<style type="text/css">
	body{
		background-color: #FFEECC;
	}

 	#a {
 		border: solid black 2px;
 	}

 	#b {
 		border: solid black 2px;
 	}

 	#c {
 		border: solid black 2px;
 	}
	
</style>
</head>
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
<div class="container">
	<h1><?= $box['title'] ?></h1>
	<h3><?= $box['content'] ?></h3>
	<h1><?= $box['price'] ?></h1>
	<div class="row">
		<div class="col-md-4" id="MainPicture">
			<img src="http://placehold.it/400x400">
			<select>
			  <option value="value1">value1</option>
			  <option value="value2">value2</option>
			  <option value="value3">value3</option>
			  <option value="value4">value4</option>
			</select>
		</div>
		<div class="col-md-4" id="secondPicture">
			<img src="http://placehold.it/200x200">
			<img src="http://placehold.it/200x200">
		</div>
		<div class="col-md-4" id="link">
			<ul><a href="#">link</a></ul>
		</div>
		<div class="col-md-4" id="link">
			<textarea rows="4" cols="50"></textarea>
		</div>

		<form action="<?php echo site_url('Stripe_payment/checkout');?>" method="POST">
			<script src="https://checkout.stripe.com/checkout.js"
				class="stripe-button"
				data-key="pk_test_xYMza0OevOfEB7TfM8hgk8y2"
				data-image="your site image"
				data-name="w3code.in"
				data-description="Box"
				data-amount=<?= $box['price'] ?>
				data-shipping-address="true"/>

			</script>
		</form>


</body>
</html>