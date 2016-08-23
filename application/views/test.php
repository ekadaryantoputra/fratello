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
	<form action="" method="post">
		<textarea id="mytextarea">Hello World</textarea>
	</form>
</body>
</html>