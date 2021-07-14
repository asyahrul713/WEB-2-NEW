<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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

    <!-- Judul -->
    <section id="judul">
        <div class="container">
            <div class="row text-center mt-5 mb-3">
                <div class="col">
                    <img src="../assets/images/logo.png" class="mx-auto d-block" alt="covid19" width="200">
                    <h2 class="mt-3 mb-3"><b>SITUASI COVID-19 DI INDONESIA</b></h2>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Judul -->

    <!-- Status Covid -->
    <section id="status">
        <div class="container">
            <div class="row mb-3">
                <div class="col-sm-3">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Terkonfirmasi Positif</h5>
                            <p class="card-text"><b></b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Dalam Perawatan</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Sembuh</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Meninggal</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Status Covid -->

    <!-- Judul -->
    <section id="judul">
        <div class="container">
            <div class="row text-center mt-5 mb-5">
                <div class="col">
                    <h2 class="mt-3 mb-3"><b>KASUS PER WILAYAH</b></h2>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Judul -->

    <!-- Content -->
    <section id="pemantauan">
        <div class="container">
            <div class="row">

                <!-- Menampilkan Data dari database covid -->
                <?php
                include '../db_connect.php';

                $query = mysqli_query($connection, "SELECT * FROM data_covid");
                while ($row = mysqli_fetch_array($query)) {
                ?>

                    <div class="col-md-4">
                        <div class="card mb-3 ms-2">
                            <div class="row">
                                <div class="col-md-4 text-center my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3"><b><?= $row['wilayah'] ?></b></h5>
                                        <p class="card-text m-0">Terkonfirmasi : <b><?= $row['positif'] ?></b></p>
                                        <p class="card-text m-0 text-success">Sembuh : <b><?= $row['sembuh'] ?></b></p>
                                        <p class="card-text text-danger">Meninggal : <b><?= $row['meninggal'] ?></b></p>
                                        <p class="card-text"><small class="text-muted">Terakhir update <?= date('d F Y') ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f8f9fa" fill-opacity="1" d="M0,288L30,261.3C60,235,120,181,180,170.7C240,160,300,192,360,181.3C420,171,480,117,540,101.3C600,85,660,107,720,144C780,181,840,235,900,224C960,213,1020,139,1080,96C1140,53,1200,43,1260,37.3C1320,32,1380,32,1410,32L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Content -->

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