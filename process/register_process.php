<?php

if (isset($_POST["submit-register"])) {
	require("db/connection.php");

	//The form has been submitted...
	//verify the user input...
	require_once("functions/functions.php");
	$errors = [];
	if (empty(verifyUserInputs($_POST["firstname"]))) {
		$errors[] = "Please input your Firstname";
	}
	if (empty(verifyUserInputs($_POST["lastname"]))) {
		$errors[] = "Please input your Lastname";
	}
	if (empty(verifyUserInputs($_POST["email"]))) {
		$errors[] = "Please input your email";
	}else{
		if (verifyEmail(mysqli_real_escape_string($conn, verifyUserInputs($_POST["email"]))) == false) {
			$errors[] = "Invalid E-mail address";
		}
	}
	if (empty(verifyUserInputs($_POST["tel"]))) {
		$errors[] = "Please input your Phone number";
	}else{
		if (verifyNumber(mysqli_real_escape_string($conn, verifyUserInputs($_POST['tel']))) == false) {
			$errors[] = "Invalid Phone number";
		}
	}
	if (empty(verifyUserInputs($_POST["password"]))) {
		$errors[] = "Please input your Password";
	}else{
		if (verifyPasswordStrength(mysqli_real_escape_string($conn, verifyUserInputs($_POST["password"]))) == false) {
			$errors[] = "Password is weak";
		}
	}
	if (empty(verifyUserInputs($_POST["confirm"]))) {
		$errors[] = "Please confirm your password";
	}

	if (empty($errors)) {
		//There were no empty inputs, get the inputs...
		$firstname = ucfirst(strtolower(mysqli_real_escape_string($conn, verifyUserInputs($_POST["firstname"]))));
		$lastname = ucfirst(strtolower(mysqli_real_escape_string($conn, verifyUserInputs($_POST["firstname"]))));
		$email = mysqli_real_escape_string($conn, verifyUserInputs($_POST["email"]));
		$tel = mysqli_real_escape_string($conn, verifyUserInputs($_POST["tel"]));
		$password = mysqli_real_escape_string($conn, verifyUserInputs($_POST["password"]));
		$confirm = mysqli_real_escape_string($conn, verifyUserInputs($_POST["confirm"]));

		//Check if confirm and password is same...
		if ($confirm === $password) {
			//The confirm password is correct and same with the password...
			require_once("functions/functions.php");
			registerUser($firstname, $lastname, $email, $tel, $password);
		}else{
			//the confirm password is not the same with the password...
			require_once("functions/alerts.php");
			alert_error("Confirm password is incorrect!");
		}
	}else{
		//There were empty inputs, display them...
		foreach ($errors as $error) {
			require_once("functions/alerts.php");
			alert_error($error);
		}
	}
}
