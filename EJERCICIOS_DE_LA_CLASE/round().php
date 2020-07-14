<?php
$n1=342.64;
$n2=2.5643;
$n3=5.3567;


echo "<h2>Primer ejemplo: Redondeo de un numero decimal a entero</h2><br>";
$result1=round($n1);
echo $n1 ."=".$result1;

echo "<h2>Segundo ejemplo: Redondeo de dos decimales</h2><br>";
$result2=round($n2*100)/100;
echo $n2 ."=".$result2;

echo "<h2>Tercer ejemplo: Redondeo de tres decimales</h2><br>";
$result3=round($n3,2);
echo $n3 ."=".$result3;

?>