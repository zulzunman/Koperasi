				<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
				<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-5 text-gray-800" style="margin-left: 290px; margin-top: 50px;">FORMULIR KATEGORI PRODI DAN FAKULTAS</h1>

                <!-- <div class="card mb-3" style="max-width: 540px;"> -->
				<div class="row-lg">
					<div class="col-lg-9">

							<?php
							$fak='';
							$prod='';

							if(isset($kate)) {
								$fak=$kate->fakultas;
								$prod=$kate->prodi;
							}
							?>

						<form action="" method="post" style="margin-left: 275px;">
						  <div class="mb-3">
						    <label for="fakultas" class="form-label">Nama Fakultas</label>

						    <input type="text" name="fakultas" value="<?=$fak?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						  </div>

						  <div class="mb-3">
						    <label for="prodi" class="form-label">Nama Prodi</label>

						    <input type="text" name="prodi" value="<?=$prod?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						  </div>
						  

						  <tbody>
						  	<tr>
								<td></td>
								<td></td>
								<td style="margin-top: 20px;">
									<input type="submit" value="SAVE" name="submit" class="btn btn-outline-primary mb-3" style="margin-left: 320px;">
									<a href="<?=site_url('kategori')?>"><input type="button" value="CANCEL" class="btn btn-outline-primary mb-3" style="margin-left: 20px;"></a>
								</td>
							</tr>
						  </tbody>	
						  
						</form>

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
	<hr>
	<?php
	$fak='';
	$prod='';

	if(isset($kate)) {
		$fak=$kate->fakultas;
		$prod=$kate->prodi;
	}
	?>

	<form action="" method="post">
		<table>
			<tr>
				<td>Nama Fakultas</td>
				<td><input type="text" name="fakultas" value="<?=$fak?>" id="" required></td>
			</tr>
			<tr>
				<td>Nama Prodi</td>
				<td><input type="text" name="prodi" value="<?=$prod?>" id="" required></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="SAVE" name="submit">
					<a href="<?=site_url('kategori')?>"><input type="button" value="CANCEL"></a>
				</td>
			</tr>
		</table>
	</form>
	<hr>
</body>
</html> -->