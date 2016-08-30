<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="<?php echo site_url('admin/add'); ?>">ADD</a>
	<table border="1">
		<tr>
			<td>id admin</td>
			<td>nama lengkap</td>
			<td>username</td>
			<td>password</td>
			<td>action</td>
		</tr>
		<?php foreach ($sql as $key) { ?>
		<tr>
			<td><?php echo $key->id_admin; ?></td>
			<td><?php echo $key->nama_lengkap; ?></td>
			<td><?php echo $key->username; ?></td>
			<td><?php echo $key->password; ?></td>
			<td>
				<a href="<?php echo site_url('admin/edit/')."$key->id_admin"; ?>">EDIT</a> | 
				<a href="<?php echo site_url('admin/delete/')."$key->id_admin"; ?>">DELETE</a>
			</td>
		</tr>
		<?php } ?>
	</table>	
</body>
</html>