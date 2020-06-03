<?php
//Connect to the database...
$host = "localhost";
$user = "root";
$pass = "";
$db = "email_delivery";

$conn = mysqli_connect($host, $user, $pass, $db) or die("Sorry, couldn't connect to database");


if ($conn) {
	//automatically create tables ini the db...
	$user_query = "CREATE TABLE IF NOT EXISTS `users` (
		`id` INT PRIMARY KEY AUTO_INCREMENT,
		`firstname` VARCHAR(64) NOT NULL,
		`lastname` VARCHAR(64) NOT NULL,
		`email` VARCHAR(64) NOT NULL,
		`tel` VARCHAR(15) NOT NULL,
		`password` VARCHAR(64) NOT NULL
	)";

	$user_result = mysqli_query($conn, $user_query);
}