				<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
				<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">DAFTAR PINJAM UANG</h1>

                   
					<div class="row">
					  <div class="col-lg">


					  		<a href="<?=base_url()?>" class="btn btn-outline-primary mb-3">Back to Home</a>
					  		<a style="margin-left: 10px;" href="<?=site_url('pinjam/add')?>" class="btn btn-outline-primary mb-3">Tambahkan Pinjaman Baru</a>

					  		 
					  	<!-- Pesan error sudah berfungsi -->
                        <?=$this->session->flashdata('msg')?>

					  	<table class="table table table-striped table-hover">
					  			<tdead>
					  				<tr class="table-info" style="text-align: center;">
					  					<th scope="col">No</th>
										<th scope="col">NIP</th>
										<th scope="col">Tanggal Pinjam</th>
										<th scope="col">Uang Pinjam</th>
										<th scope="col">Lama Pinjam</th>
										<th scope="col">Bukti Pinjam</th>
										<th scope="col">Aksi</th>
					  				</tr>

					  			</tdead>
					  			<?php foreach($pinjam as $kate) { ?>
					  			
					  			<tbody>
					  				<tr class="table-default" style="text-align: center;">
										<td scope="col"><?=$i++?></td>
										<td scope="col"><?=$kate->nip?></td>
										<td scope="col"><?=date('l, d M Y', strtotime($kate->tanggal_pinjam))?></td>
										<td scope="col"><?=$kate->uang_pinjam?></td>
										<td scope="col"><?=$kate->lama_pinjam?> Bulan </td>
										<td scope="col"><img width="25%" src="<?=base_url('bukti_pinjam/'.$kate->bukti_pinjam)?>"></td>
										<td scope="col"><?php 
										if($kate->uang_pinjam==0) 
											echo '<button class="btn btn-info btn-sm">Lunas</button>'; 
										else {?>
											<a href="<?=site_url('pinjam/angsur/'.$kate->id_pinjam)?>" class="btn btn-info btn-sm"> Angsur</a></td><?php }?> 

									</tr>
									<!-- Rp.  -->
									<?php } ?>
									<tr class="table-info" style="text-align: center;">
									<th colspan="7">Total Pinjam: Rp. <?=$saldo['totalPinjam']?></th>
									</tr> 

					  			</tbody>

							</table>
							<p><?=$this->pagination->create_links();?></p> <!-- Menampilkan link pagination -->
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
	<meta charset="utf-8">
	<title>KOPERASI</title>
</head>
<body>
	<h1>KOPERASI</h1>
	<h3>DAFTAR PINJAM UANG</h3>

	<a href="<?=base_url()?>"><h4>HOME</h4></a>
	<?=$this->session->flashdata('msg')?>
	<a href="<?=site_url('pinjam/add')?>">Tambahkan Pinjaman Baru</a>
	<hr>
	<table border="1">
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Tanggal Pinjam</th>
			<th>Uang Pinjam</th>
			<th>Lama Pinjam</th>
			<th>Bukti Pinjam</th>
			<th>Aksi</th>
		</tr>

		<?php $i=1; foreach($pinjam as $kate) { ?>

		<tr>
			<td><?=$i++?></td>
			<td><?=$kate->nip?></td>
			<td><?=date('l, d M Y', strtotime($kate->tanggal_pinjam))?></td>
			<td><?=$kate->uang_pinjam?></td>
			<td><?=$kate->lama_pinjam?> Bulan </td>
			<td><img width="25%" src="<?=base_url('bukti_pinjam/'.$kate->bukti_pinjam)?>"></td>
			<td><a href="<?=site_url('pinjam/angsur/'.$kate->id_pinjam)?>"> Angsur</a></td>
		</tr>
		
		<?php } ?> 
		
	</table>
</body>
</html> -->