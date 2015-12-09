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
			 </ul>
		 </div>
	</nav>
	<div class="container" style="margin-top:10%;color:white;">
		<div class="row">
			<h2>Welcome <?php echo $_GET['userName']?></h2>
		</div>
	<?php 
		$userDetailsFile = fopen("userDetails.txt", "r") or die("Unable to open file!");
		while(!feof($userDetailsFile)){
			$user = explode(",",fgets($userDetailsFile));
			echo 
				"<ul class='list-group'>	
					<li class='list-group-item list-group-item-success'>".$user[0]."</li>
		    	</ul>";
		}
		fclose($userDetailsFile);
	?>
	</div>
	</body>
</html>