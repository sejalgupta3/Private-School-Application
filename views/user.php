<?php if(isset($_GET['insertStatus'])){
	$message = $_GET['insertStatus'];
}else{
	$message = "";
}?>
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
     #bs-example a:hover{
     color:green;
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
			 	<li><a href="user.php">User</a></li>
			 </ul>
			 <ul class="nav navbar-nav navbar-right">
				<li>
					<a href="login.php">Login</a>
				</li>
        	</ul>
		 </div>
	</nav>
	<div class="container" style="margin-top:10%;color:white;">
	<div class="bs-example" id="bs-example">
	    <ul class="nav nav-tabs">
	        <li class="active"><a data-toggle="tab" href="#register">Register</a></li>
	        <li><a data-toggle="tab" href="#search">Search</a></li>
	    </ul>
	    <div class="tab-content" style="padding-left:20%;padding-right:20%;">
	        <div id="register" class="tab-pane fade in active">
	            <h3>Please fill in the details to register.</h3>
	            <h3><?php echo "<h4>$message</h4>"?></h3>
	             <form method="post" action="register.php">
			        <div class="form-group">
			            <label for="fname">First Name</label>
			            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
			        </div>
			        <div class="form-group">
			            <label for="lname">Last Name</label>
			            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
			        </div>
			        <div class="form-group">
			            <label for="email">Email</label>
			            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
			        </div>
			        <div class="form-group">
			            <label for="address">Address</label>
			            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
			        </div>
			        <div class="form-group">
			            <label for="hphone">Home Phone</label>
			            <input type="text" class="form-control" id="hphone" name="hphone" placeholder="Home Phone">
			        </div>
			        <div class="form-group">
			            <label for="cphone">Cell Phone</label>
			            <input type="text" class="form-control" id="cphone" name="cphone" placeholder="Cell Phone">
			        </div>
			        <button type="submit" class="btn btn-primary">Register</button>
			    </form>
	        </div>
	        <div id="search" class="tab-pane fade">
	            <h3>Search Users</h3>
	            <form method="post" action="search.php">
			        <div class="form-group">
			            <label for="sfname">First Name</label>
			            <input type="text" class="form-control" id="sfname" name="fname" placeholder="Seach First Name">
			        </div>
			        <div class="form-group">
			            <label for="slname">Last Name</label>
			            <input type="text" class="form-control" id="slname" name="lname" placeholder="Seach Last Name">
			        </div>
			        <div class="form-group">
			            <label for="semail">Email</label>
			            <input type="email" class="form-control" id="semail" name="email" placeholder="Search  Email">
			        </div>
			        <div class="form-group">
			            <label for="shphone">Home Phone</label>
			            <input type="text" class="form-control" id="sphone" name="hphone" placeholder="Search Home Phone">
			        </div>
			        <div class="form-group">
			            <label for="scphone">Cell Phone</label>
			            <input type="text" class="form-control" id="scphone" name="cphone" placeholder="Search Cell Phone">
			        </div>
			        <button type="submit" class="btn btn-primary">Search</button>
			    </form>
	        </div>
	    </div>;
	    </div>
	</div>
</html>
