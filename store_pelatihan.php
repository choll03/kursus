<?php

    ob_start();
    session_start();

    require('koneksi.php');


    if(isset($_POST['simpan']))
    {
        $kode_pelatihan = $_POST['kode_pelatihan'];
        $pengajar       = $_POST['pengajar'];
        $tanggal        = $_POST['tanggal'];
        $jam_masuk      = $_POST['jam_masuk'];
        $jam_keluar     = $_POST['jam_keluar'];

        $last_pelatihan = mysqli_query($db, 'SELECT * FROM pelatihan ORDER BY id DESC LIMIT 1');

        $last_data = mysqli_fetch_object($last_pelatihan);

        $sub = substr($last_data->kode_pelatihan, 2);
        $new_kode = "PL" . str_pad($sub+1, 5, 0, STR_PAD_LEFT);


        $query = 'INSERT INTO pelatihan VALUES("", "'. $new_kode .'", "'. $tanggal .'", "'. $jam_masuk .'", "'. $jam_keluar .'", "'.$pengajar.'")';

        $insert = mysqli_query($db, $query);

        if($insert){
            $_SESSION['flash_message'] = "Data berhasil dibuat";
            header('Location: jadwal_kursus.php');
        }
    }

    else
    {
        header('Location: index.php');
    }