<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('asset/css/style.css'); ?>">
</head>
<body>
	<h2><strong>DAFTAR AGENDA</strong></h2> <a href="<?php echo site_url('agenda/tambah');?>">Tambah Agenda</a>
		
		<?php foreach ($daftar_agenda as $agenda) { ?>
		
		<h2><?php echo $agenda->nama;?></h2>
		<a href="<?php echo site_url('agenda/edit/'.$agenda->id_agenda);?>">Edit</a> |
		<a href="<?php echo site_url('agenda/delete/'.$agenda->id_agenda);?>">Delete</a>
		<br />
		<hr>
		<?php echo $agenda->keterangan;?>
		</p>
		<br />
		<?php } ?>
</body>
</html>