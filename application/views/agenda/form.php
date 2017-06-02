<!DOCTYPE html>
<html>
<head>
<title>Daftar Hadir Praktikum</title>
<link rel="stylesheet" type="text/css" href="<?php echo site_url('asset/css/style.css'); ?>">
</head>
<body>
<h2>Form Tambah Agenda</h2>

<form action="<?php echo site_url('agenda/tambah_agenda');?>" method="POST">
Nama : <br/><textarea name="nama" cols="50" rows="5"></textarea>
<br/><br/>
Keterangan : <br/><textarea name="keterangan" cols="50" rows="5"></textarea>
<br/><br/>
<input type="submit" value="Tambah" /> &nbsp;<a href="<?php echo site_url('agenda');?>">Kembali</a>
</form>
</body>
</html>