<?php session_start(); ?>
<?php 
	if (function_exists('xdebug_disable')) {
		xdebug_disable();
	}
	$service = "museum";
	include('setVisitCookie.php');
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
    }
  	.aboutUsPanel{
  	margin-top:10%;
  }
  .rate-ex1-cnt {
	    height: 40px;
	    margin: 10px 0;
	    width: 225px;
	}
	.rate-ex1-cnt .rate-btn, .rate-ex1-cnt .ratebtn {
	    background: rgba(0, 0, 0, 0) url("../images/rate-btn.png") no-repeat scroll 0 0;
	    cursor: pointer;
	    float: left;
	    height: 40px;
	    width: 37px;
	}
	.rate-ex1-cnt .rate-btn-active {
	    background: rgba(0, 0, 0, 0) url("../images/rate-btn-hover.png") no-repeat scroll 0 0;
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
	<div class="container text-center" style="color:white;margin-top:10%;">
		<h1>Museum</h1>
		<div><img src="../images/museum.jpg" class="img-responsive img-thumbnail"></div>
		<h3>The school museum is a blend of arts and science. The museum consits of all the projects made by students and is even maintained by the students. We believe int he fact that as students maintain it they get to learn a lot more from other projects too and is thus a great learning process.</h3>
	</div>
	<?php include('reviews.php');?>
</html>