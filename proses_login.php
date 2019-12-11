<?php 
	session_start();
	ob_start();
	require ('koneksi.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = 'SELECT * FROM user WHERE '

 ?>