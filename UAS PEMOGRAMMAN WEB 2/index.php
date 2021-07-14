<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

    body {
        font-family: 'Roboto', sans-serif;
        background-color: #dfe6e9;
    }
</style>

<!-- Cek Pesan Notifikasi -->
<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo "Login gagal! username dan password salah!";
    } else if ($_GET['pesan'] == "logout") {
        echo "Anda telah berhasil logout";
    } else if ($_GET['pesan'] == "belum_login") {
        echo "Anda harus login untuk mengakses halaman admin";
    }
}
?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-sm my-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                                <img src="assets/images/logo.png" class="mx-auto d-block" alt="covid19" width="100">
                                <h2 class="mt-3 mb-3 text-center">Data Pemantauan Covid-19</h2>
                                <form method="POST" action="login.php">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" id="username" class="form-control" name="username" placeholder="Masukkan Username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Kata Sandi</label>
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Masukkan Password">
                                    </div>
                                    <button type="submit" class="form-control btn btn-primary mb-3">Masuk</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>