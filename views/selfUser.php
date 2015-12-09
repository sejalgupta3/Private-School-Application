<?php 
if (function_exists('xdebug_disable')) {
	xdebug_disable();
}
extract($_POST);
$servername = "localhost";
$username = "<username>";
$password = "<password>";

// Create connection
$conn = new mysqli($servername, $username, $password, "sejalgup_school");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo 'Connected successfully';
$sql = "SELECT * FROM people ";

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
	    background-position: center;
	    background-size:cover;
	    width: 100%;
	    height: 100%;
    }
    
    #myNavbar ul li a{
     color:blue;
    }
    </style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top hd">
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
			 	<li><a href="selfUser.php">Self Data</a></li>
			 	<li><a href="otherUser.php">All Company Data</a></li>
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
	     	<table class="table">
			   <thead>
			      <tr class="success">
			         <th>First Name</th>
			         <th>Last Name</th>
			         <th>Email</th>
			         <th>Address</th>
			         <th>Home Phone</th>
			         <th>Cell Phone</th>
			      </tr>
			   </thead>
			   <tbody>
		     	<?php 
			     	if ($result->num_rows > 0){
			     		// output data of each row
			     		while($row = $result->fetch_assoc()) {
			     			echo "<tr class='active'>".
				     			"<td>".$row['fname']."</td>".
								"<td>".$row['lname']."</td>".
								"<td>".$row['email']."</td>".
    							"<td>".$row['address']."</td>".
    							"<td>".$row['hphone']."</td>".
								"<td>".$row['cphone']."</td>".
			     			"</tr>";
			     		}
			     	}else{
			     		echo "<h1 style='color:white;'>No match Found</h1>";
			     	}
				?>
		   		</tbody>
   			</table>
		</div>
	</div>
</body>
</html>
<?php
$conn->close();
?>