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
<form action="proses_login.php" method="post">
	<div>
		<label>Username</label>
		<input type="text" name="username"></td>
	</div>
	<div>
		<label>Password</label>
		<input type="password" name="password">
	</div>

	<input type="submit" value="login">
</form>
	<p>Tidak memliki akun? silahkan <a href="registrasi.php">Registrasi</a></p>

	<?php if(isset($_SESSION['error'])){ ?>
        <p><?php echo $_SESSION['error'] ?></p>
    <?php } ?>
</body>
</html>