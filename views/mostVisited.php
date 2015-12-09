<?php 
	$servername = "localhost";
	$username = "<username>";
	$password = "<password>";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, "sejalgup_school");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM mostviewed where count!=0 ORDER BY count DESC LIMIT 5";
	$result = $conn->query($sql);
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
	    background-repeat: no-repeat;
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
	<div class="container" style="margin-top:10%">
		<div class="row">
				<div class="panel panel-success">
   					<div class="panel-heading">
      					<h2 class="panel-title">Most Visited Services</h2>
   					</div>
			  		 <div class="panel-body">
			     		 <ul class="list-group">
			     		 <?php
				     		 if ($result->num_rows > 0){
					     		 $i = 0;
					     		 while($row = $result->fetch_assoc()) {
					     		 	echo 
					     		 	"<li class='list-group-item'>
										<div class='row service".$i."'>
											<div class='col-md-6' id='service'>".$row['service']."</div>
											<div class='col-md-6 text-right' id='count'>".$row['count']."</div>
										</div>
				     		 		</li>";
					     		 }
					     		 $i = $i+1;
				     		 }else{
				     		 	echo "<h1 style='color:white;'>No match Found</h1>";
				     		 }
						?>
						   </ul>
			   		</div>
				</div>
		</div>
	</div>
</html>