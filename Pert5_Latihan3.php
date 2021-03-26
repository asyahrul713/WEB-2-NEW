<?php
$file = fopen("Pert5_Latihan1.php","r");
while(! feof($file))
 {
 echo fgets($file). "<br />";
 }
fclose($file);
?> 