<?php
    session_start();
    require('koneksi.php');

    if(isset($_POST['submit'])){

        $nama               = $_POST['nama'];
        $username           = $_POST['username'];
        $password           = $_POST['password'];
        $password_confirm   = $_POST['password_confirm'];

        if($password != $password_confirm){
            $_SESSION['error'] = "Konfirmasi password tidak cocok";
            header('Location: registrasi.php');
        }
        else {
            $query = 'INSERT INTO user VALUES("", "'. $username .'", "'. $password .'", "'. $nama .'")';

            $result = mysqli_query($db, $query);

            if($result){
                header('Location: login.php');
            }
        }
        
    }