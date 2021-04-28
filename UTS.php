<HTML>
<HEAD>
<TITLE> UTS PEMROGRAMAN WEB 2 </TITLE>
</HEAD>
<BODY>
<CENTER>
<font size="4px"> 
<?php
function basic($argument)
 {
 echo $argument;
 }
 basic('Data Pemantauan Covid19 wilayah DKI Jakarta'); // outputs 'Data Pemantauan Covid19 wilayah DKI Jakarta'
echo "<br>";
echo date('d-F-Y');
echo " Pukul ";
echo date('h:i:s A');
echo "<br> Ahmad Syahrul/171011400793";
echo "<br>";
echo "<table width = 500 border =5>
<tr bgcolor=00fffff align=center>
<td>Wilayah</td>
<td>Positif</td>
<td>Dirawat</td>
<td>Sembuh</td>
<td>Meninggal</td>
</tr>
<tr bgcolor=d3d3d3 align=center>
<td>DKI Jakarta</td>
<td>46.874</td>
<td>1.801</td>
<td>43.759</td>
<td>1.200</td>
</tr>
</table>";
?>
</FONT>
</BODY>
</HTML> 