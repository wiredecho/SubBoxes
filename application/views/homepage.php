
<html lang="en">
<head>
	<title>welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<?php echo $map['js']; ?><!DOCTYPE html>
	<style>
	.googlemap{
		height: 350px;
		width:810px;
		align-items: left;
		padding:10px;
		padding-right:10px;
		padding-left:10px;
		display:inline-block;
		vertical-align: top;
	}
	.activitybar{
		display:inline-block;
		width:300px;
	}

	.feature{
		width: auto;
		height:auto;
	}


body{
	background-color: #FFEECC;
}
.jumbotron {
    vertical-align: top;
    background-image: url(/assets/collage2.png);
    background-position: 0% 25%;
    background-size: cover;
    background-repeat: no-repeat;
    height:250px;
    width:auto;
}


@import url(http://fonts.googleapis.com/css?family=Open+Sans);

/*.navbar-default{
	background-color:#CCEEAA;
}*/
.activity-feed {
  padding: 15px;
}
.activity-feed .feed-item {
  position: relative;
  padding-bottom: 20px;
  padding-left: 30px;
  border-left: 2px solid #e4e8eb;
}
.activity-feed .feed-item:last-child {
  border-color: transparent;
}
.activity-feed .feed-item:after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: -6px;
  width: 10px;
  height: 10px;
  border-radius: 6px;
  background: #fff;
  border: 1px solid #f37167;
}
.activity-feed .feed-item .date {
  position: relative;
  top: -5px;
  color: #8c96a3;
  text-transform: uppercase;
  font-size: 13px;
}
.activity-feed .feed-item .text {
  position: relative;
  top: -3px;
}

#maincontent{
	background-color: #FFEECC;
}
.details{
	display:inline-block;
	color: black;
	padding:20px;
}
.details2{
	display:inline-block;

}

.feature{
	vertical-align: top;
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
<!-- ********************* jumbo ********************* -->
  <div class="jumbotron">
<!-- 	<center><img class="feature" src="/assets/collage2.png" alt="example" align></center> -->
  </div>
<!-- <center><img class="feature" src="/assets/examplefeature.png" alt="example" align></center> -->
	<div class="container">
		<div class="googlemap">
			<?= $map['html']; ?>
		</div>

	<div class="activitybar">
    
		<h2>Recent Activity</h2>
		<div class="activity-feed">
<?php 
        foreach($activities as $activity){
?>    
        	<div class="feed-item">
            	<div class="user">
            		<a href="product/<?=$activity['user_id']; ?>">
                   	<?=$activity['screenname']; ?></a>
				</div>
				<div class="boxes">
               		<a href="product/<?=$activity['box_id']; ?>">
                   	<?=$activity['title']; ?></a>
               </div>
            </div>
<?php
        }
?>
		</div>
	</div>







  <div class="dropup">

<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Available Subscriptions
    <span class="caret"></span></button>
    <ul class="dropdown-menu">



<?php 
    		foreach($countries as $country){
?>        
        		
				<li class="dropdown-header"><a name="<?=$country['country']?>"><h4><?= $country['country'] ?></h4></a></li>


<?php        
        			foreach($locations as $location){
            			if($location['country'] == $country['country']){
?>
						<li><a href="profile/<?=$location['id'];?>"><?= $location['screenname']; ?></a></li>
  			          
<?php
            			}
        			}
    		}
?>
    </ul>
</div>





	<div id="maincontent">
		<div class="details">
			<h1>this month's featured boxes</h1>
     
    		<img class="feature" src="/assets/box1.jpg" alt="example">
    		<img class="feature" src="/assets/JAPAN_box1.png" alt="example">
    		<img class="feature" src="/assets/LA_box2.png" alt="example">
    		<img class="feature" src="/assets/HONGKONG_box2.png" alt="example">
    		<img class="feature" src="/assets/PARIS_box1.png" alt="example">
		</div>
	</div>
</div>

</body>
</html>