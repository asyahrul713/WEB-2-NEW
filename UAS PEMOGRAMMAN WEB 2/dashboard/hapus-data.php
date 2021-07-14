<?php

    include('../db_connect.php');

    //get id
    $id = $_GET['id'];

    $query = "DELETE FROM data_covid WHERE id = '$id'";

    if($connection->query($query)) {
        header("location: index.php");
    } else {
        echo "DATA GAGAL DIHAPUS!";
    }

?>