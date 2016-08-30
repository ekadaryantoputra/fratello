<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo site_url('admin/processAdd'); ?>" method="post">
		nama lengkap <input type="text" name="nama_lengkap"><br>
		username <input type="text" name="username"><br>
		password <input type="text" name="password"><br>
		<input type="submit" value="ADD">
	</form>
</body>
</html>