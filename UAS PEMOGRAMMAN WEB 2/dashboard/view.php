<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Covid-19</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

    body {
        font-family: 'Roboto', sans-serif;
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php"><b>Data Pemantauan Covid-19</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Tambah Data Covid</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view.php">Lihat Data Covid</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <section id="view-data">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <table class="table table-striped">
                        <thead class="text-center">
                            <tr>
                                <th>#</th>
                                <th>Wilayah</th>
                                <th>Kasis Terkonfirmasi</th>
                                <th>Dalam Perawatan</th>
                                <th>Sembuh</th>
                                <th>Meninggal</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">

                            <!-- Menampilkan Data dari database covid -->
                            <?php
                            include '../db_connect.php';

                            $no = 1;
                            $query = mysqli_query($connection, "SELECT * FROM data_covid");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['wilayah'] ?></td>
                                    <td><?= $row['positif'] ?></td>
                                    <td><?= $row['dirawat'] ?></td>
                                    <td><?= $row['sembuh'] ?></td>
                                    <td><?= $row['meninggal'] ?></td>
                                    <td class="text-center">
                                        <a href="edit-data.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="hapus-data.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                                        <a href="cetak-data.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-warning">Cetak</a>
                                    </td>
                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f8f9fa" fill-opacity="1" d="M0,288L30,261.3C60,235,120,181,180,170.7C240,160,300,192,360,181.3C420,171,480,117,540,101.3C600,85,660,107,720,144C780,181,840,235,900,224C960,213,1020,139,1080,96C1140,53,1200,43,1260,37.3C1320,32,1380,32,1410,32L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        </svg>
    </section>

    <!-- Footer -->
    <section id="footer">
        <footer class="text-center bg-light pb-5">
            Created with love by <b><a href="https://www.instagram.com/alhusadif/" style="color: black; text-decoration: none;">Kelompok 1</a></b>
        </footer>
    </section>
    <!-- Akhir Footer -->

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>