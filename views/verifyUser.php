<?php
	session_start();
	extract($_POST);
	if(!$inputEmail || !$inputPassword){
		header("Location: login.php?error=Please fill the username and password to login.");
		exit();
	}else{
		$userVerified = 0;
		$userDetailsFile = fopen("userDetails.txt", "r") or die("Unable to open file!");
		while(!feof($userDetailsFile)){
			$user = explode(",",fgets($userDetailsFile));
			if(strcmp(trim($user[0]), trim($inputEmail)) == 0 && strcmp(trim($user[1]), trim($inputPassword)) == 0){
				$userVerified = 1;
				break;
			}
		}
		fclose($userDetailsFile);
		if($userVerified){
			$_SESSION['localUser'] = $inputEmail;
			if($inputEmail == "admin"){
				header("Location: adminHomePage.php?userName=".$inputEmail);
				exit();
			}else{
				header("Location: userHomePage.php?userName=".$inputEmail);
				exit();
			}
		}else{
			header("Location: login.php?error=Invalid Username or Password.");
			exit();
		}
	}
?>
