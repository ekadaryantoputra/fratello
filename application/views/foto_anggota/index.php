<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload Foto</title>
</head>
<body>
	<a href="<?php echo site_url('foto_anggota/upload'); ?>"><input type="button" value="upload"></a><br>
	<table border="1">
		<tr>
			<td>id photo</td>
			<td>nama photo</td>
			<td>id anggota</td>
		</tr>
		<?php foreach ($sql as $key) { ?>
		<tr>
			<td><?php echo $key->id_photo; ?></td>
			<td><?php echo $key->nama_photo; ?></td>
			<td><?php echo $key->id_anggota; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>