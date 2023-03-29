<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>KOPERASI</title>
</head>
<body>
	<h1>KOPERASI</h1>
	<h3>DAFTAR SIMPAN UANG</h3>

	<a href="<?=base_url()?>"><h4>HOME</h4></a>
	<hr>
	<table border="1">
		<tr>
			<th>No</th>
			<th>ID Simpan</th>
			<th>Tanggal Simpan</th>
			<th>ID Anggota</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Uang Simpan</th>
			<th>Bukti Simpan</th>
			
		</tr>

		<?php $i=1; foreach($penyimpanan as $menyimpan) { ?>

		<tr>
			<td><?=$i++?></td>
			<td><?=$menyimpan->id_simpan?></td>
			<td><?=date('l, d M Y H:i:s', strtotime($menyimpan->tanggal_simpan))?></td>
			<td><?=$menyimpan->id_anggota?></td>
			<td><?=$menyimpan->nip?></td>
			<td><?=$menyimpan->nama?></td>
			<td><?=$menyimpan->jabatan?></td>
			<td><?=$menyimpan->uang_simpan?></td>
			<td><?=$menyimpan->bukti_simpan?></td>
			<!-- <img src="<?=base_url('uploads/bukti/'.$this->session->userdata('bukti_simpan'))?>" width="128" height="128" class="img-fluid rounded-start"> -->
		</tr>
		
		<?php } ?> 
		
	</table>
</body>
</html>