                <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800" style="text-align: center; margin-top: 50px;"> FORMULIR PENYIMPANAN UANG</h1>


                    <?=$this->session->flashdata('msg')?>
                    <div style="color: red;"><?=validation_errors()?></div> <!--Pesan error yang diciptakan oleh library itu sendiri -->

                    <div class="row" style="margin-left: 200px;">
                    	<div class="col-lg-8">
                    		<?= form_open_multipart('simpan/add'); ?>
		                    		<div class="form-group row">
									    <label for="nip" class="col-sm-2 col-form-label">NIP </label>
									    <div class="col-sm-10">
										  <?=$this->session->userdata('nip')?>
									      <input type="hidden" class="form-control" id="nip" name="nip" value="<?=$this->session->userdata('nip')?>">
									    </div>
									</div>

									<div class="form-group row">
									    <label for="tanggal_simpan" class="col-sm-2 col-form-label">Tanggal Simpan</label>
									    <div class="col-sm-10">
									      <input type="date" class="form-control" id="tanggal_simpan" name="tanggal_simpan">
									    </div>
									</div>

									<div class="form-group row">
									    <label for="uang_simpan" class="col-sm-2 col-form-label">Uang Simpan</label>
									    <div class="col-sm-10">
									      <input type="number" class="form-control" id="uang_simpan" name="uang_simpan">
									    </div>
									</div>

									<div class="form-group row">
									    <div class="col-sm-2">Bukti Simpan </div>
									    <div class="col-sm-10">
									    		<div class="custom-file">
												    <input type="file" class="custom-file-input" id="bukti_simpan" aria-describedby="inputGroupFileAddon01" name="bukti_simpan">
												    <label class="custom-file-label" for="bukti_simpan">Pilih File</label>		                	
												</div>
										</div>
									</div>

									<tbody>
									  	<tr>
											<td></td>
											<td>
												<input type="submit" value="SIMPAN" name="submit" class="btn btn-outline-primary mb-3" style="margin-left: 320px;">
												<a href="<?=site_url('simpan')?>"><input type="button" value="CANCEL" class="btn btn-outline-primary mb-3" style="margin-left: 20px;"></a>
											</td>
										</tr>
									</tbody>	
		                
                </form>

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
	<h3>FORMULIR PENYIMPANAN UANG</h3>
	<hr>
	<?=$this->session->flashdata('msg')?>
	<div style="color: red;"><?=$error?></div>

	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip" required/></td>
			</tr>
			<tr>
				<td>Tanggal Simpan</td>
				<td><input type="date" name="tanggal_simpan" required/></td>
			</tr>
			<tr>
				<td>Uang Simpan</td>
				<td><input type="number" name="uang_simpan" required/></td>
			</tr>
			<tr>
				<td>Bukti Simpan</td>
				<td><input type="file" name="bukti_simpan" size="20" required/></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="SIMPAN">
					<a href="<?=site_url('simpan')?>"><input type="button" value="CANCEL"></a>
				</td>
			</tr>
		</table>
	</form>
	<hr>
	</body>
</html> -->