<?php
$cadena="cosmos: posibles mundos";
$cadena2="nat geo";

echo "<h2>Primer ejemplo: </h2><br>";
$result=ucwords($cadena);
echo $result;

echo "<h2>Segundo ejemplo: </h2><br>";
$result2=ucwords("neil tyson");
echo $result2;


echo "<h2>Tercer ejemplo: </h2><br>";
$result3=ucwords($cadena2);
echo $result3;


?>