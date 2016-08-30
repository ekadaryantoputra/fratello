<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Blog</title>
	<script src="<?= base_url(); ?>assets/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
	<script>
		tinymce.init({
			selector: '#mytextarea',
			
		});
	</script>
</head>
<body>
	<form action="<?php echo site_url('blog/processAdd'); ?>" method="post" enctype="multipart/form-data">
		id blog <input type="text" name="id_blog" id=""><br>
		title <input type="text" name="title" id=""><br>
		photo <input type="file" name="photo" id=""><br>
		content <textarea name="content" id="mytextarea">Jomblo unyu unyu</textarea><br>
		<input type="hidden" name="create_date" id="">
		<input type="hidden" name="create_by" id="">
		<input type="submit" value="add">
	</form>
</body>
</html>