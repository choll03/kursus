<?php
    ob_start();
    session_start();

    require('koneksi.php');

    $id = $_GET['id'];

    $query = 'SELECT * FROM pelatihan WHERE id="'. $id .'"';
    $result = mysqli_query($db, $query);
    $pelatihan = mysqli_fetch_assoc($result);

    $query_detail = 'SELECT * 
                    FROM pelatihan_user 
                    INNER JOIN user ON user.id = pelatihan_user.user_id
                    LEFT JOIN user_profile ON user.id = user_profile.user_id
                    WHERE pelatihan_id = "' . $id . '"
                    ';
    $result_detail = mysqli_query($db, $query_detail);
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
            <a href="profile.php?id=<?php echo $_SESSION['user']['id'] ?>" class="pilih">Profile</a>
            <a href="logout.php" class="pilih">Logout</a>
		</td>
		</tr>
		<hr>
	</table>
	<div >
	<table >
		<tr>
			<td id="isitable" width="100%"><hr>
			<h2>Detail Pelatihan</h2>
            <?php if(isset($_SESSION['flash_message'])){ ?>
                <p><?php echo $_SESSION['flash_message'] ?></p>
            <?php } ?>
            <table width="100%">
                <tr>
                    <td>Kode</td>
                    <td colspan="3"><?php echo $pelatihan['kode_pelatihan'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><?php echo $pelatihan['tanggal'] ?></td>
                    <td>Jam masuk</td>
                    <td><?php echo $pelatihan['jam_masuk'] ?></td>
                </tr>
                <tr>
                    <td>Pengajar</td>
                    <td><?php echo $pelatihan['pengajar'] ?></td>
                    <td>Jam selesai</td>
                    <td><?php echo $pelatihan['jam_keluar'] ?></td>
                </tr>
            </table>
            <hr>
            <h3>Anggota</h3>
            <br>
            <table width="100%" style="text-align:center;" border="1">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telpon</th>
                </tr>
                <?php 
                    $i = 1;
                    while($row = mysqli_fetch_assoc($result_detail)){ ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['tanggal_lahir'] ?></td>
                        <td><?php echo $row['jenis_kelamin'] ?></td>
                        <td><?php echo $row['alamat'] ?></td>
                        <td><?php echo $row['no_telpon'] ?></td>
                    </tr>
                <?php } ?>
            </table>
            <br><br>
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

