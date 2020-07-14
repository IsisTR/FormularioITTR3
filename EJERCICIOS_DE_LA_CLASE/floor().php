<?php
$n1=4.7;
$n2=5.366;
$n3=-6.99;

echo "<h2>Primer ejemplo: Redondeo de un numero decimal hacia abajo</h2><br>";
$result1=floor($n1);
echo $n1 ."=".$result1;

echo "<h2>Segundo ejemplo: Redondeo de dos decimales hacia abajo</h2><br>";
$result2=floor($n2*100)/100;
echo $n2 ."=".$result2 . "<br>";

echo "<h2>Tercer ejemplo: Redondeo de un numero decimal negativo hacia abajo</h2><br>";
$result3=round($n3);
echo $n3 ."=".$result3;





?>