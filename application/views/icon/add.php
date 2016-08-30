<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo site_url('icon_sosmed/processAdd'); ?>" method="post" enctype="multipart/form-data">
		id icon <input type="text" name="id_icon" id="">
		upload icon <input type="file" name="nama_icon" id="">
		<input type="submit" value="Upload">
	</form>
</body>
</html>