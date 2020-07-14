<?php
$cadena="Maria, Carlos, Lucas, Matias";
$cadena2="Cosmos: mundos posibles";

echo "<h2>Primer ejemplo: </h2>";
$result=explode(",", $cadena);
echo var_dump($result);

echo "<h2>Segundo ejemplo: </h2>";
$result2=explode(":", $cadena2);
echo var_dump($result2);

echo "<h2>Tercer ejemplo: </h2>";
$result3=explode(",", $cadena, 2);
echo var_dump($result3);


?>