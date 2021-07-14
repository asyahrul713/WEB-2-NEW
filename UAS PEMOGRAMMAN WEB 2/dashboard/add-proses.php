<?php 
    // koneksi database
    include '../db_connect.php';

    // menangkap data yang di kirim dari form
    $wilayah = $_POST['wilayah'];
    $positif = $_POST['positif'];
    $rawat = $_POST['dirawat'];
    $sembuh = $_POST['sembuh'];
    $meninggal = $_POST['meninggal'];

    // menginput data ke database
    $query = "INSERT INTO data_covid (wilayah, positif, dirawat, sembuh, meninggal) VALUES ('$wilayah','$positif','$rawat','$sembuh','$meninggal')";

    //kondisi pengecekan apakah data berhasil dimasukkan atau tidak
    if ($connection->query($query)) {

        //redirect ke halaman index.php 
        header("location: index.php");
    } else {

        //pesan error gagal insert data
        echo "Data Gagal Disimpan!";
    }
?>