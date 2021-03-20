<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<!-- Style CSS untuk memperindah tampilan nya -->
<style type="text/css">
    body {
        background: #ecf0f1;
        font-family: sans-serif;
    }

    .kalkulator {
        width: 335px;
        background: #f39c12;
        margin: 100px auto;
        padding: 10px 20px 50px 20px;
        border-radius: 5px;
        box-shadow: 0px 10px 20px 0px #D1D1D1;
    }

    .angka {
        width: 300px;
        margin: 5px;
        border: none;
        font-size: 16pt;
        border-radius: 5px;
        padding: 10px;
    }

    .operator {
        font-size: 16pt;
        border: none;
        width: 215px;
        margin: 5px;
        border-radius: 5px;
        padding: 10px;
    }

    .tombol {
        background: #16a085;
        border-top: none;
        border-right: none;
        border-left: none;
        border-radius: 5px;
        padding: 10px 20px;
        color: #eee;
        font-size: 15pt;
        border-bottom: 4px solid #bdc3c7;
    }

    .brand {
        color: #eee;
        font-size: 11pt;
        float: right;
        text-decoration: none;
        margin: 12px;
    }

    .judul {
        text-align: center;
        color: #eee;
        font-weight: normal;
    }
</style>

<body>
    <?php
    if (isset($_POST['hitung'])) {
        $angk1 = $_POST['angka1'];
        $angk2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $angk1 + $angk2;
                break;
            case 'kurang':
                $hasil = $angk1 - $angk2;
                break;
            case 'kali':
                $hasil = $angk1 * $angk2;
                break;
            case 'bagi':
                $hasil = $angk1 / $angk2;
                break;
        }
    }
    ?>
    <div class="kalkulator">
        <h2 class="judul">Kalkulator</h2>
        <a class="brand" href="http://unpam.ac.id/">Universitas Pamulang</a>
        <form method="post">
            <input type="text" name="angka1" class="angka" autocomplete="off" placeholder="Masukkan Angka Pertama">
            <input type="text" name="angka2" class="angka" autocomplete="off" placeholder="Masukkan Angka Kedua">
            <select class="operator" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol">
        </form>
        <?php if (isset($_POST['hitung'])) { ?>
            <input type="text" value="<?php echo $hasil; ?>" class="angka">
        <?php } else { ?>
            <input type="text" value="0" class="bil">
        <?php } ?>
    </div>
</body>

</html>