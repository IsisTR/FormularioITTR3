<?php
$cadena="Un planario es un mundo de dos dimensiones";
$cadena2="Al ser seres de TRES dimensiones somos imperceptibles para aquellas proyecciones de DOS";

echo "<h2>Primer ejemplo: </h2><br>";
$result=strtoupper($cadena);
echo $result;

echo "<h2>Segundo ejemplo: </h2><br>";
$result2=strtoupper("una proyección bidimensional");
echo $result2;


echo "<h2>Tercer ejemplo: </h2><br>";
$result3=strtoupper($cadena2);
echo $result3;

// Observación: Esta funcion es sensible a las letras acentudas


?>