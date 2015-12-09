<?php 
	if (function_exists('xdebug_disable')) {
		xdebug_disable();
	}
	
	if(!isset($_COOKIE["cookie_lastVisited"])){
		$array_lastVisited = array();
		setcookie('cookie_lastVisited', json_encode($array_lastVisited), time() + 60 * 60 * 24 * 5);
	}
?>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="../lib/jquery/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<style>
		body{
			background-image: url(../images/chalkboard.jpg);
		    background-position: center;
		    background-size:cover;
		    width: 100%;
		    height: 100%;
		    color: white;
	    }
	    a, a:hover, a:focus{
	    	color:white;
	    }
    </style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-book"></span>SG High School</a>
			<button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	      	</button>
	    </div>
		<div class="collapse navbar-collapse" id="myNavbar">
			 <ul class="nav navbar-nav">
			 	<li><a href="home.php">Home</a></li>
			 	<li><a href="About.php">About</a></li>
			 	<li><a href="services.php">Services</a></li>
			 	<li><a href="news.php">News</a></li>
			 	<li><a href="contact.php">Contacts</a></li>
			 	<li><a href="lastVisited.php">Last Visited</a></li>
			 	<li><a href="mostVisited.php">Most Visited</a></li>
			 </ul>
			 <ul class="nav navbar-nav navbar-right">
				<li>
					<a href="login.php">Login</a>
				</li>
        	</ul>
		 </div>
	</nav>
	<div class="container" style="margin-top:10%;">
		<div class="row">
			<div class="col-md-4">
				<a href="games.php">
					<img src="../images/ground.jpg" class="img-responsive img-thumbnail">
					<p>Games</p>
				</a>
			</div>
			<div class="col-md-4">
				<a href="library.php">
					<img src="../images/library.jpg" class="img-responsive img-thumbnail">
					<p>Library</p>
				</a>
			</div>
			<div class="col-md-4">
				<a href="cafeteria.php">
					<img src="../images/cafeteria.jpg" class="img-responsive img-thumbnail">
					<p>Cafeteria</p>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<a href="classRoom.php">
					<img src="../images/class.jpg" class="img-responsive img-thumbnail">
					<p>Class Rooms</p>
				</a>
			</div>
			<div class="col-md-4">
				<a href="auditorium.php">
					<img src="../images/auditorium.jpg" class="img-responsive img-thumbnail">
					<p>Auditorium</p>
				</a>
			</div>
			<div class="col-md-4">
				<a href="lab.php">
					<img src="../images/lab.png" class="img-responsive img-thumbnail">
					<p>Lab</p>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<a href="museum.php">
					<img src="../images/museum.jpg" class="img-responsive img-thumbnail">
					<p>Museum</p>
				</a>
			</div>
			<div class="col-md-4">
				<a href="music.php">
					<img src="../images/music.jpg" class="img-responsive img-thumbnail">
					<p>Music</p>
				</a>
			</div>
			<div class="col-md-4">
				<a href="security.php">
					<img src="../images/security.jpg" class="img-responsive img-thumbnail">
					<p>Security</p>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<a href="transportation.php">
					<img src="../images/transportation.jpg" class="img-responsive img-thumbnail">
					<p>Transportation</p>
				</a>
			</div>
		</div>
	</div>
		<script>
		   $(function () {
		      $('#myTab li:eq(1) a').tab('show');
		   });
		</script>
</html>