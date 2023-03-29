<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
				<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">DAFTAR ANGSUR UANG</h1>

                   
					<div class="row">
					  <div class="col-lg">


					  		<a href="<?=base_url()?>" class="btn btn-outline-primary mb-3">Back to Home</a>

					  		 

					  	<table class="table table table-striped table-hover">
					  			<tdead>
					  				<tr class="table-info" style="text-align: center;">
					  					<th scope="col">No</th>
										<th scope="col">NIP</th>
										<th scope="col">Tanggal Angsur</th>
										<th scope="col">Lama Pinjam</th>
										<th scope="col">Uang Angsur</th>
										<th scope="col">Bukti Angsur</th>
					  				</tr>

					  			</tdead>


								<?php $sisa=0;$totalPinjam=0;$totalAngsur=0; foreach($angsuran as $bayar)
								{ $totalPinjam=$bayar->uang_pinjam ?>
								
											  			
					  			<tbody>
					  				<tr class="table-default" style="text-align: center;">
										<!-- <td scope="col"><?=($key+1)?></td> -->
										<td scope="col"><?=$i++?></td>
										<td scope="col"><?=$bayar->nip?></td>
										<td scope="col"><?=date('l, d M Y H:i:s', strtotime($bayar->tanggal_angsur))?></td>
										<td scope="col"><?=$bayar->lama_pinjam?> Bulan</td>
										<td scope="col"><?=$bayar->uang_angsur?></td>
										<td scope="col"><img width="25%" src="<?=base_url('bukti_angsur/'.$bayar->bukti_angsur)?>"></td>
									</tr>
									<?php } $sisa=$totalPinjam-$totalAngsur?>

					  			</tbody>

							</table>
							<table class="table table table-striped table-hover">
								<tr>
									<th colspan="7">Total Pinjaman</th>
									<?php if ($this->session->userdata('tipe')=='Admin') { ?>
										<td><?=$saldo['totalPinjam']?></td>
									<?php } else {?>
										<!-- <td><?=$totalPinjam?></td> -->
										<td><?=$saldo['totalPinjam']?></td>
									<?php }?>
								</tr>
								<!-- <tr>
									<th colspan="7">Sisa Angsur</th>
									<td><?=$sisa?></td>
								</tr> -->
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
	<title>KOPERASI</title>
</head>
<body>
	<h1>KOPERASI</h1>
	<h3>DAFTAR ANGSUR UANG</h3>
	<a href="<?=base_url()?>"><h4>HOME</h4></a>
	<hr>
	<table border="1">
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Tanggal Angsur</th>
			<th>Lama Pinjam</th>
			<th>Uang Angsur</th>
			<th>Bukti Angsur</th>			
		</tr>
		<?php $sisa=0;$totalPinjam=0;$totalAngsur=0; foreach($angsuran as $key => $bayar)
		{ $totalAngsur += $bayar->uang_angsur; $totalPinjam=$bayar->uang_pinjam ?>
		<tr>
			<td><?=($key+1)?></td>
			<td><?=$bayar->nip?></td>
			<td><?=date('l, d M Y H:i:s', strtotime($bayar->tanggal_angsur))?></td>
			<td><?=$bayar->lama_pinjam?> Bulan</td>
			<td><?=$bayar->uang_angsur?></td>
			<td><img width="25%" src="<?=base_url('bukti_angsur/'.$bayar->bukti_angsur)?>"></td>
		</tr>
		<?php } $sisa=$totalPinjam-$totalAngsur?>
	</table>
	<table border="1">
		<tr>
			<th colspan="7">Total Pinjaman</th>
			<?php if ($this->session->userdata('tipe')=='Admi') { ?>
				<td><?=$saldo['totalPinjam']?></td>
			<?php } else {?>
				<td><?=$totalPinjam?></td>
			<?php }?>
		</tr>
		<tr>
			<th colspan="7">Sisa Angsur</th>
			<td><?=$sisa?></td>
		</tr>
	</table>
</body>
</html> -->