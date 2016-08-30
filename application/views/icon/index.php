<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="<?php echo site_url('icon_sosmed/add'); ?>">add</a>
	<table border="1">
		<tr>
			<td>id icon</td>
			<td>nama icon</td>
			<td>action</td>
		</tr>
		<?php foreach ($sql as $key) { ?>
		<tr>
			<td><?php echo $key->id_icon; ?></td>
			<td><img width="100" height="200" src="<?=base_url()?>assets/photo_anggota/<?php echo $key->nama_icon; ?>"></td>
			<td>
				<a href="<?php echo site_url('icon_sosmed/edit/')."$key->id_icon" ?>">edit</a> | 
				<a href="<?php echo site_url('icon_sosmed/delete/')."$key->id_icon" ?>">delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>