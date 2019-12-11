<?php 

$server   = "localhost";
$user     = "root";
$password = "";
$nama_db  = "kursus";

$db = mysqli_connect($server,$user,$password,$nama_db);
if(!$db){
	die("gagal terhubung dengan database : ". mysqli_connect_error());
} else {
	// echo "koneksi berhasil";
}



 ?>