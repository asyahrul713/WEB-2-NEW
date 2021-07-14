<?php
    // Mengaktifkan Session PHP
    session_start();

    // Menghubungkan ke koneksi database
    include 'db_connect.php';

    // Menangkap data yang dikirim dari Form
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    // Menyeleksi data dengan username dan password yang sesuai
    $data = mysqli_query($connection, "SELECT * FROM user WHERE username='$username' AND password='$password'");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    if($cek>0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";

        header("location:dashboard/index.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
?>