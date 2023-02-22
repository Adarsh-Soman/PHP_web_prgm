<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Get form data
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	// Validate form data
	$errors = array();

	if (empty($username)) {
		$errors[] = "Username is required";
	}

	if (empty($email)) {
		$errors[] = "Email is required";
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors[] = "Invalid email format";
	}

	if (empty($password)) {
		$errors[] = "Password is required";
	} elseif (strlen($password) < 8) {
		$errors[] = "Password must be at least 8 characters long";
	}

	if ($password !== $confirm_password) {
		$errors[] = "Passwords do not match";
	}

	// If no errors, register user
	if (empty($errors)) {
		// TODO: Add code to insert user into database or perform other registration tasks
		echo "<h1>Registration successful</h1>";
	} else {
		// Display errors
		echo "<ul>";
		foreach ($errors as $error) {
			echo "<li><h2>$error</h2></li>";
		}
		echo "</ul>";
	}
}
?>