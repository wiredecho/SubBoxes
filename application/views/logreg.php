
<!doctype html>
<html>
<head>
	<title>Login and Registration</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
		</script>

	<style type="text/css">

		#box1, #box2{
			height: 200px;
			width: 300px;
			position: relative;
			display: inline-block;
			vertical-align: top;
			top: 50px;
			left: 35%;
		}
	body{
		background-color: #FFEECC;
	}

	.passport{
		margin-top: 50px;
	}
	</style>
</head>
<body>

<!-- *******************    NAVIGATION BAR  ********************** -->
	
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
<!-- *******************    LOGIN AND REG  ********************** -->
	<div id="container">

			<center><img class="passport" src="/assets/passport.png" width="150" alt="example"></center>


	<?php 
	        if($this->session->flashdata('message')){
	            echo "<div id='warning'><h3>" . $this->session->flashdata('message') . "</h3></div>";
	        }
	    ?>	


		<div id="box2">
			<form action='/users/process' method="post">
				<h2>Login</h2>
				<input type="text" name="email" placeholder="E-mail"><br>
				<input type="password" name="password" placeholder="Password"><br>
				<input type="submit" value="Login" class="btn btn-primary"><br>
			</form>
		</div>
		<div id="box1">
			<form action="/users/add" method="post">
				<h2>Register</h2>
				<input type="text" name="screenname" placeholder="Screen Name"><br>
				<input type="text" name="email" placeholder="E-mail"><br>
				<input type="password" name="password" placeholder="password"><br>
				<input type="password" name="confirm_password" placeholder="confirm password"><br>
				<input type="text" name="city" placeholder="City"><br>
				<input type="text" name="state" placeholder="State"><br>
				<input type="text" name="country" placeholder="Country"><br>
				<input type="submit" value="Register" class="btn btn-primary"><br>
			</form>
		</div>
	</div>
</body>
</html>

