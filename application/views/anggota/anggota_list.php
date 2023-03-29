<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
				
                <div class="container-fluid">

                    
                    <h1 class="h3 mb-4 text-gray-800">DAFTAR ANGGOTA</h1>

                   
					<div class="row">
					  <div class="col-lg">


					  		<a href="<?=site_url('anggota/add')?>" class="btn btn-outline-primary mb-3">Tambahkan Anggota Baru</a>

					  		<a href="<?=base_url()?>"><input type="button" value="Cancel" class="btn btn-outline-primary mb-3" style="margin-left: 20px;"></a>

					  		 
                             <?=$this->session->flashdata('msg')?>
							

					  		<table class="table table-striped table-hover">
					  			<tdead>
					  				<tr class="table-info">
					  					<th scope="col">No</th>
					  					<th scope="col">NIP</th>
					  					<th scope="col">Nama Anggota</th>
					  					<th scope="col">Jabatan</th>
					  					<th scope="col">Fakultas</th>
					  					<th scope="col">Prodi</th>
					  					<th scope="col" colspan="3">Aksi</th>
					  				</tr>
					  			</tdead>
					  			<?php $i=1; foreach($anggota as $ang) { ?>
					  			<tbody>
					  				<tr>
					  					<td><?=$i++?></td>
										<td><?=$ang->nip?></td>
										<td><?=$ang->nama?></td>
										<td><?=$ang->jabatan?></td>
										<td><?=$ang->tipe_fakultas?></td>
										<td><?=$ang->tipe_prodi?></td>
					  					<td><a href="<?=site_url('anggota/edit/'.$ang->id_anggota)?>" class="btn btn-outline-success btn-sm"> Edit</a>
					  					</td>
					  					<td><a href="<?=site_url('anggota/delete/'.$ang->id_anggota)?>" onclick="return confirm('Apakah Anda yakin akan menghapus?')" class="btn btn-outline-danger btn-sm"> Hapus</a>
					  					</td>
					  					<!-- <td><a href="<?=site_url('anggota/menyimpan/'.$ang->id_anggota)?>" class="btn btn-info btn-sm">SIMPAN</a></td> -->
					  				</tr><?php } ?>
					  			</tbody>
							</table>
					  </div>
					</div>

                </div>
             

            </div>
 

<!-- <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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
	<a href="<?=base_url()?>"><h4>HOME</h4></a>
	<hr>
	<?=$this->session->flashdata('msg')?>
	<a href="<?=site_url('anggota/add')?>">Tambahkan Anggota Baru</a>
	<hr>
	<table border="1">
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama Anggota</th>
			<th>Jabatan</th>
			<th>Fakultas</th>
			<th>Prodi</th>
			<th colspan="3">Aksi</th>
		</tr>
		<?php $i=1; foreach($anggota as $ang) { ?>
		<tr>
			<td><?=$i++?></td>
			<td><?=$ang->nip?></td>
			<td><?=$ang->nama?></td>
			<td><?=$ang->jabatan?></td>
			<td><?=$ang->tipe_fakultas?></td>
			<td><?=$ang->tipe_prodi?></td>
			<td><a href="<?=site_url('anggota/edit/'.$ang->id_anggota)?>"> Edit</a></td>
			<td><a href="<?=site_url('anggota/delete/'.$ang->id_anggota)?>" onclick="return confirm('Apakah Anda yakin akan menghapus?')"> Hapus</a></td>
			<td><a href="<?=site_url('anggota/menyimpan/'.$ang->id_anggota)?>">SIMPAN</a></td>
		</tr><?php } ?>
	</table>
</body>
</html> -->
