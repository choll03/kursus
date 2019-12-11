<?php 
	session_start();
	ob_start();

	if(isset($_SESSION['login'])) {
		header("Location: index.php");
	} else {
		session_destroy();
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel ="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="proses_registrasi.php" method="post">
	<div>
		<label>Nama</label>
		<input type="text" name="nama"></td>
	</div>
	<div>
		<label>Username</label>
		<input type="text" name="username"></td>
	</div>
	<div>
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div>
		<label>Konfirmasi password</label>
		<input type="password" name="password_confirm">
	</div>

	<input type="submit" value="registrasi" name="submit">
</form>
	<p>Sudah memliki akun? silahkan <a href="login.php">Login disini</a></p>

	<?php if(isset($_SESSION['error'])){ ?>
        <p><?php echo $_SESSION['error'] ?></p>
    <?php } ?>
</body>
</html>