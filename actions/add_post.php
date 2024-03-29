<?php
session_start();

// Extract POST data
extract($_POST);	

// Check to see if all info was provided
if($post_title =='' || $post_text =='' ) {
	// Message to be displayed on next request
		$_SESSION['flash'] = array(
			'message' => 'Please fill in all fields.',
			'type' => 'danger'
			
		);
	
	// Store the form data into session data
	$_SESSION['post_title'] = $post_title;
	// Redirect back to the form
	//header('Location:../?p=admin/form_add_post');
	//Stop  excuting the correct 
	die();
}	
// Load DB constants
require('../config/db.php');
	
// Connect to the database
$conn = new mysqli('localhost',DB_USERNAME,DB_PASSWORD,DB_NAME);
	
// Construct query
$post_title = addslashes($post_title);
$post_text = addslashes($post_text);
$sql = "INSERT INTO posts (post_title,post_text) VALUES('$post_title','$post_text')";
// Execute query
$conn->query($sql);

// Echo error
if($conn->error != '') {
	echo '<h2>MySQLError</h2><p>'.$conn->error.'</p>';
	echo "<h3>SQL Executed</h3><p>$sql</p>";
	echo '<pre>$_POST: ';
	print_r($_POST);
	echo '</pre>';
} else {
	//$_SESSION['flash'] = array(
		//'message' => "<strong>$post_title</strong> Published!",
		//'type'  =>  'success'
		//);
	
	 //Redirect
	header('Location:../?p=admin/list_posts');
}

// Close connection
$conn->close();