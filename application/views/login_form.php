<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan CodeIgniter | www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('asset/css/style.css'); ?>">
</head>
<body>
	<h3>Membuat Login Dengan CodeIgniter </h3>
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>