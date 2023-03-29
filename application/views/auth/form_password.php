<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
				<!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-5 text-gray-800" style="margin-left: 290px; margin-top: 50px;">UBAH PASSWORD</h1>

                <?=$this->session->flashdata('msg')?> <!-- Menampilkan pesan sukses atau pesan gagal -->
				<div style="color: red;"><?=validation_errors()?></div>

                <!-- <div class="card mb-3" style="max-width: 540px;"> -->
				<div class="row-lg">
					<div class="col-lg-9">

						<form action="" method="post" style="margin-left: 275px;">
						  <div class="mb-3">
						    <label for="oldpass" class="form-label">Password Lama</label>

						    <input type="password" name="oldpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						  </div>

						  <div class="form-group" style="margin-bottom: 50px;">
						    <label for="newpass">Password Baru</label>
						    <input type="password" name="newpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						  </div>

						  <tbody>
						  	<tr>
								<td></td>
								<td></td>
								<td style="margin-bottom: 70px;">
									<input type="submit" value="CHANGE PASSWORD" name="change" class="btn btn-outline-primary mb-3" style="margin-left: 203px;">
									<a href="<?=base_url()?>"><input type="button" value="CANCEL" class="btn btn-outline-primary mb-3" style="margin-left: 20px;"></a>
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
<html>
<head>
	<meta charset="utf-8">
	<title>KOPERASI</title>
</head>
<body>
	<h1>KOPERASI</h1>
	<h3>CHANGE PASSWORD</h3>
	<hr>
	<?=$this->session->flashdata('msg')?>
	<div style="color: red;"><?=validation_errors()?></div>
	<form action="" method="post">
		<table>
		    <tr>
			    <td>Old Password</td>
				<td><input type="password" name="oldpassword" required></td>
			</tr>
			<tr>
				<td>New Password</td>
				<td><input type="password" name="newpassword" required></td>
			</tr>
				<td></td>
				<td>
					<input type="submit" value="CHANGE PASSWORD" name="change">
				</td>
			</tr>
		</table>
	</form>
	<hr>
	<a href="<?=base_url()?>"><h4>Back to Home</h4></a>
</body>
</html> -->