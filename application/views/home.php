<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KOPERASI</title>
</head>
<body>
	<h1>KOPERASI</h1>
	<h3>HOME MENU</h3>
	<hr>
	<ul>
		<li><a href="<?=site_url('Pinjam')?>">Manage Pijam</a></li>
		<li><a href="<?=site_url('Simpan')?>">Manage Simpan</a></li>
		<li><a href="<?=site_url('Anggota')?>">Manage Anggota</a></li>
		<li><a href="<?=site_url('Kategori')?>">Manage Kategori</a></li>
		<li><a href="<?=site_url('User')?>">Manage User</a></li>
	</ul>
</body>
</html>