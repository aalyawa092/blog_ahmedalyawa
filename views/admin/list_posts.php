<?php

require('config/db.php');

$conn = new mysqli('localhost',DB_USERNAME,DB_PASSWORD,DB_NAME);

$sql = "SELECT * FROM posts";

$results = $conn->query($sql);

echo "<h2>POSTS</h2>";

echo '<table class="table">';
while($post = $results->fetch_assoc()){
	extract($post);
	echo "<tr>";
	echo "<td> $post_title</td>";
	echo "<td> $post_text </td>";
	echo "<td>";?>
	<a class="btn btn-warning btn-mini" title="EDIT" href="./?p=admin/form_edit_post&amp;id=<?php echo $post['post_id']?>"><i class="icon-edit icon-white"></i></a>
	<a class="btn btn-danger btn-mini" title="DELETE" href="actions/delete_post.php?id=<?php echo $post['post_id']?>"><i class="icon-trash icon-white"></i></a>
	<?php
	echo "</td>";
	echo "</tr>";
}
echo '</table>';
?>
	