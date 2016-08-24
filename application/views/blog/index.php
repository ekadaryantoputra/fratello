<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
</head>
<body>
	<a href="<?php echo site_url('blog/add'); ?>">add</a>
	<table border="1">
		<tr>
			<td>id blog</td>
			<td>title</td>
			<td>photo</td>
			<td>content</td>
			<td>create date</td>
			<td>create by</td>
			<td>id_login</td>
			<td>action</td>
		</tr>
		<?php foreach ($sql as $key) { ?>
		<tr>
			<td><?php echo $key->id_blog; ?></td>
			<td><?php echo $key->title; ?></td>
			<td><img width="100" height="200" src="<?=base_url()?>assets/photo_anggota/<?php echo $key->photo; ?>"></td>
			<td><?php echo $key->content; ?></td>
			<td><?php echo $key->create_date; ?></td>
			<td><?php echo $key->create_by; ?></td>
			<td><?php echo $key->id_login; ?></td>
			<td>
				<a href="<?php echo site_url('blog/edit/')."$key->id_blog"; ?>">edit</a> | 
				<a href="<?php echo site_url('blog/delete/')."$key->id_blog"; ?>">delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
