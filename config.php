<?php
	// Database connection settings
	$host = 'localhost:3306';
	$user = 'root';
	$password = 'comunicaciones';
	$dbname = 'posts';

	// Connect to the database
	$conn = mysqli_connect($host, $user, $password, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>
