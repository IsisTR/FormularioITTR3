<?php
//Ejercicio: HERENCIA

class Celulares
{
	public $nombre;
	public $modelo;
	public $marca;
	public $caracteristicas;
	public $precio;

	function __construct($nombre,$modelo,$marca,$caracteristicas,$precio)
	{
		$this->nombre=$nombre;
		$this->modelo=$modelo;
		$this->marca=$marca;
		$this->caracteristicas=$caracteristicas;
		$this->precio=$precio;
	}

	public function Iva($precio,$porcentaje=16)
	{	
		return $precio*$porcentaje/100;
	}

}//Cierre de la clase Celulares

class Total extends Celulares
{
	public function Descuento($marca,$precio)
	{
		if($marca == "samsung"){
		$descuento=10;
		$sale= $precio*$descuento/100;
		return $sale;	
		}
	}
		
}//Cierre de la clase Descuento


?>