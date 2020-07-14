<?php
$array=array("Xiaomi","Samsug","Motorola");

echo "<h2>Primer ejemplo: </h2>";
$result=implode(", ",$array);
echo $result;

echo "<h2>Segundo ejemplo: </h2>";
$result2=implode(" - ", $array);
echo $result2;

echo "<h2>Tercer ejemplo: </h2>";
$result3=implode($array);
echo $result3;


?>