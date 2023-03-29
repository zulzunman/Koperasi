<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
				<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">DAFTAR SALDO UANG</h1>

                   
					<div class="row">
					  <div class="col-lg">

					  		<a href="<?=base_url()?>"><input type="button" value="Back to Home" class="btn btn-outline-primary mb-3" style="margin-left: 0px;"></a>

					  		 <!-- Pesan error sudah berfungsi -->
                             <?=$this->session->flashdata('msg')?>
							

					  		<!-- <a href="<?=site_url('users037/add')?>" class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New User</a>
 -->

					  		<table class="table table-striped table-hover">
					  			<tdead>
					  				<tr class="table-info" style="text-align: center;">
					  					<th scope="col">Total Simpan</th>
					  					<!-- <td scope="col">Password</td> -->
					  					<th scope="col">Total Pinjam</th>
					  					<th scope="col">Saldo Akhir</th>
					  					
					  				</tr>
					  			</tdead>

					  			<tbody>
					  				<tr style="text-align: center;">
					  					<td scope="col"><a class="btn btn-primary" href="<?=site_url('simpan/index/')?>" role="button">Rp. <?=$saldo['totalSimpan']?></a></td>
					  					<!-- <td scope="col"><?=$user->password_037?></td> -->
					  					<td scope="col"><a class="btn btn-primary" href="<?=site_url('pinjam/index/')?>" role="button">Rp. <?=$saldo['totalPinjam']?></td>
					  					<td scope="col">Rp. <?=$saldo['saldo']?></td>
					  				<?php ?>
					  			</tbody>
							</table>
					  </div>
					</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<!-- <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>KOPERASI</title>
</head>
<body>
	<h1>KOPERASI</h1>
	<h3>DAFTAR SALDO UANG</h3>

	<a href="<?=base_url()?>"><h4>HOME</h4></a>
	<?=$this->session->flashdata('msg')?>
	<a href="<?=site_url('simpan/add')?>">Tambahkan Simpan Baru</a> 
	<hr>
		<table border="1">
		<tr>
			<th>Total Simpan</th>
			<th>Total Pinjam</th>
			<th>Saldo Akhir</th>
		</tr>
		<tr>
			<td><a href="<?=site_url('simpan/index/')?>"><?=$saldo['totalSimpan']?></a></td>
			<td><a href="<?=site_url('pinjam/index/')?>"><?=$saldo['totalPinjam']?></a></td>
			<td><?=$saldo['saldo']?></td>
		    <?php  ?>
		</tr>
	</table>
</body>
</html> -->