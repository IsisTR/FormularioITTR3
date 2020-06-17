<?php
//Ejercicio: HERENCIA

abstract class Celulares //esta clase solo puede heredarse no instanciarse
{
	private $nombre;
	public $modelo;
	public $marca;
	public $caracteristicas;
	protected $precio;

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

	public function getnombre(){ //los métodos getters se utilizan para mostrar una propiedad o método privado
		return $this->nombre;
	}
	public function getprecio(){
		return $this->precio;
	}
}//Cierre de la clase Celulares

final class Total extends Celulares
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

// class Probando extends Total{    //dará error ya que no se puede heredar el método
// 	//probando......
// } 
?>