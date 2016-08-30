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
		sosmed
			<select name="id_icon" id="">
				<?php foreach ($sosmed as $key) { ?>
					<option value="<?php echo $key->id_icon; ?>"><?php echo $key->nama_icon; ?></option>
				<?php } ?>
			</select>
			<input type="text" name="nama_sosmed" id="">
			<br>
		<input type="submit" value="add">
	</form>
</body>
</html>