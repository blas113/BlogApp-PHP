<?php
	
	$host = 'localhost:3306';
	$user = 'root';
	$password = 'comunicaciones';
	$dbname = 'posts';


	$conn = mysqli_connect($host, $user, $password, $dbname);


	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>
