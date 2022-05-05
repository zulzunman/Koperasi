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
	<hr>
	<?php
	$ni='';
	$nam='';
	$jab='';
	$tipe_fak='';
	$tipe_prod='';

	if(isset($ang)) {
		$ni=$ang->nip;
		$nam=$ang->nama;
		$jab=$ang->jabatan;
		$tipe_fak=$ang->tipe_fakultas;
		$tipe_prod=$ang->tipe_prodi;
	}
	?>

	<div style="color: red;"><?=validation_errors()?></div>

	<form action="" method="post">
		<table>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip" value="<?=$ni?>" id="" required></td>
			</tr>
			<tr>
				<td>Nama Anggota</td>
				<td><input type="text" name="nama" value="<?=$nam?>" id="" required></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>
					<input type="text" name="jabatan" value="<?=$jab?>" id="">
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td><select name="tipe_fakultas" id="" required>
						<option value="">Pilih Fakultas</option>
							<?php foreach($kate as $kat) { ?>
							<option value="<?=$kat->fakultas?>" <?=set_select('tipe_fakultas',$kat->fakultas,$tipe_fak==$kat->fakultas?TRUE:FALSE)?>><?=$kat->fakultas?></option>	
							<?php } ?>
				</td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td><select name="tipe_prodi" id="" required>
						<option value="">Pilih Prodi</option>
							<?php foreach($kate as $kat) { ?>
							<option value="<?=$kat->prodi?>" <?=set_select('tipe_prodi',$kat->prodi,$tipe_prod==$kat->prodi?TRUE:FALSE)?>><?=$kat->prodi?></option>	
							<?php } ?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="SAVE" name="submit">
					<a href="<?=site_url('anggota')?>"><input type="button" value="CANCEL"></a>
				</td>
			</tr>
		</table>
	</form>
	<hr>
</body>
</html>