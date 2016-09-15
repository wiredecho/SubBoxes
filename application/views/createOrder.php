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

	.input{
		width: 50px;
	}

	.container{
		background-color: #FFEECC;
		width: 1905px;
		height: 900px;
		padding-left: 0
		padding-right: 0;
		margin-left: 0;
		margin-right: 0;
		margin-top: -20px;
	}

/*	.row{
		position: relative;
		top: 50px;
		left: 40%
	}

	#Price{
		position: relative;
		top: 43px;
		left: 39%
	}

	.choose_file{
		position: relative;
		top: 52px;
		left: 39%
	}*/

	.row{
		position: fixed;
		width: 500px;
		height: 500px;
		top: 30%;
		left: 41%;
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
			   <li><a href="/users/logout">Logout</a></li>
			</ul>
		</div>
	</nav>

<!-- 	<div class="container">

		<div class="row">
			<textarea rows="1" cols="40">Insert Title</textarea>
		</div>

		<div class="row">
			<textarea rows="5" cols="40">Insert description</textarea>
		</div>
		<div id="Price">
			<h5>Price Range</h5>
			<input type="text" name="min" placeholder="Minimum">
			<input type="text" name="max" placeholder="Maximum">
		</div>


		<div class="choose_file">
	        <span>Choose Picture File</span>
	        <input name="Select File" type="file" />
	        <input name="Select File" type="file" />
	        <input name="Select File" type="file" />
	        <input type="submit" value="Submit">
	    </div>
	 </div> -->

	 	<div class="container">

			<div class="row">
			<form action="create_a_box" method="post">
				<textarea name="title" rows="1" cols="40" placeholder="Insert Title"></textarea>
			
				<textarea name="content" rows="5" cols="40" placeholder="Insert description"></textarea>
			
				<h5>Price Range</h5>
				<input name="price" type="text" name="min" placeholder="Price">
		
		        <h5>Choose Picture File</h5>
		        <input name="filename" name="Select File" type="file" />
		        <input type="submit" value="Submit">
		    </form>
		    </div>
	 	</div>
</body>
</html>
