<!DOCTYPE html>
<html>
<head>
<title><?php echo $title ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo site_url('asset/css/style.css'); ?>">
</head>
<body>
<h2>Form Edit Agenda</h2>

<form action="<?php echo site_url('agenda/update_agenda');?>" method="POST">
Agenda : <br/><textarea name="nama" cols="50" rows="5"><?php echo $agenda->nama;?></textarea>
<br/><br/>
Keterangan : <br/><textarea name="keterangan" cols="50" rows="5"><?php echo $agenda->keterangan;?>
</textarea>
<br/><br/>
<input type="hidden" name="id_agenda" value="<?php echo $agenda->id_agenda;?>" />
<input type="submit" value="Ubah" />
</form>
</body>
</html>