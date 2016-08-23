<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Anggota</title>
</head>
<body>
	<form action="<?php echo site_url('anggota/processAdd'); ?>" method="post" enctype="multipart/form-data">
		id anggota <input type="text" name="id" id=""> <br>
		nama anggota <input type="text" name="nama" id=""> <br>
		tambah foto <input type="file" name="photo"><br>
		<input type="submit" value="add">
	</form>
</body>
</html>