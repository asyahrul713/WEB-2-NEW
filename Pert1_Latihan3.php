<!-- Variabel Statik -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel Static</title>
</head>
<body>
    <?php
        function test(){
            static $a = 0;
            echo "Nilai a :";
            echo $a;
            echo "<br>";
            $a++;
        }
        test();
        test();
        test();
        test();
        test();
    ?>
</body>
</html>