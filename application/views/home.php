
                <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">PROFIL</h1>

                    <div class="card mb-3" style="max-width: 540px;">
					  <div class="row g-0">
					    <div class="col-md-4">
					      <img src="<?=base_url('uploads/user/'.$this->session->userdata('photo'))?>" width="128" height="128" class="img-fluid rounded-start">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h5 class="card-title">NIP : <?=$this->session->userdata('nip')?></h5>
							<h5 class="card-title">Hii <?=$this->session->userdata('username')?></h5>
					        <p class="card-text">Selamat datang di KOPERASI UNLA</p>
					        
					      </div>
					    </div>
					  </div>
					</div>

					<!-- <a class="nav-link" href="<?=site_url('simpan')?>">
					<div class="card mb-3" style="max-width: 240px;">
					  <div class="row g-0">
					    <div class="col-md-4">
							<br>
							<h1><i class="fas fa-fw fa-piggy-bank"></i></h1>
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
								<div class="card-title">
									<span></span>
									<h5>Simpan</h5>
								</div>
					      </div>
					    </div>
					  </div>
					</div></a> -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->







<!-- <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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
		<?php if ($this->session->userdata('tipe')=='Admin') { ?>
		<li><a href="<?=site_url('Anggota')?>">Kelola Anggota</a></li>
		<li><a href="<?=site_url('Kategori')?>">Kelola Kategori</a></li>
		<li><a href="<?=site_url('User')?>">Kelola User</a></li> 
		<li><a href="<?=site_url('Simpan/akhir')?>">Saldo</a></li><?php } ?>

		<li><a href="<?=site_url('Simpan')?>">Simpan</a></li>
		<li><a href="<?=site_url('Pinjam')?>">Pinjam</a></li>
		<li><a href="<?=site_url('Pinjam/angsuran')?>">Laporan Angsur</a></li> 
		<li><a href="<?=site_url('Anggota/penyimpanan')?>">Laporan Simpan</a></li> 
	</ul>

	<hr>
	<h4>Welcome <?=$this->session->userdata('nip')?>, you are login as <?=$this->session->userdata('tipe')?></h4>
	<ul>
		<li><img src="<?=base_url('uploads/user/'.$this->session->userdata('photo'))?>" width="128" height="128" /></li>
		<li><a href="<?=site_url('auth/changephoto')?>">Ubah Foto</a></li>
		<li><a href="<?=site_url('auth/changepass')?>">Ubah Password</a></li>
		<li><a href="<?=site_url('auth/logout')?>">Log Out</a></li>
	</ul>  
</body>
</html> -->