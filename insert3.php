<?php
$con = mysql_connect("localhost","root","");
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_select_db("lat_dbase", $con);
$sql="INSERT INTO tbl_mhs (FirstName, LastName, Age) 
VALUES
('$_POST[FirstName]','$_POST[LastName]','$_POST[Age]')";
if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
 }
echo "1 record added";
mysql_close($con)
?> 