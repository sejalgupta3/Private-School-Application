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
$sql = "INSERT INTO people
VALUES ('".$fname."', '".$lname."', '".$email."', '".$address."', '".$hphone."', '".$cphone."')";

if ($conn->query($sql) === TRUE) {
	header("Location: user.php?insertStatus=New record created successfully");
} else {
	header("Location: user.php?insertStatus=". $sql . "<br>" . $conn->error);
}
$conn->close();
?>