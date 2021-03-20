<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan For</title>
</head>
<body>
<h2>Tabel Perkalian</h2>
=========================
<br>
    <?php
        $i = 12;
        for ($j = 15; $j <= 45; $j = $j+2){
            $k = $i * $j;
            echo $i."x".$j."=".$k."<br>";
        } 
    ?>
</body>
</html>