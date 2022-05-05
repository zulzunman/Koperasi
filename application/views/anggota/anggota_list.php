<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KOPERASI</title>
</head>
<body>
	<h1>Data Anggota Koperasi Simpan Pinjam</h1>
	<h3>Daftar Anggota</h3>
	<a href="<?=base_url()?>"><h4>HOME</h4></a>
	<hr>
	<?=$this->session->flashdata('msg')?>
	<a href="<?=site_url('anggota/add')?>">Tambahkan Anggota Baru</a>
	<hr>
	<table border="1">
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama Anggota</th>
			<th>Jabatan</th>
			<th>Fakultas</th>
			<th>Prodi</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php $i=1; foreach($anggota as $ang) { ?>
		<tr>
			<td><?=$i++?></td>
			<td><?=$ang->nip?></td>
			<td><?=$ang->nama?></td>
			<td><?=$ang->jabatan?></td>
			<td><?=$ang->tipe_fakultas?></td>
			<td><?=$ang->tipe_prodi?></td>
			<td><a href="<?=site_url('anggota/edit/'.$ang->id_anggota)?>"> Edit</a></td>
			<td><a href="<?=site_url('anggota/delete/'.$ang->id_anggota)?>" onclick="return confirm('Apakah Anda yakin akan menghapus?')"> Hapus</a></td>
		</tr><?php } ?>
	</table>
</body>
</html>