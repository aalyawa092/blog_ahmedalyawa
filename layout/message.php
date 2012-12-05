<?php
// Check to see if there is a message in the
if(isset($_SESSION['flash'])) {
	echo '<p class="alert alert-'.$_SESSION['flash']['type'].'">';
	echo $_SESSION['flash']['message'];
	echo '</p>';

	unset($_SESSION['flash']);
}
?>

