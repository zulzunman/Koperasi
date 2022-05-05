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
	<?=$this->session->flashdata('msg')?>
	<a href="<?=site_url('simpan/add')?>">Tambahkan Simpan Baru</a>
	<hr>
	<table border="1">
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Tanggal Simpan</th>
			<th>Uang Simpan</th>
			<th>Bukti Simpan</th>
			
		</tr>

		<?php $i=1; foreach($simpan as $save) { ?>

		<tr>
			<td><?=$i++?></td>
			<td><?=$save->nip?></td>
			<td><?=date('l, d M Y', strtotime($save->tanggal_simpan))?></td>
			<td><?=$save->uang_simpan?></td>
			<td><?=$save->bukti_simpan?></td>
			<!-- <img src="<?=base_url('uploads/bukti/'.$this->session->userdata('bukti_simpan'))?>" width="128" height="128" class="img-fluid rounded-start"> -->
		</tr>
		
		<?php } ?> 
		
	</table>
</body>
</html>