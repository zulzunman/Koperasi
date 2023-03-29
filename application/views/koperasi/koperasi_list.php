<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PENYIMPANAN</title>
</head>
<body>
	<h1>Data Penyimpanan</h1>
	<h3>Daftar Simpan</h3>
	<!-- <a href="<?=base_url()?>"><h4>HOME</h4></a> -->
	<hr>
	<?=$this->session->flashdata('msg')?>
	<a href="<?=site_url('koperasi/add')?>">Tambahkan Simpan Baru</a>
	<hr>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Asal Anggota</th>
			<th>Jenis Kelamin</th>
			<th>Umur</th>
			<th>Jumlah Simpan</th>
			<th colspan="2">Action</th>
		</tr>
		<?php $i=1; foreach($koperasi as $koper) { ?>
		<tr>
			<td><?=$i++?></td>
			<td><?=$koper->nama_anggota?></td>
			<td><?=$koper->alamat_anggota?></td>
			<td><?=$koper->asal_anggota?></td>
			<td><?=$koper->jk_anggota?></td>
			<td><?=$koper->umur_anggota?></td>
			<td><?=$koper->jumlah_simpan?></td>
			<td><a href="<?=site_url('koperasi/edit/'.$koper->id_anggota)?>"> Edit</a></td>
			<td><a href="<?=site_url('koperasi/delete/'.$koper->id_anggota)?>" onclick="return confirm('Are you sure want to delete?')"> Delete</a></td>
		</tr><?php } ?>
	</table>
</body>
</html>