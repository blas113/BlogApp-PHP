<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	<div class="header">
		<h1>My Blog</h1>
		<p>Welcome to my blog where I share my thoughts and ideas.</p>
	</div>

	<div class="content">
		<?php
		
			include 'config.php';

		
			$sql = "SELECT * FROM post";
			$result = mysqli_query($conn, $sql);

		
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<div class="post">';
				echo '<h2>' . $row['title'] . '</h2>';
				echo '<p>' . $row['content'] . '</p>';
				echo '<p class="date">' . $row['date'] . '</p>';
				echo '</div>';
			}
		?>
	</div>

	<div class="footer">
		<p>&copy; 2023 My Blog</p>
	</div>
</body>
</html>
