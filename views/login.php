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
	<?php 
		if(!isset($_GET['error'])) {
			$_GET['error'] = "";
		}
	?>
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
			 <ul class="nav navbar-nav navbar-right">
				<li>
					<a href="login.php">Login</a>
				</li>
        	</ul>
		 </div>
	</nav>
	<div class="container" style="margin-top:10%;color:white;">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<?php echo $_GET['error'];?>
			    <form action="verifyUser.php" method="post">
			        <div class="form-group">
			            <label for="inputEmail">Email</label>
			            <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
			        </div>
			        <div class="form-group">
			            <label for="inputPassword">Password</label>
			            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
			        </div>
			        <button type="submit" class="btn btn-primary">Login</button>
			    </form>	
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	</body>
</html>