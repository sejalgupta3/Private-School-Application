<?php
	$servername = "localhost";
	$username = "<username>";
	$password = "<password>";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, "sejalgup_school");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$array_visited = json_decode($_COOKIE["cookie_lastVisited"], true);
	if (in_array($service, $array_visited)) {
		unset($array_visited[array_search($service, $array_visited)]);
	}
	if(count($array_visited) == 5){
		array_shift($array_visited);
	}
	array_push($array_visited, $service);
	setcookie("cookie_lastVisited", json_encode($array_visited), time() + 60 * 60 * 24 * 5);
	
	$sql2 = "SELECT * FROM mostviewed";
	$result2 = $conn->query($sql2);
	
	if(!isset($_COOKIE["cookie_lastVisited"])){
		$array_lastVisited = array();
		setcookie('cookie_lastVisited', json_encode($array_lastVisited), time() + 60 * 60 * 24 * 5);
	}
	
	if($result2->num_rows > 0){
		$array_mostVisited = array(
				"games" => "0",
				"library" => "0",
				"transportation" => "0",
				"classRoom" => "0",
				"auditorium" => "0",
				"museum" => "0",
				"music" => "0",
				"security" => "0",
				"cafeteria" => "0",
				"lab" => "0",
		);
		while($row = $result2->fetch_assoc()) {
			$array_mostVisited[$row['service']] = $row['count'];
		}
	}
	$fp = fopen('mostViewed.txt', 'w');
	foreach ($array_mostVisited as $key => $value) {
		if($key == $service){
			$array_mostVisited[$service] = $value + 1;
			$sql = "UPDATE mostviewed SET count =".$array_mostVisited[$service]." WHERE service ='".$service."'";
		}
	}
	arsort($array_mostVisited,true); // sort it
	$conn->query($sql);
	$string_data = serialize(array_slice($array_mostVisited, 0, 5, true));
	file_put_contents("mostViewed.txt", $string_data);
	fclose($fp);
	
	setcookie("cookie_mostVisited", json_encode($array_mostVisited), time() + 60 * 60 * 24 * 5);
	
	$conn->close();
?>