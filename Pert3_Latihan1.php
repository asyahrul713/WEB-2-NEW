<?php 
    $ball = 'purple';

    // Mencoba mengubah ke 'Yellow', 'Blue', 'Green', 'Purple' Atau Warna lain.
    if ($ball == 'red') {
        $redbox = $ball;
    } elseif ($ball == 'yellow') {
        $yellowbox = $ball;
    } elseif ($ball == 'blue') {
        $bluebox = $ball;
    } elseif ($ball == 'green') {
        $greenbox = $ball;
    } elseif ($ball = 'purple') {
        $purplebox = $ball;
    } else {
        $colorlessball = $ball;
    }

    // Menampilkan Output
    echo "Redbox : $redbox \n";
    echo "Yellowbox : $yellowbox \n";
    echo "Bluebox : $bluebox \n";
    echo "Greenbox : $greenbox \n";
    echo "Purplebox : $purplebox \n";
    echo "Colorlessbox : $colorlessbox \n";
?>