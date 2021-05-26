<?php
$con = mysql_connect("localhost","root","");
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_select_db("lat_dbase",$con);
mysql_query("DELETE FROM tbl_mhs WHERE LastName='Prabowo'");
?> 