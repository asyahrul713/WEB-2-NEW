<?php
    //Ini adalah komentar dalam satu baris

    /*Kalau yang ini, Komentar dalam banyak baris,
    yang baru akan selesai setelah diakhiri
    dengan*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Penyisipan PHP pada HTML</title>
</head>
<body>
    Kapal Asing. Silahkan identifikasi diri anda! <br>
    <?php
        // Berikut ini adalah inisiasi beberapa variabel
        $namad = "Jean";
        $namat = "Luc";
        $namab = "Piccard";
        $nilai1 = 25;
        $nilai2 = 50;
        $hasil = $nilai1 * $nilai2;
        $a = 2;
        $b = 3;
        $hsl = pow($a, $b);
    ?>
    <br><b>Ini Adalah kapal Federasi Planet USS Enterprise.</b><br>
    <?php
        echo "Saya <b>$namab, $namad $namat $namab,</b> Kapten Kapal. <br>";
        echo "$nilai1 x $nilai2 = $hasil";
        echo "$a ^ $b = $hsl";
    ?>
</body>
</html>