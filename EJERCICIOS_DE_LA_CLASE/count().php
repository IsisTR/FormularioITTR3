<?php
$array1=array("Marcas"=>array("Xiaomi","Samsug","Motorola"));

echo var_dump($array1);

echo "<h2>Primer ejemplo: Generamos el número de elementos de un array</h2><br>";
$result=count($array1);
echo $result;

echo "<h2>Segundo ejemplo: Generamos el número de elementos de un array, contando de manera recursiva</h2><br>";
$result2=count($array1,1);
echo $result2;

echo "<h2>Tercer ejemplo: Generamos el número de elementos de un array, contando de manera no recursiva</h2><br>";
$result3=count($array1,0);
echo $result3;

?>