<?php

    ob_start();
    session_start();

    require('koneksi.php');


    if(isset($_POST['simpan']))
    {
        $pengajar       = $_POST['pengajar'];
        $tanggal        = $_POST['tanggal'];
        $jam_masuk      = $_POST['jam_masuk'];
        $jam_keluar     = $_POST['jam_keluar'];
        $id     = $_POST['id'];


        $query = 'UPDATE pelatihan SET tanggal="'. $tanggal .'", jam_masuk="'. $jam_masuk .'", jam_keluar="'. $jam_keluar .'", pengajar="'. $pengajar .'" WHERE id="'. $id .'"';

        $update = mysqli_query($db, $query);

        if($update){
            $_SESSION['flash_message'] = "Data berhasil diedit";
            header('Location: jadwal_kursus.php');
        }
    }

    else
    {
        header('Location: index.php');
    }