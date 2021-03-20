<!-- Variabel Global -->
<?php 
    $A = 123;
    function test(){
        global $A;
        echo "Nilai A dalam fungsi = $A \n";
    }
    test();
    echo "Nilai A diluar fungsi = $A \n";
?>