<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload Foto</title>
</head>
<body>
	<?php foreach ($id as $key) { ?>
	<form action="<?php echo site_url('anggota/processUpload/')."$key->id_anggota"; ?>" method="post" enctype="multipart/form-data">
		<input type="input" name="id" value="">
		photo <input type="file" name="upload_photo" id=""><br>
		<input type="submit" value="Upload">
	</form>
	<?php } ?>
</body>
</html>