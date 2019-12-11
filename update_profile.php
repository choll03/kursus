<?php
    ob_start();
    session_start();

    require('koneksi.php');

    if(isset($_POST['submit'])){
        $user_id         = $_SESSION['user']['id'];
        $tanggal_lahir   = $_POST['tanggal_lahir'];
        $jenis_kelamin   = $_POST['jenis_kelamin'];
        $alamat          = $_POST['alamat'];
        $no_telpon       = $_POST['no_telpon'];

        $find = mysqli_query($db, 'SELECT * FROM user_profile WHERE user_id="'. $user_id .'"');

        if(mysqli_num_rows($find) > 0){
            $query = 'UPDATE user_profile SET 
                        tanggal_lahir="'. $tanggal_lahir .'", 
                        jenis_kelamin="'. $jenis_kelamin .'", 
                        alamat="'. $alamat .'",
                        no_telpom="'. $no_telpon .'"
                        WHERE user_id="'. $user_id .'"
                        ';
        }
        else {
            $query = 'INSERT INTO user_profile VALUES(
                        "",
                        "'. $user_id .'",
                        "'. $tanggal_lahir .'", 
                        "'. $jenis_kelamin .'", 
                        "'. $alamat .'",
                        "'. $no_telpon .'"
                        )
                        ';
        }

        $result = mysqli_query($db, $query);

        if($result){
            $_SESSION['flash_message'] = "Data profile berhasil di perbarui";
            header('Location: jadwal_kursus.php');
        }
    }