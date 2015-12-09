<?php	
	session_start();
	extract($_GET);
	session_start();
	$curl = curl_init('http://www.sejalgupta.com/marketplace/views/loggedInUsers.txt');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	$page = curl_exec($curl);
	$array = unserialize($page);
	if(curl_errno($curl)) // check for execution errors
	{
		echo 'Scraper error: ' . curl_error($curl);
		exit;
	}
	curl_close($curl);
	if(isset($username) && isset($name)){
		foreach($array as $key => $value) {
			if ($key == $username AND $value == "loggedIn") {
				$_SESSION['login_user']= $username;
				$_SESSION['login_user_name']= $name;
			}
		}
	}else{
		if(isset($_SESSION['login_user']) && isset($_SESSION['login_user_name'])){
			unset($_SESSION['login_user']);
			unset($_SESSION['login_user_name']);
		}
	}
	if(isset($_SESSION['localUser'])){
		unset($_SESSION['localUser']);
	}
	header("Location:".$redirectUrl);
	exit();
?>