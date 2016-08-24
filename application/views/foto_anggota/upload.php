<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload Foto</title>
</head>
<body>
	<form action="<?php echo site_url('foto_anggota/processUpload'); ?>" method="post" enctype="multipart/form-data">
		id photo <input type="text" name="id" id=""><br>
		photo <input type="file" name="upload" id=""><br>
		<input type="submit" value="Upload">
	</form>
</body>
</html>