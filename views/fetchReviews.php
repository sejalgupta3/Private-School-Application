<?php 
$servername = "localhost";
$username = "<username>";
$password = "<password>";

// Create connection
$conn = new mysqli($servername, $username, $password, "sejalgup_school");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM reviews where product='".$service."'";
$result = $conn->query($sql);
?>
     			<?php 
			     	if ($result->num_rows > 0){
			     		// output data of each row
			     		while($row = $result->fetch_assoc()) {
			     			echo 
					     		"
							<div class='panel panel-default'>
							    <div class='panel-heading'>".$row['name']."</div>
							    <div class='panel-body'>".$row['review']."</div>
 							    <div class='panel-body'><div class='rate-ex1-cnt' countid=".$row['rating'].">
							            <div id='1' class='rate-btn-1 ratebtn'></div>
							            <div id='2' class='rate-btn-2 ratebtn'></div>
							            <div id='3' class='rate-btn-3 ratebtn'></div>
							            <div id='4' class='rate-btn-4 ratebtn'></div>
							            <div id='5' class='rate-btn-5 ratebtn'></div>
							        </div>
							   </div>
							</div>
								"	;
			     		}
			     	}
				?>
<?php
$conn->close();
?>