<?php

require('config/db.php');

$sql = "SELECT * FROM posts";

$results = $conn->query($sql);
	echo '<div id="">';
		while($post = $results->fetch_assoc());
			extract($post);
				echo "<h2> $post_title</h2>";
				echo "<p> $post_text </p>";
?>