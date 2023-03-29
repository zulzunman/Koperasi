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
	<h3>Formulir Penyimpanan</h3>
	<hr>
	<?php
	$nama='';
	$alamat='';
	$asal='';
	$jk='';
	$umur='';
	$jumlah='';

	if(isset($koper)) {
		$nama=$koper->nama_anggota;
		$alamat=$koper->alamat_anggota;
		$asal=$koper->asal_anggota;
		$jk=$koper->jk_anggota;
		$umur=$koper->umur_anggota;
		$jumlah=$koper->jumlah_simpan;
	}
	?>

	<form action="" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_anggota" value="<?=$nama?>" id="" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<textarea name="alamat_anggota" id="" cols="30" rows="10" required><?=$alamat?> </textarea>
				</td>
			</tr>
			<tr>
				<td>Asal</td>
				<td><select name="asal_anggota" id="" required>
						<option value="">Pilih Asal</option>
						<option value="A" <?=$asal=='A'?'selected':''?>>A</option>
						<option value="B" <?=$asal=='B'?'selected':''?>>B</option>
						<option value="C" <?=$asal=='C'?'selected':''?>>C</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jk_anggota" value="Pria" <?=$jk=='Pria'?'checked':''?> id="" required>Pria
					<input type="radio" name="jk_anggota" value="Wanita" <?=$jk=='Wanita'?'checked':''?> id="" required>Wanita 
				</td>
			</tr>
			<tr>
				<td>Umur</td>
				<td><input type="number" name="umur_anggota" value="<?=$umur?>" id="" required></td>
			</tr>
			<tr>
				<td>Jumlah Simpan</td>
				<td><input type="number" name="jumlah_simpan" value="<?=$jumlah?>" id="" required></td>
			</tr>
			
			<tr>
				<td></td>
				<td>
					<input type="submit" value="SAVE" name="submit">
					<a href="<?=site_url('koperasi')?>"><input type="button" value="CANCEL"></a>
				</td>
			</tr>
		</table>
	</form>
	<hr>
</body>
</html>