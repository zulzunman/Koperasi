<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KOPERASI</title>
</head>
<body>
	<h1>Data User</h1>
	<h3>Daftar User</h3>
	<!-- <a href="<?=base_url()?>"><h4>HOME</h4></a> -->
	<hr>
	<?=$this->session->flashdata('msg')?>
	<a href="<?=site_url('user/add')?>">Tambahkan User Baru</a>
	<hr>
	<a href="<?=base_url()?>"><h4>HOME</h4></a>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
            <th>NIP</th>
            <th>Type</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php $i=1; foreach($users as $kate) { ?>
		<tr>
			<td><?=$i++?></td>
			<td><?=$kate->username?></td>
			<td><?=$kate->password?></td>
            <td><?=$kate->nip?></td>
            <td><?=$kate->tipe?></td>
			<td><a href="<?=site_url('user/edit/'.$kate->id_user)?>"> Edit</a></td>
			<td><a href="<?=site_url('user/delete/'.$kate->id_user)?>" onclick="return confirm('Apakah Anda yakin akan menghapus?')"> Hapus</a></td>
		</tr><?php } ?>
	</table>
</body>
</html>