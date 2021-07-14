<?php

    //include koneksi database
    include('../db_connect.php');

    // menangkap data yang di kirim dari form
    $id = $_POST['id'];
    $wilayah = $_POST['wilayah'];
    $positif = $_POST['positif'];
    $rawat = $_POST['dirawat'];
    $sembuh = $_POST['sembuh'];
    $meninggal = $_POST['meninggal'];

    //query update data ke dalam database berdasarkan ID
    $query = "UPDATE data_covid SET wilayah = '$wilayah', positif = '$positif', dirawat = '$rawat', sembuh = '$sembuh', meninggal = '$meninggal'  WHERE id = '$id'";

    //kondisi pengecekan apakah data berhasil diupdate atau tidak
    if($connection->query($query)) {
        //redirect ke halaman index.php 
        header("location: index.php");
    } else {
        //pesan error gagal update data
        echo "Data Gagal Diupate!";
    }
?>