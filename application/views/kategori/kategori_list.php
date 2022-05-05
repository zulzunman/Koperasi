<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KOPERASI</title>
</head>
<body>
	<h1>Data Kategori Prodi dan Fakultas</h1>
	<h3>Daftar Kategori</h3>
	<a href="<?=base_url()?>"><h4>HOME</h4></a>
	<hr>
	<?=$this->session->flashdata('msg')?>
	<a href="<?=site_url('kategori/add')?>">Tambahkan Kategori Baru</a>
	<hr>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Fakultas</th>
			<th>Nama Prodi</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php $i=1; foreach($kategori as $kate) { ?>
		<tr>
			<td><?=$i++?></td>
			<td><?=$kate->fakultas?></td>
			<td><?=$kate->prodi?></td>
			<td><a href="<?=site_url('kategori/edit/'.$kate->id_kategori)?>"> Edit</a></td>
			<td><a href="<?=site_url('kategori/delete/'.$kate->id_kategori)?>" onclick="return confirm('Apakah Anda yakin akan menghapus?')"> Hapus</a></td>
		</tr><?php } ?>
	</table>
</body>
</html>