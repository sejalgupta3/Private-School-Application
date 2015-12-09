<?php
	extract($_POST);
	$servername = "localhost";
	$username = "<username>";
	$password = "<password>";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, "sejalgup_school");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "INSERT INTO reviews values('".$product."','".$username."','".$name."','".$review."',".$rating.")";
	if ($conn->query($sql) === TRUE) {
		header("Location:".$product.".php");
	}
	$conn->close();
?>