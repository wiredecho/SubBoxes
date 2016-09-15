<html>
<head>
<title>Upload Form</title>
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

		<h3>Your file was successfully uploaded!</h3>

		<ul>
			<?php foreach ($upload_data as $item => $value):?>
			<li><?php echo $item;?>: <?php echo $value;?></li>
			<?php endforeach; ?>
		</ul>

		<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

	</body>
</html>