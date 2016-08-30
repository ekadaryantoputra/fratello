<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($sql as $key) { ?>
	<form action="<?php echo site_url('admin/processEdit/')."$key->id_admin"; ?>" method="post">
		nama lengkap <input type="text" name="nama_lengkap" value="<?php echo $key->nama_lengkap; ?>"><br>
		username <input type="text" name="username" value="<?php echo $key->username; ?>"><br>
		password <input type="text" name="password" value="<?php echo $key->password; ?>"><br>
		<input type="submit" value="EDIT">
	</form>
	<?php } ?>
</body>
</html>