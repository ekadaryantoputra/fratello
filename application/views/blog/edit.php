<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="<?= base_url(); ?>assets/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
	<script>
		tinymce.init({
			selector: '#mytextarea',
			
		});
	</script>
</head>
<body>
	<?php foreach ($sql as $key) { ?>
	<form action="<?php echo site_url('blog/processEdit'); ?>" method="post" enctype="multipart/form-data">
		id blog <input type="text" name="id_blog" value="<?php echo $key->id_blog; ?>"><br>
		title <input type="text" name="title" value="<?php echo $key->title; ?>"><br>
		photo <input type="file" name="photo" value="<?php echo $key->photo; ?>"><br>
		content <textarea name="content" id="mytextarea"><?php echo $key->content; ?></textarea><br>
		create date <input type="text" name="create_date" value="<?php echo $key->create_date; ?>"><br>
		create by <input type="text" name="create_by" value="<?php echo $key->create_by; ?>"><br>
		<input type="submit" value="edit">
	</form>
	<?php } ?>
</body>
</html>