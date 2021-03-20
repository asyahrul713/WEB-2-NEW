<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan IF Statement</title>
</head>
<body>
    <form>
        Besar Pembelian :
        <input type="text" name="total_beli"><br>
        <input type="submit" value="Tentukan Diskon">
    </form>
    <?php 
        if (isset($total_beli)) {
            $total_beli = intval($total_beli);
            $discon = 0;
            if ($total_beli >= 200000){
                $discon = 0.1;
            } elseif ($total_beli >= 100000) {
                $discon = 0.05;
            } else {
                $discon = 0.01;
            }
            $discon = $discon * intval($total_beli);
            printf("Diskon = %s \n", $discon);
            printf("Pembayaran = %s \n", $total_beli - $discon);
        }
    ?>
</body>
</html>