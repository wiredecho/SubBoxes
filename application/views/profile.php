<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>

<style type="text/css">
	
p{
	word-wrap: break-word;
}

#picture200{
	height: 200px;
	width: 300px;
}

.bottomrow{
	margin-right: 20px;
}

.navbar-default{
	background-color:#CCEEAA;
}

body{
	background-color: #FFEECC;
}



</style>
</head>

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



<!-- ************************ PROFILE PHOTO UPLOAD ********************** -->


<div class="container">
    <h1><?= $user['screenname'] ?></h1>

    <div class="row">
        <div class="col-md-4" id="picture200">
            <img src="/assets/profile_pics/<?=$user['filename'];?>">

			<?php echo form_open_multipart('upload/do_upload');?>

			<input type="file" name="userfile" size="20" />
			<input type="submit" value="upload" />


<!-- *********************** BOX 1 PHOTO UPLOAD ********************** -->
            <!-- <h5>Boxes Offered</h5>

            <img src="/assets/profile_pics/<?=$user['filename'];?>">

            <?php echo form_open_multipart('upload/box_do_upload');?>

			<input type="file" name="userfile" size="20" />
			<input type="submit" value="upload" /> -->
        </div>

        <div class = "col-md-7">
            <p><?= $user['content'] ?></p>
        </div>
    </div>


</div>


</body>
</html>