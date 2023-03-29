				<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
				<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">DAFTAR SIMPAN UANG</h1>

                   
					<div class="row">
					  <div class="col-lg">


					  		<a href="<?=base_url()?>" class="btn btn-outline-primary mb-3">Back to Home</a>
					  		<a style="margin-left: 10px;" href="<?=site_url('simpan/add')?>" class="btn btn-outline-primary mb-3">Tambahkan Simpan Baru</a>

					  		 
					  	<!-- Pesan error sudah berfungsi -->
                        <?=$this->session->flashdata('msg')?>

					  	<table class="table table table-striped table-hover">
					  			<tdead>
					  				<tr class="table-info" style="text-align: center;">
					  					<th scope="col">No</th>
										<th scope="col">NIP</th>
										<th scope="col">Tanggal Simpan</th>
										<th scope="col">Uang Simpan</th>
										<th scope="col">Bukti Simpan</th>
					  				</tr>

					  			</tdead>
					  			<?php $total=0; 
					  			foreach($simpan as $save): 
					  				$total=$save->uang_simpan+$total
					  			?>
					  			
					  			<tbody>
					  				<tr class="table-default" style="text-align: center;">
										<td scope="col"><?=$i++?></td>
										<td scope="col"><?=$save->nip?></td>
										<td scope="col"><?=date('l, d M Y', strtotime($save->tanggal_simpan))?></td>
										<td scope="col"><?=$save->uang_simpan?></td>
										<td scope="col"><img width="25%" src="<?=base_url('bukti/'.$save->bukti_simpan)?>"></td>

									</tr>
									<?php endforeach ?>
									<tr class="table-info" style="text-align: center;">
									<th colspan="7">Total Simpan: Rp. <?=$saldo['totalSimpan']?></th>
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
	<h3>DAFTAR SIMPAN UANG</h3>

	<a href="<?=base_url()?>"><h4>HOME</h4></a>
	<?=$this->session->flashdata('msg')?>
	<a href="<?=site_url('simpan/add')?>">Tambahkan Simpan Baru</a>
	<hr>
	<table border="1">
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Tanggal Simpan</th>
			<th>Uang Simpan</th>
			<th>Bukti Simpan</th>
			
		</tr>

		<?php $i=1; $total=0; 
		foreach($simpan as $save): 
			$total=$save->uang_simpan+$total
		?>

		<tr>
			<td><?=$i++?></td>
			<td><?=$save->nip?></td>
			<td><?=date('l, d M Y', strtotime($save->tanggal_simpan))?></td>
			<td><?=$save->uang_simpan?></td>
			
			<td><img width="25%" src="<?=base_url('bukti/'.$save->bukti_simpan)?>"></td>
			
		</tr>

		<?php endforeach ?>
		
		<tr><th colspan="7" align="center">Total : $ <?=$total?></th></tr> 
		
		
	</table>
</body>
</html> -->