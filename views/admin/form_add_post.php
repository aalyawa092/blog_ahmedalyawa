<?php 
// Check for post info in session data
$post_title = '';
$post_text = '';
//extract($_SESSION);

// Remove post info from session data
//unset($_SESSION['post_title']);
//unset($_SESSION['post_topic']);
?>
<h2>Add a new post</h2> 
<form action="actions/add_post.php" method="post" class="form-horizontal">
	<div class="control-group">
		<label class="control-label" for="post_title">Post title</label>
		<div class="controls">
			<input class="span4" type="text" name="post_title" placeholder="required" value="<?php echo $post_title?>" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="post_text">Topic</label>
		<div class="controls">
			<textarea name="post_text" placeholder="Insert post here"></textarea>
		</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-success">Publish</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>
</div>
</form>
