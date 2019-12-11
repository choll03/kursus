<html>
<head>
<title>Dasar Menjahit - Contact</title>
<link rel ="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="wrap">
	
		<table id="header">
			<tr><hr>
				<td><i><strong><blink>Pengertian Menjahit</blink></strong><i></td>	
				
		</tr>
		
	</table>
	
	<table>
	<tr>
		<td>
			<?php include('header.php') ?>
		</td>
		</tr>
		<hr>
	</table>	
	<div >
	<table>
		<tr>
			<td id="isitablediri"><hr>
		<img src="images/nur.jpg" id="img"><br><br>
		<p>Assalamu alaikum Wr.Wb</p>
		<p>Perkenalkan nama saya Nur Khasanah, saya berasal dari kota Purwokerto, Saya lahir di Banyumas, Tahun 1998, dan saat ini saya berusia 20 tahun.
		Saya kuliah di Universitas Pamulang jurusan Teknik Informatika semester 5, dan saya juga bekerja di salah satu perusahaan pembiayaan di Jakarta.
		Mungkin ada yang bertanya , kenapa membahas Menjahit bukan yang lain ? dan jawaban saya karena saya juga suka Menjahit.
		Sebelum kuliah di Universitas Pamulang, saya adalah siswi SMK Negeri 3 Purwokerto jurusan Tata Busana.
		selain menjahit, saya juga mempunyai hobby seperti baca komik, camping. Setiap orang pasti punya cita-cita, dan cita-cita saya adalah menjadi seorang guru dan wiraswasta, semoga cita-cita saya bisa tercapai amin....</p>
		<p>Saya mempunyai beberapa akun media sosial,teman-teman bisa melihat akun berikut : facebook nhuur.naxgokil , instagram :khasna12
		
		<p>Dan saya mohon masukan dari teman-teman, hal ini sebagai motivasi dari teman-teman untuk saya sendiri agar lebih semangat belajar.
		Terimakasih atas waktunya.</p>
		Wassalamu alaikum Wr.Wb.

			<hr></hr>
			
		<form name="fform2">
		<h3>Kesan dan Pesan</h3>
		<pre>

		Nama 		: <input type="text" size="28" name="nama"><br>
		Kesan & Pesan	: <textarea name="ket" rows="3" cols="30"></textarea>
		
		<br>
		<input type="button" value="kirim" onclick="tekan()">	<input type="reset" value="ulang">
		</pre><br><hr>


		<h3>Kesan dan Pesan</h3>
		<pre>

		Nama 		: <input type="text" size="28" name="onama"><br>
		Kesan & Pesan	: <textarea name="oket" rows="3" cols="30"></textarea>
		</pre>
		<br>
		</form>
		
		</tr>
	</table>
	</div>
		
	<div id="footer">	
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
</div><script>
function tekan()
	{
		var namastr = (document.fform2.nama.value);
		var ketstr = (document.fform2.ket.value);
		document.fform2.onama.value=namastr;
		document.fform2.oket.value=ketstr;
	}
</script>
</body>
</html>
