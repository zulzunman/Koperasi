				<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
				<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">DAFTAR PENGGUNA</h1>

                   
					<div class="row">
					  <div class="col-lg">


					  		<a href="<?=site_url('user/add')?>" class="btn btn-outline-primary mb-3">Tambahkan Pengguna Baru</a>

					  		<a href="<?=base_url()?>"><input type="button" value="Cancel" class="btn btn-outline-primary mb-3" style="margin-left: 20px;"></a>

					  		 <!-- Pesan error sudah berfungsi -->
                             <?=$this->session->flashdata('msg')?>
							

					  		<table class="table table-striped table-hover">
					  			<tdead>
					  				<tr class="table-info">
					  					<th scope="col">No</th>
					  					<th scope="col">Username</th>
					  					<!-- <td scope="col">Password</td> --> 
					  					<th scope="col">NIP</th>
					  					<th scope="col">Tipe Pengguna</th>
					  					<th scope="col" colspan="3">Action</th>
					  				</tr>
					  			</tdead>
					  			<?php $i=1; foreach($user as $use) { ?>
					  			<tbody>
					  				<tr>
					  					<td scope="col"><?=$i++?></td>
					  					<td scope="col"><?=$use->username?></td>
					  					<!-- <td scope="col"><?=$use->password?></td> --> 
					  					<td scope="col"><?=$use->nip?></td>
					  					<td scope="col"><?=$use->tipe?></td>
					  					<td><a href="<?=site_url('user/edit/'.$use->id_user)?>" class="btn btn-outline-success btn-sm"> Edit</a>
					  					</td>
					  					<td><a href="<?=site_url('user/delete/'.$use->id_user)?>" onclick="return confirm('Apakah Anda yakin akan menghapus?')" class="btn btn-outline-danger btn-sm"> Hapus</a></td>
					  					<td><a href="<?=site_url('user/reset/'.$use->tipe)?>" onclick="return confirm('Apakah Anda yakin akan mereset password?')" class="btn btn-outline-info btn-sm">Reset Password</a></td>
					  				</tr><?php } ?>
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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KOPERASI</title>
</head>
<body>
	<h1>Data Pengguna</h1>
	<h3>Daftar Pengguna</h3>
	<a href="<?=base_url()?>"><h4>HOME</h4></a>
	<hr>
	<?=$this->session->flashdata('msg')?>
	<a href="<?=site_url('user/add')?>">Tambahkan Pengguna Baru</a>
	<hr>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>NIP</th>
			<th>Tipe Pengguna</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php $i=1; foreach($user as $use) { ?>
		<tr>
			<td><?=$i++?></td>
			<td><?=$use->username?></td>
			<td><?=$use->password?></td>
			<td><?=$use->nip?></td>
			<td><?=$use->tipe?></td>
			<td><a href="<?=site_url('user/edit/'.$use->id_user)?>"> Edit</a></td>
			<td><a href="<?=site_url('user/delete/'.$use->id_user)?>" onclick="return confirm('Apakah Anda yakin akan menghapus?')"> Hapus</a></td>
		</tr><?php } ?>
	</table>
</body>
</html> -->