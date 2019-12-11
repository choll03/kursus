<?php
ob_start();
session_start();
    require('koneksi.php');
    $id = $_GET['id'];

    $query = 'SELECT * FROM user_profile WHERE user_id="'. $id .'"';

    $result = mysqli_query($db, $query);
    $data = mysqli_fetch_assoc($result);
?>

<html>
<head>
<title>Dasar Menjahit</title>
<link rel ="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="wrap" >
		<table id="header" >
			<tr><hr>
				<td><i><strong><blink>Selamat datang <?php echo $_SESSION['user']['nama'] ?></blink></strong><i></td>		
		</tr>
		
	</table>	
    <table>
	<tr>
		<td>
            <a href="jadwal_kursus.php" class="pilih">Jadwal pelatihan</a>
            <a href="profile.php?id=<?php echo $id ?>" class="pilih">Profile</a>
            <a href="logout.php" class="pilih">Logout</a>
		</td>
		</tr>
		<hr>
	</table>
	<div >
	<table >
		<tr>
			<td id="isitable" width="100%"><hr>
			<h2>Data diri</h2>
            <?php if(isset($_SESSION['flash_message'])){ ?>
                <p><?php echo $_SESSION['flash_message'] ?></p>
            <?php } ?>
            <form action="update_profile.php" method="post">
            <table width="100%">
                <tr>
                    <td align="right">Tanggal lahir</td>
                    <td><input type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>"></td>
                </tr>
                <tr>
                    <td align="right">jenis kelamin</td>
                    <td><input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>"></td>
                </tr>
                <tr>
                    <td align="right">Alamat</td>
                    <td><textarea name="alamat"><?php echo $data['alamat'] ?></textarea></td>
                </tr>
                <tr>
                    <td align="right">no telpon</td>
                    <td><input type="text" name="no_telpon" value="<?php echo $data['no_telpon'] ?>"></td>
                </tr>
                <tr>
                    <td align="right"></td>
                    <td><input type="submit" name="submit" value="simpan"></td>
                </tr>
            </table>
            </form>
		</td>
		<td id="isitable" valign="top">
			<div class="dropdown"><hr>
  						<h3><span><b><center><u>Video Terkait</u></center></b></span></h3>
  						<div class="dropdown-content">
    						<a href="video.php"><p><b>Mengukur Badan</b></p></a>
							<a href="video.php"><p><b>Peralatan Menjahit</b></p></a>
							<a href="video.php"><p><b>Pola Badan</b></p></a>
    						<a href="video.php"><p><b>Pola Lengan </b></p></a>
    						<a href="video.php"><p><b>Pola Rok</b></p></a>
							<a href="video.php"><p><b>Pola Celana</b></p></a>
							<a href="video.php"><p><b>Memotong</b></p></a>
							<a href="video.php"><p><b>Memasang Jarum</b></p></a>
							<a href="video.php"><p><b>Memasang Benang</b></p></a>
							<a href="video.php"><p><b>Dll</b></p></a>
  						</div>
			</div>
		
		</td>	
		</tr>
	</table>
	</div>
		
	<div id="footer" sytle="margin-top: 50px">	
	<table >
	<tr>
		<td colspan="2" id="isitable" width="955px"height="50px">&copy;&nbsp;<script>document.write(new Date().getFullYear());</script> Dasar Menjahit - Nur Khasanah &nbsp;
    	<a href="https://www.facebook.com"><img src="fb1.png" class="imgfooter2" align="right"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="http://www.youtube.com"><img src="yt1.png" class="imgfooter" align="right"></a>
				<a href="https://www.instagram.com"><img src="insta.png" class="imgfooter" align="right"></a>

		</td>
	</tr>
	</table>
	</div>
</div>
</body>
</html>
<?php unset($_SESSION['flash_message']) ?>