<?php

    ob_start();
    session_start();

    require('koneksi.php');


    if(isset($_GET['id']))
    {
        $id     = $_GET['id'];

        $query = 'DELETE FROM pelatihan WHERE id="'. $id .'"';

        $update = mysqli_query($db, $query);

        $_SESSION['flash_message'] = "Data berhasil dihapus";
        header('Location: jadwal_kursus.php');
    }

    else
    {
        header('Location: index.php');
    }