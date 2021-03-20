<!-- Variabel Lokal -->
<?php
    $A = 123;
    function test(){
        $A = "Test";
        echo "Nilai A dalam fungsi = $A \n";
    }
    test();
    echo "Nilai A diluar fungsi = $A \n"
?>