<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KOPERASI</title>
</head>
<body>
	<h1>Data Pinjam</h1>
	<h3>Daftar Pinjam</h3>
	<!-- <a href="<?=base_url()?>"><h4>HOME</h4></a> -->
	<hr>
	<a href="<?=base_url()?>"><h4>HOME</h4></a>
	<?=$this->session->flashdata('msg')?>
	<a href="<?=site_url('Pinjam/add')?>">Pinjaman Baru</a>
	<hr>
	<table border="1">
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Tanggal Pinjam</th>
            <th>Uang Pinjam</th>
            <th>Lama Pinjam</th>
            <th>Bukti Pinjam</th>
			<th>Aksi</th>
		</tr>
		<?php $i=1; foreach($pinjam as $kate) { ?>
		<tr>
			<td><?=$i++?></td>
			<td><?=$kate->nip?></td>
			<td><?=$kate->tanggal_pinjam?></td>
			<td><?=$kate->uang_pinjam?></td>
			<td><?=$kate->lama_pinjam?></td>
			<td><?=$kate->bukti_pinjam?></td>
			<td>Bayar</a></td>
		</tr><?php } ?>	
	</table>
</body>
</html>