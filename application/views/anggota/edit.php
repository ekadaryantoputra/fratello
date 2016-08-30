<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Anggota</title>
</head>
<body>
	<?php foreach ($sql as $agt) { ?>
	<form action="<?php echo site_url('anggota/processEdit'); ?>" method="post" enctype="multipart/form-data">
		id anggota <input type="text" name="id" value="<?php echo $agt->id_anggota; ?>"> <br>
		nama anggota <input type="text" name="nama" value="<?php echo $agt->nama_anggota; ?>"> <br>
		ubah foto <input type="file" name="photo"><br>
		sosmed
			<select name="id_icon" id="">
				<?php foreach ($icon as $key) { ?>
					<option value="<?php echo $key->id_icon; ?>"><?php echo $key->nama_icon; ?></option>
				<?php } ?>
			</select>
			<input type="text" name="nama_sosmed" value="<?php echo $agt->nama_sosmed; ?>">
			<br>
		<input type="submit" value="edit">
	</form>
	<?php } ?>
</body>
</html>