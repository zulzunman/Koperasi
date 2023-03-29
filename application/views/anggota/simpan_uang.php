<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>KOPERASI</title>
</head>
<body>
	<h1>KOPERASI</h1>
	<h3>FORMULIR PENYIMPANAN UANG</h3>
	<hr>
	<!-- <?=$this->session->flashdata('msg')?>
	<div style="color: red;"><?=$error?></div> --> 

	<form action="" method="post">
		<table>
			<tr>
				<td>ID Anggota</td>
				<td>: <?=$ang->id_anggota?></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td>: <?=$ang->nip?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>: <?=$ang->nama?></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>: <?=$ang->jabatan?></td>
			</tr>
			<tr>
				<td>Uang Simpan</td>
				<td><input type="number" name="uang_simpan" required/></td>
			</tr>
			<tr>
				<td>Bukti Simpan</td>
				<td><input type="file" name="bukti_simpan" required/></td>
			</tr>
			<!-- <tr>
				<td></td>
				<td>
					<input type="submit" name="upload" value="UPLOAD BUKTI">
				</td>
			</tr> -->
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="SIMPAN">
					<a href="<?=site_url('anggota')?>"><input type="button" value="CANCEL"></a>
				</td>
			</tr>
		</table>
	</form>
	<hr>
	</body>
</html>