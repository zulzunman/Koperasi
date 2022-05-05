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
				<td>NIP</td>
				<td><input type="number" name="nip" required/></td>
			</tr>
			<tr>
				<td>Tanggal Simpan</td>
				<td><input type="date" name="tanggal_simpan" required/></td>
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
					<a href="<?=site_url('simpan')?>"><input type="button" value="CANCEL"></a>
				</td>
			</tr>
		</table>
	</form>
	<hr>
	</body>
</html>