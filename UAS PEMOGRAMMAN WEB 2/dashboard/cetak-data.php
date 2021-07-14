<?php

include('../db_connect.php');
$id = $_GET['id'];
$user = "SELECT * FROM user";
$query = "SELECT * FROM data_covid WHERE id = $id LIMIT 1";
$operator = mysqli_query($connection, $user);
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_array($operator);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemantauan Covid-19</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

    body {
        font-family: 'Roboto', sans-serif;
    }
</style>

<body>
    <section id="judul">
        <div class="row mt-5 mb-5">
            <div class="col">
                <img src="../assets/images/logo.png" class="mx-auto mb-3 d-block" alt="covid19" width="200">
                <div class="judul-cetak text-center">
                    <h2 class="mt-5 mb-3">
                        Data Pemantauan Covid-19 Wilayah <b><?= $row['wilayah'] ?></b>
                    </h2>
                    <h3 class="mb-3">Per <?= date('d F Y H:i:s') ?></h3>
                    <h4><b><?= $data['nama_lengkap'] ?> / <?= $data['username'] ?></b></h4>
                </div>
            </div>
        </div>
    </section>

    <section id="data-cetak">
        <div class="row mt-5">
            <div class="col">
                <table class="table table-striped">
                    <thead class="text-center">
                        <tr>
                            <th>Kasus Terkonfirmasi</th>
                            <th>Dalam Perawatan</th>
                            <th>Sembuh</th>
                            <th>Meninggal</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">

                        <!-- Menampilkan Data dari database covid -->
                        <?php
                        include '../db_connect.php';

                        $query = mysqli_query($connection, "SELECT * FROM data_covid");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>

                            <tr>
                                <td><?= $row['positif'] ?></td>
                                <td><?= $row['dirawat'] ?></td>
                                <td><?= $row['sembuh'] ?></td>
                                <td><?= $row['meninggal'] ?></td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script>
        window.print();
    </script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>