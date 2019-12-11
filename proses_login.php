<?php 
	session_start();
	ob_start();
	require ('koneksi.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = 'SELECT * FROM user WHERE username="'. $username .'" AND password="'. $password .'" LIMIT 1';

	$result = mysqli_query($db, $query);
	if(mysqli_num_rows($result) > 0){
		
		$row = mysqli_fetch_assoc($result);
		$_SESSION['user'] = array(
			'id'		=> $row['id'],
			'nama'		=> $row['nama'],
			'username'	=> $row['username']
		);

		header('Location: jadwal_kursus.php');
	}
	else {
		$_SESSION['error'] = 'Username dan password tidak cocok';
		header('Location: login.php');
	}

 ?>