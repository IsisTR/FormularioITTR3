<?php
include 'Celulares.php';

echo "Probando Herencia<br>";
$objtotal=new Total("a10","r260","samsung","32gb","450");
// $objcelulares=new Celulares("a10","r260","samsung","32gb","450"); //dará error ya que no se puede instanciar la clase

echo "<br>Celular: ". $objtotal->getnombre(); 
// echo "<br>Celular: ". $objtotal->nombre;    //Dará error porque se esta llamando a una propiedad privada 
echo "<br>Marca: ". $objtotal->marca;

echo "<br>Precio Base: ". $objtotal->getprecio();
// echo "<br>Descuento: ". $objtotal->Descuento("samsung",450);

echo "<br>Iva (16,00%): ". $objtotal->Iva(450);




?>
