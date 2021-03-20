<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Penggunaan Switch Case</title>
</head>
<body>
    Hari Ini :
    <?php 
        $nama_hari = date("1");
        switch ($nama_hari) {
            case "Sunday" :
                print ("Minggu <br>");
                print "Waktu untuk istirahat";
                break;
            case "Monday" :
                print ("Senin <br>");
                print "Meeting awal minggu jam 08.00";
                break;
            case "Tuesday" :
                print ("Selasa <br>");
                print "Pembukaan Workshop Diklat";
                break;
            case "Wednesday" :
                print ("Rabu <br>");
                print "Seminar Launching Window Vista di JHCC";
                break;
            case "Thurday" :
                print ("Kamis <br>");
                print "Pertemuan dengan Mahasiswa";
                break;
            case "Friday" :
                print ("Jumat <br>");
                print "Jogging Bersama";
                break;
            default;
                print ("Sabtu <br>");
                print "Survei harga ke Dusit, Mangga dua";
                break;
        }
    ?>
</body>
</html>