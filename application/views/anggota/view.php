<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Anggota</title>
</head>
<body>
<a href="<?php echo site_url('anggota/add'); ?>"><input type="button" value="add"></a><br>
<table border="1">
	<tr>
		<td>id</td>
		<td>nama</td>
		<td>photo</td>
		<td>action</td>
	</tr>
	<?php foreach ($sql as $key) { ?>
	<tr>
		<td><?php echo $key->id_anggota; ?></td>
		<td><?php echo $key->nama_anggota; ?></td>
		<td><img width="100" height="200" src="<?=base_url()?>assets/photo_anggota/<?php echo $key->photo_profile; ?>"></td>
		<td>
			<a href="<?php echo site_url('anggota/edit/')."$key->id_anggota"; ?>"><input type="button" value="edit"></a>
			<a href="<?php echo site_url('anggota/delete/')."$key->id_anggota"; ?>"><input type="button" value="delete"></a>
		</td>
	</tr>
	<?php } ?>
</table>
</body>
</html>