				<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
				<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">DAFTAR KATEGORI PRODI DAN FAKULTAS</h1>

                   
					<div class="row">
					  <div class="col-lg">


					  		<a href="<?=site_url('kategori/add')?>" class="btn btn-primary mb-3">Tambahkan Kategori Baru</a>
					  		<a href="<?=base_url()?>"><input type="button" value="Cancel" class="btn btn-primary mb-3" style="margin-left: 20px;"></a>
					  		<!-- Pesan error sudah berfungsi -->
                    		<?=$this->session->flashdata('msg')?>

					  		 
						
								<table class="table table-striped table-hover">
					  			<tdead>
					  				<tr class="table-info">
					  					<th scope="col">No</th>
					  					<th scope="col">Nama Fakultas</th>
					  					<th scope="col">Nama Prodi</th>
					  					<th scope="col" colspan="2">Aksi</th>
					  				</tr>
					  			</tdead>
					  			<?php $i=1; foreach($kategori as $kate) { ?>
					  			<tbody>
					  				<tr>
										<td><?=$i++?></td>
										<td><?=$kate->fakultas?></td>
										<td><?=$kate->prodi?></td>
										<td><a href="<?=site_url('kategori/edit/'.$kate->id_kategori)?>" class="btn btn-success btn-sm">Edit</a></td>
										<td><a href="<?=site_url('kategori/delete/'.$kate->id_kategori)?>" onclick="return confirm('Apakah Anda yakin akan menghapus?')" class="btn btn-danger btn-sm">Hapus</a></td>
									</tr><?php } ?>
					  			</tbody>
							</table>
							<!-- <p><?=$this->pagination->create_links();?></p> --> <!-- Menampilkan link pagination -->
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
	<h1>Data Kategori Prodi dan Fakultas</h1>
	<h3>Daftar Kategori</h3>
	<a href="<?=base_url()?>"><h4>HOME</h4></a>
	<hr>
	<?=$this->session->flashdata('msg')?>
	<a href="<?=site_url('kategori/add')?>">Tambahkan Kategori Baru</a>
	<hr>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Fakultas</th>
			<th>Nama Prodi</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php $i=1; foreach($kategori as $kate) { ?>
		<tr>
			<td><?=$i++?></td>
			<td><?=$kate->fakultas?></td>
			<td><?=$kate->prodi?></td>
			<td><a href="<?=site_url('kategori/edit/'.$kate->id_kategori)?>"> Edit</a></td>
			<td><a href="<?=site_url('kategori/delete/'.$kate->id_kategori)?>" onclick="return confirm('Apakah Anda yakin akan menghapus?')"> Hapus</a></td>
		</tr><?php } ?>
	</table>
</body>
</html> -->