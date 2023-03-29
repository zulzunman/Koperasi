<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
				
                <div class="container-fluid">

                    
                    <h1 class="h3 mb-4 text-gray-800" style="margin-left: 290px; margin-top: 50px">FORMULIR ANGGOTA</h1>

                   
				<div class="row-lg">
					<div class="col-lg-9">

							<?php
							$ni='';
							$nam='';
							$jab='';
							$tipe_fak='';
							$tipe_prod='';

							if(isset($ang)) {
								$ni=$ang->nip;
								$nam=$ang->nama;
								$jab=$ang->jabatan;
								$tipe_fak=$ang->tipe_fakultas;
								$tipe_prod=$ang->tipe_prodi;
							}
							?>

							<div style="color: red;"><?=validation_errors()?></div>


						<form action="" method="post" style="margin-left: 280px;">
						  <div class="mb-3">
						    <label for="nip" class="form-label">NIP</label>

						    <input type="number" name="nip" value="<?=$ni?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						  </div>

						  <div class="mb-3">
						    <label for="name" class="form-label">Nama </label>

						    <input type="text" name="nama" value="<?=$nam?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						  </div>

						  <div class="mb-3">
						    <label for="jabatan" class="form-label">Jabatan</label>

						    <input type="text" name="jabatan" value="<?=$jab?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						  </div>

						  <div class="mb-2">
						    <label for="tipe_fakultas" class="form-label">Fakultas</label></div>
						  <div class="input-group mb-3">
						  <select name="tipe_fakultas" class="custom-select" id="inputGroupSelect02" required>
						    <option value="">Pilih Fakultas</option>
							<?php foreach($kate as $kat) { ?>
							<option value="<?=$kat->fakultas?>" <?=set_select('tipe_fakultas',$kat->fakultas,$tipe_fak==$kat->fakultas?TRUE:FALSE)?>><?=$kat->fakultas?></option>	
							<?php } ?>
							</select>
						  <div class="input-group-append">
						    <label class="input-group-text" for="inputGroupSelect02">Options</label>
						  </div>
						</div>

							<div class="mb-2">
						    <label for="tipe_prodi" class="form-label">Prodi</label></div>
						  <div class="input-group mb-3">
						  <select name="tipe_prodi" class="custom-select" id="inputGroupSelect02" required>
						    <option value="">Pilih Prodi</option>
							<?php foreach($kate as $kat) { ?>
							<option value="<?=$kat->prodi?>" <?=set_select('tipe_prodi',$kat->prodi,$tipe_prod==$kat->prodi?TRUE:FALSE)?>><?=$kat->prodi?></option>	
							<?php } ?>

						  </select>
						  <div class="input-group-append">
						    <label class="input-group-text" for="inputGroupSelect02">Options</label>
						  </div>
						</div>
						  <tbody>
						  	<tr>
								<td></td>
								<td></td>
								<td style="margin-top: 80px;">
									<input type="submit" value="SAVE" name="submit" class="btn btn-outline-primary mb-3" style="margin-left: 320px; margin-top: 50px;">
									<a href="<?=site_url('anggota')?>"><input type="button" value="CANCEL" class="btn btn-outline-primary mb-3" style="margin-left: 20px; margin-top: 50px;"></a>
								</td>
							</tr>
						  </tbody>	
						  
						</form>

					</div>
                </div>
                

            </div> -->
            


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
	<hr>
	<?php
	$ni='';
	$nam='';
	$jab='';
	$tipe_fak='';
	$tipe_prod='';

	if(isset($ang)) {
		$ni=$ang->nip;
		$nam=$ang->nama;
		$jab=$ang->jabatan;
		$tipe_fak=$ang->tipe_fakultas;
		$tipe_prod=$ang->tipe_prodi;
	}
	?>

	<div style="color: red;"><?=validation_errors()?></div>

	<form action="" method="post">
		<table>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip" value="<?=$ni?>" id="" required></td>
			</tr>
			<tr>
				<td>Nama Anggota</td>
				<td><input type="text" name="nama" value="<?=$nam?>" id="" required></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td><input type="text" name="jabatan" value="<?=$jab?>" id="" required></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td><select name="tipe_fakultas" id="" required>
						<option value="">Pilih Fakultas</option>
							<?php foreach($kate as $kat) { ?>
							<option value="<?=$kat->fakultas?>" <?=set_select('tipe_fakultas',$kat->fakultas,$tipe_fak==$kat->fakultas?TRUE:FALSE)?>><?=$kat->fakultas?></option>	
							<?php } ?>
				</td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td><select name="tipe_prodi" id="" required>
						<option value="">Pilih Prodi</option>
							<?php foreach($kate as $kat) { ?>
							<option value="<?=$kat->prodi?>" <?=set_select('tipe_prodi',$kat->prodi,$tipe_prod==$kat->prodi?TRUE:FALSE)?>><?=$kat->prodi?></option>	
							<?php } ?>
						
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="SAVE" name="submit">
					<a href="<?=site_url('anggota')?>"><input type="button" value="CANCEL"></a>
				</td>
			</tr>
		</table>
	</form>
	<hr>
</body>
</html>  -->