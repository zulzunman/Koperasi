<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KOPERASI</title>
</head>
<body>
	<h1>Data User</h1>
	<h3>Daftar User</h3>
	<hr>
	<?php
	$name='';
	$pass='';
    $nip='';
	$jab='';

	if(isset($user)) {
		$name=$user->username;
		$pass=$user->password;
        $nip=$user->nip;
		$jab=$user->tipe;
	}
	?>

	<form action="" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?=$name?>" id="" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?=$pass?>" id="" required></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip" value="<?=$nip?>" id="" required></td>
			</tr>
			<tr>
				<td>Tipe</td>
				<td>
					<input type="radio" name="tipe" value="Admin" <?=$jab=='Admin'?'checked':''?> id="" required>User
					<input type="radio" name="tipe" value="User" <?=$jab=='User'?'checked':''?> id="" required>Admin 
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
</html>