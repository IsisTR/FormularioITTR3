<?php
include 'Celulares.php';

echo "Probando Herencia<br>";

$objtotal=new Total("a10","r260","samsung","32gb","450");
echo "<br>Iva (16,00%): ". $objtotal->Iva(450);


// echo "Celular: ". $objtotal->nombre;
// echo "<br>Precio Base: ". $objtotal->precio;
// echo "<br>Descuento: ". $objtotal->Descuento("samsung",450);

?>
