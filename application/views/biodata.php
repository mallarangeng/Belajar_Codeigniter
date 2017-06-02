<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('asset/css/style.css'); ?>">

</head>
<body>

<div id="container">
	<h1>Biodata Mahasiswa</h1>

	<div id="body">
		<p>Data ini menampilkan biodata mahasiswa dan file ini terdatapat pada</p>
		<code>application/views/bidata.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
		<a href="<?php echo site_url('welcome'); ?>">Welcome</a>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>