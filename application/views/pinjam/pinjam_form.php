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
	<hr>
	<form action="" method="post">
		<table>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip"  id="" required></td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td><input type="date" name="tanggal_pinjam" id="" required></td>
			</tr>
			<tr>
				<td>Uang Pinjam</td>
				<td><input type="number" name="uang_pinjam"  id="" required></td>
			</tr>
			<tr>
				<td>Lama Pinjam</td>
				<td><input type="number" name="lama_pinjam"  id="" required></td>
			</tr>
            <tr>
                <td>Bukti Pinjam</td>
                <td><input type="file" name="bukti_pinjam" id=""></td>
            </tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="SAVE" name="submit">
					<a href="<?=site_url('pinjam')?>"><input type="button" value="CANCEL"></a>
				</td>
			</tr>
		</table>
	</form>
	<hr>
</body>
</html>