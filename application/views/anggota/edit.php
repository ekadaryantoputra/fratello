<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Anggota</title>
</head>
<body>
	<?php foreach ($sql as $key) { ?>
	<form action="<?php echo site_url('anggota/processEdit'); ?>" method="post" enctype="multipart/form-data">
		id anggota <input type="text" name="id" value="<?php echo $key->id_anggota; ?>"> <br>
		nama anggota <input type="text" name="nama" value="<?php echo $key->nama_anggota; ?>"> <br>
		ubah foto <input type="file" name="photo"><br>
		<input type="submit" value="edit">
	</form>
	<?php } ?>
</body>
</html>