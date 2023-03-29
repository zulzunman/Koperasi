                <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800" style="margin-left: 437px; margin-top: 50px;">UBAH FOTO</h1>


                    <?=$this->session->flashdata('msg')?>
                    <div style="color: red;"><?=validation_errors()?></div> <!-- Pesan error yang diciptakan oleh library itu sendiri -->

                    <div class="row" style="margin-left: 200px;">
                    	<div class="col-lg-8">

		                    		<?= form_open_multipart('auth/changephoto'); ?>
		                    		<div class="form-group row">
									    <label for="usertype" class="col-sm-2 col-form-label">Tipe </label>
									    <div class="col-sm-10">
									      <input type="text" class="form-control" id="username" name="username" value="<?=$this->session->userdata('tipe')?>" readonly>
									    </div>
									</div>

									<div class="form-group row">
									    <label for="fullname" class="col-sm-2 col-form-label">NIP</label>
									    <div class="col-sm-10">
									      <input type="text" class="form-control" id="username" name="nip" value="<?=$this->session->userdata('nip')?>" readonly>
									    </div>
									</div>

									<div class="form-group row">
									    <label for="fullname" class="col-sm-2 col-form-label">Username</label>
									    <div class="col-sm-10">
									      <input type="text" class="form-control" id="username" name="username" value="<?=$this->session->userdata('username')?>" readonly>
									    </div>
									</div>

									<div class="form-group row">
									    <div class="col-sm-2">Foto </div>
									    <div class="col-sm-10">
									    	<div class="row">
										    	<div class="col-sm-3">
										    		<img src="<?=base_url('uploads/user/'.$this->session->userdata('photo'))?>" class="img-thumbnail">
										    	</div>
									    	<div class="col-sm-9">
									    		<div class="custom-file">
												    <input type="file" class="custom-file-input" id="image" aria-describedby="inputGroupFileAddon01" name="photo">
												    <label class="custom-file-label" for="image">Pilih File</label>
												</div>
											</div>
											</div>
									    </div>
									    </div>
									</div>
		                </div>



		                <div class="form-group row" >
		                	<div class="col-sm-10">
		                		
		                		<input style="margin-left: 300px;" type="submit" name="upload" value="Upload Photo" class="btn btn-outline-primary mb-3"></input>
		                		<a href="<?=base_url()?>"><input type="button" value="CANCEL" class="btn btn-outline-primary mb-3" style="margin-left: 20px;"></a>
		                		
		                		
		                	</div>
		                	
		                </div>
                </form>

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
<body class="font">
	<div>
	<h1>KOPERASI</h1>
	<h3>CHANGE PHOTO</h3>
	<hr>
	<?=$this->session->flashdata('msg')?>
	<div style="color: red;"><?=$error?></div> Pesan error yang diciptakan oleh library itu sendiri 
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Current Photo</td>
				<td><img src="<?=base_url('uploads/user/'.$this->session->userdata('photo'))?>" width="128" height="128" /></td>
			</tr>
			<tr>
				<td>New Photo</td>
				<td>
					<input type="file" name="photo" required>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="upload" value="UPLOAD PHOTO">
				</td>
			</tr>
		</table>
	</form>
	</div>
	<hr>
	<a href="<?=base_url()?>"><h4>Back to Home</h4></a>
</body>
</html> -->