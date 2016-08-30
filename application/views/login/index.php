<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo site_url('index/processLogin') ?>" method="post">
		<input type="text" name="username" placeholder="Username">
		<input type="text" name="password" placeholder="Password">
		<input type="submit" value="Log In">
	</form>
</body>
</html>