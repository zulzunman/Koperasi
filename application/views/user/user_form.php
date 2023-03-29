				<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
				<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-5 text-gray-800" style="margin-left: 290px; margin-top: 50px;">FORMULIR PENGGUNA</h1>

                   
				<div class="row-lg">
					<div class="col-lg-9">

						<?php
						$user='';
						// $pass='';
						$ni='';
						$tip='';



						if(isset($use)) {
							$user=$use->username;
							// $pass=$use->password;
							$ni=$use->nip;
							$tip=$use->tipe;
						}
						?>


						<form action="" method="post" style="margin-left: 280px;">
						  <div class="mb-3">
						    <label for="username" class="form-label">Username</label>

						    <input type="text" name="username" value="<?=$user?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						  </div>


						  <!-- <div class="mb-3">
						    <label for="password" class="form-label">Password</label>

						    <input type="password" name="password" value="<?=$pass?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						  </div> -->

						  <div class="mb-3">
						    <label for="nip" class="form-label">NIP</label>

						    <input type="number" name="nip" value="<?=$ni?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						  </div>


						  <div class="mb-2">
						    <label for="tipepengguna" class="form-label">Tipe Pengguna</label>
						  </div>
						  <div>
						  	<div class="mb-2">
						    <input type="radio" name="tipe" value="Admin" <?=$tip=='Admin'?'checked':''?> id="" required> Admin
						    </div>

						    <div style="margin-bottom: 20px;">
							<input type="radio" name="tipe" value="Anggota" <?=$tip=='Anggota'?'checked':''?> id="" required> Anggota
							</div>
						  </div>
						  <tbody>
						  	<tr>
								<td></td>
								<td>
									<input type="submit" value="SAVE" name="submit" class="btn btn-outline-primary mb-3" style="margin-left: 320px;">
									<a href="<?=site_url('user')?>"><input type="button" value="CANCEL" class="btn btn-outline-primary mb-3" style="margin-left: 20px;"></a>
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
	<h1>Data Pengguna</h1>
	<h3>Daftar Pengguna</h3>
	<hr>
	<?php
	$user='';
	$pass='';
	$ni='';
	$tip='';



	if(isset($use)) {
		$user=$use->username;
		$pass=$use->password;
		$ni=$use->nip;
		$tip=$use->tipe;
	}
	?>

	<form action="" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?=$user?>" id="" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?=$pass?>" id="" required></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip" value="<?=$ni?>" id="" required></td>
			</tr>
			<tr>
				<td>Tipe Pengguna</td>
				<td>
					<input type="radio" name="tipe" value="Dosen" <?=$tip=='Dosen'?'checked':''?> id="" required>Dosen
					<input type="radio" name="tipe" value="Staff" <?=$tip=='Staff'?'checked':''?> id="" required>Staff 
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="SAVE" name="submit">
					<a href="<?=site_url('user')?>"><input type="button" value="CANCEL"></a>
				</td>
			</tr>
		</table>
	</form>
	<hr>
</body>
</html> -->