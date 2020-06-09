<?//Ejercicio: HERENCIA

class Celulares{

	public $nombre;
	public $modelo;
	public $marca;
	public $caracteristicas;
	public $precio;

	public function __construct($nombre,$modelo,$marca,$caracteristicas,$precio){
		$this->nombre=$nombre;
		$this->modelo=$modelo;
		$this->marca=$marca;
		$this->caracteristicas=$caracteristicas;
		$this->precio=$precio;
	}

	public function Mostrar{
		return 'ha entrado a la funcion';
	}

}

class Reparaciones extends Celulares{

	public $codigo;
	public $falla;

	public function __construct($codigo,$falla){
		$this->codigo=$codigo;
		$this->falla=$falla;
	}

}

?>