<?php
$cadena=25;
$cadena2="Funcion var_dump";

echo "<h2>Primer ejemplo: </h2><br>";
$result=var_dump($cadena);
echo $result;

echo "<h2>Segundo ejemplo: </h2><br>";
$result3=var_dump($cadena2);
echo $result3;

echo "<h2>Tercer ejemplo: </h2><br>";
$array=array($cadena2,$cadena);
$result2=var_dump($array);



?>