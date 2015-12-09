<?php
$curl = curl_init('http://www.sejalgupta.com/school/views/selfUser.php');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$page = curl_exec($curl);
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
curl_close($curl);

$curl2 = curl_init('http://blackblues.org/user-listing.php');
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, TRUE);
$page2 = curl_exec($curl2);
if(curl_errno($curl2)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl2);
	exit;
}
curl_close($curl2);

$curl3 = curl_init('http://aishwaryapatwardhanc.fatcow.com/?page_id=351');
curl_setopt($curl3, CURLOPT_RETURNTRANSFER, TRUE);
$page3 = curl_exec($curl3);
if(curl_errno($curl3)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl3);
	exit;
}
curl_close($curl3);
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
			 	<li><a href="selfUser.php">Self Data</a></li>
			 	<li><a href="otherUser.php">All Company Data</a></li>
			 </ul>
		 </div>
	</nav>
	<div class="container" style="margin-top:10%;color:white;">
        <h3>Self Domain: http://www.sejalgupta.com/school/views/selfUser.php</h3>
        <?php
           $regex = '/<div class="row myTable">(.*?)<\/div>/s';
           if ( preg_match($regex, $page, $list) )
              echo $list[0];
           else 
             print "Not found";
         ?>
         <h3>Self Domain: http://blackblues.org/user-listing.php</h3>
         <?php
           $regex2 = '/<div class="myTable">(.*?)<\/div>/s';
           if ( preg_match($regex2, $page2, $list) )
              echo $list[0];
           else 
             print "Not found";
        ?>
       <h3>Self Domain: http://aishwaryapatwardhanc.fatcow.com/?page_id=351</h3>
         <?php
           $regex3 = '/<div class="entry-content">(.*?)<\/div>/s';
           if ( preg_match($regex3, $page3, $list) )
              echo $list[0];
           else 
             print "Not found";
        ?>
	</div>
</body>
</html>
<?php
$conn->close();
?>