<?php

if (isset($_POST["submit-login"])) {
	require("db/connection.php");

	//verify the user's input...
	require_once("functions/functions.php");
	$errors = [];
	if (empty(verifyUserInputs($_POST["login-email"]))) {
		$errors[] = "Please enter E-mail";
	}else{
		if (verifyEmail(verifyUserInputs($_POST["login-email"])) == false) {
			$errors[] = "Invalid E-mail format!";
		}
	}
	if (empty(verifyUserInputs($_POST["login-password"]))) {
		$errors[] = "Please enter Password";
	}

	if (empty($errors)) {
		//Get the user inputs...
		$email = mysqli_real_escape_string($conn, verifyUserInputs($_POST["login-email"]));
		$password = mysqli_real_escape_string($conn, verifyUserInputs($_POST["login-password"]));

		//There were no empty inputs...
		require_once("functions/functions.php");
		loginUser($email, $password);
	}else{
		//there were empty inputs, tell the user...
		foreach ($errors as $error) {
			require_once("functions/alerts.php");
			alert_error($error);
		}
	}
}

