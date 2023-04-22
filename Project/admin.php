<?php
	session_start();

	// Connect to the database
	$db = mysqli_connect('localhost', 'username', 'password', 'admin_login');

	// Initialize variables
	$username = "admin";
	$password = "admin123";
	$errors = array(); 

	// When the login button is clicked
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		// Validate username and password
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// If there are no errors, login the user
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				header('location: dashboard.php');
			} else {
				array_push($errors, "Invalid username or password");
			}
		}
	}

	// Logout the user
	if (isset($_GET['logout'])) {
		session_unset();

		// Destroy the session
		session_destroy();

		// Redirect to the login page
		header('location: index111.php');
	}
?>
