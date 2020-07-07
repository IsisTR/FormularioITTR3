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
}
?>