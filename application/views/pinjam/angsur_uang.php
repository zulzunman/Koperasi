<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>KOPERASI</title>
</head>
<body>
	<h1>KOPERASI</h1>
	<h3>FORMULIR ANGSUR UANG</h3>
	<hr>
	

	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>ID Pinjam</td>
				<td>: <?=$this->session->userdata('nip')?></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td>: <?=$kate->nip?></td>
			</tr>
			<tr>
				<td>Uang Pinjam</td>
				<td>: <?=$kate->uang_pinjam?></td>
			</tr>
			<tr>
				<td>Lama Pinjam</td>
				<td>: <?=$kate->lama_pinjam?></td>
			</tr>
			<tr>
				<td>Uang Angsur</td>
				<td><input type="number" name="uang_angsur" required/></td>
			</tr>
			<tr>
				<td>Bukti Angsur</td>
				<td><input type="file" name="bukti_angsur" size="20" required/></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="ANGSUR">
					<a href="<?=site_url('pinjam')?>"><input type="button" value="CANCEL"></a>
				</td>
			</tr>
		</table>
		<input type="hidden" name="pinjaman" value="<?=$kate->uang_pinjam?>">
	</form>
	<hr>
	</body>
</html>



