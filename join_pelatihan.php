<?php
ob_start();
session_start();

    require('koneksi.php');

    $pelatiha_id    = $_GET['id'];
    $user_id        = $_SESSION['user']['id'];

    $query = 'SELECT * FROM pelatihan_user WHERE user_id="'. $user_id .'" AND pelatihan_id="'. $pelatiha_id .'" ';

    $result = mysqli_query($db, $query);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['flash_message'] = "Anda sudah daftar dalam pelatihan ini";
        header('Location: jadwal_kursus.php');
    }
    else {
        $query_profile = 'SELECT * FROM user_profile WHERE user_id="'. $user_id .'"';

        $result_profile = mysqli_query($db, $query_profile);

        if(mysqli_num_rows($result_profile) > 0){
            $query_insert = 'INSERT INTO pelatihan_user VALUES("", "'. $user_id .'", "'. $pelatiha_id .'")';
            $result_insert = mysqli_query($db, $query_insert);

            if($result_insert){
                $_SESSION['flash_message'] = "Berhasil mengikuti kelas";
                header('Location: detail_pelatihan.php?id=' . $pelatiha_id);
            }
        }
        else{
            $_SESSION['flash_message'] = "Anda harus melengkapi data diri terlebih dahulu";
            header('Location: profile.php?id=' . $user_id);
        }
    }