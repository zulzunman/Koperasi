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
	<?php
	$fak='';
	$prod='';

	if(isset($kate)) {
		$fak=$kate->fakultas;
		$prod=$kate->prodi;
	}
	?>

	<form action="" method="post">
		<table>
			<tr>
				<td>Nama Fakultas</td>
				<td><input type="text" name="fakultas" value="<?=$fak?>" id="" required></td>
			</tr>
			<tr>
				<td>Nama Prodi</td>
				<td><input type="text" name="prodi" value="<?=$prod?>" id="" required></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="SAVE" name="submit">
					<a href="<?=site_url('kategori')?>"><input type="button" value="CANCEL"></a>
				</td>
			</tr>
		</table>
	</form>
	<hr>
</body>
</html>