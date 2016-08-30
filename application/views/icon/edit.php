<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($sql as $key) { ?>
	<form action="<?php echo site_url('icon_sosmed/processEdit'); ?>" method="post" enctype="multipart/form-data">
		id icon <input type="text" name="id_icon" value="<?php echo $key->id_icon; ?>">
		upload icon(<?php echo $key->nama_icon; ?>) <input type="file" name="nama_icon" id="">
		<input type="submit" value="Edit">
	</form>
	<?php } ?>
</body>
</html>