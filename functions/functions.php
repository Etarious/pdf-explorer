<?php

function verifyUserInputs($input){
	$input = trim($input);
	$input = stripslashes($input);
	$input = htmlspecialchars($input);
	return $input;
}



function verifyNumber($tel){
	if (filter_var($tel, FILTER_SANITIZE_NUMBER_INT)) {
		//Number is valid...
		$verified_tel = filter_var($tel, FILTER_SANITIZE_NUMBER_INT);
		//return $verified_tel;
		if (!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $verified_tel)) {
			return false;
		}else{
			return true;
		}
	}else{
		//Number is invalid...
		return false;
	}
}




function verifyEmail($email){
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		//email is valid...
		return true;
	}else{
		//email is invalid...
		return false;
	}
}





function verifyPasswordStrength($password){
	if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {
		//password is strong...
		return true;
	}else{
		//password is weak...
		return false;
	}
}





function checkUserEmail($email){
	require("db/connection.php");

	$query = "SELECT * FROM `users` WHERE `email` = '$email' LIMIT 1";
	$result = mysqli_query($conn, $query);

	if ($result) {
		//The query ran...
		if (mysqli_num_rows($result) == 1) {
			//A user was found...
			return true;
		}else{
			//No user was found...
			return false;
		}
	}else{
		//The query didn't run...
		require_once("funtions/alerts.php");
		alert_error("There was an error:" . mysqli_error($conn));
	}
}





function registerUser($firstname, $lastname, $email, $tel, $password){
	require("db/connection.php");

	//check if the email already exists...
	if (checkUserEmail($email) == false) {
		//The email doesn't exists, hash the password...
		$h_password = password_hash($password, PASSWORD_DEFAULT);
		//echo $h_password;

		//Put the user details into the db...
		$query ="INSERT INTO `users` (`firstname`, `lastname`, `email`, `tel`, `password`) VALUES ('$firstname', '$lastname', '$email', '$tel', '$h_password')";
		$result = mysqli_query($conn, $query);

		if ($result) {
			//The user has been successfully put into the db...
			require_once("functions/alerts.php");
			alert_success("Registered successfully!");
		}else{
			//There was an error...
			require_once("functions/alerts.php");
			alert_error("There was an error:" . mysqli_error($conn));
		}
	}else{
		//The email already exist...
		require_once("functions/alerts.php");
		alert_error("E-mail already exists");
	}
}



function checkUserEmailAndGetDetails($email){
	require("db/connection.php");

	$query = "SELECT * FROM `users` WHERE `email` = '$email' LIMIT 1";
	$result = mysqli_query($conn, $query);

	if ($result) {
		//query ran...
		if (mysqli_num_rows($result) == 1) {
			//There user exists...
			$user_details = [];
			$user_details = mysqli_fetch_array($result, MYSQLI_ASSOC);
			return $user_details;
		}else{
			//the user doesn't exist...
			return "none";
		}
	}else{
		//query didn't run...
		return "none";
		require_once("functions/alerts.php");
		alert_error("there was an error:" . mysqli_error($conn));
	}
}




function loginUser($email, $password){
	require("db/connection.php");

	//Check if the user exists and get the user's details...
	$user_details = checkUserEmailAndGetDetails($email);

	if ($user_details == "none") {
		//The user doesn't exist...
		require_once("functions/alerts.php");
		alert_error("E-mail not recognized");
	}else{
		//The user exists...
		//check if the user details is an array...
		if (is_array($user_details)) {
			$h_password = $user_details["password"];
			$v_password = password_verify($password, $h_password);

			if($v_password){
				//The password is correct...
				session_start();
				$_SESSION = $user_details;
				echo "<pre>";
				print_r($_SESSION);
				require_once("functions/alerts.php");
				alert_success("You have logged in successfully!");
			}else{
				//The password is inicorrect...
				require_once("functions/alerts.php");
				alert_error("Incorrect password!");
			}
		}
	}
}