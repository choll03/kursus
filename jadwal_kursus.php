<?php
    session_start();
    
    if(!$_SESSION['user']){
        header('Location: login.php');
    }

    require('koneksi.php');

    $query = 'SELECT pelatihan.*, ( SELECT COUNT(id) FROM pelatihan_user WHERE pelatihan_user.pelatihan_id = pelatihan.id ) AS jumlah FROM pelatihan';
    $result = mysqli_query($db, $query);
    $id = $_SESSION['user']['id'];
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
			<h2>Jadwal Pelatihan</h2>
            <?php if(isset($_SESSION['flash_message'])){ ?>
                <p><?php echo $_SESSION['flash_message'] ?></p>
            <?php } ?>
            <table width="100%" style="text-align: center" border="1">
                <tr>
                    <th>Kode pelatihan</th>
                    <th>Tanggal</th>
                    <th>Jam mulai</th>
                    <th>Jam selesai</th>
                    <th>Jumlah</th>
                    <th>Pengajar</th>
                    <th>Action</th>
                </tr>
                <?php while($row = mysqli_fetch_object($result)){ ?>
                    <tr>
                        <td><?php echo $row->kode_pelatihan ?></td>
                        <td><?php echo date_format(date_create($row->tanggal), "d/m/Y") ?></td>
                        <td><?php echo $row->jam_masuk ?></td>
                        <td><?php echo $row->jam_keluar ?></td>
                        <td><?php echo $row->jumlah ?></td>
                        <td><?php echo $row->pengajar ?></td>
                        <td>
                            <a href="join_pelatihan.php?id=<?php echo $row->id ?>">Join</a>
                            <a href="detail_pelatihan.php?id=<?php echo $row->id ?>">Detail</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
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

