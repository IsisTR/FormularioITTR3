
<?php
//CLASE N°1
class Local {
	private $_Nombre="Every";
	private $_direccion="Caracas";


	public function getNombre(){
		return $this->_Nombre;
	}
	public function getdireccion(){
		return $this->_direccion;
	}
	public function setdireccion($direccion){
		$this->_direccion=$direccion;
	}

}
$objlocal=new Local();

echo $objlocal->getNombre() . "<br>";
echo $objlocal->getdireccion();
echo $objlocal->setdireccion(", Las tocas");
echo $objlocal->getdireccion();
print "<br>";



//CLASE N°2

class Operaciones{ 
	public $n1;
	public $porcentaje;

	public function intro(){
		echo "Es el ". $this->porcentaje;
		echo " % de ".$this->n1;
	}
	private function porcentaje($n1,$porcentaje){      //$n1,$porcentaje
		$this->n1=$n1;
		$this->porcentaje=$porcentaje;

		echo $resultado= $n1 * $porcentaje/100;
		return $resultado; 
	}
	
	public function mostrar(){
		$this->porcentaje("256","7");  
	} 
}

$objOperaciones = new Operaciones;
echo $objOperaciones->mostrar();
print ":";
print "<br>";
echo $objOperaciones->intro();
print "<br>";




//CLASE N°3

class Login{
	public $usuario="Ittr149";
	public $password="1234*";

	protected function _usuario(){
		if(strlen($this->usuario)>6){
			echo "Usuario autorizado";
		}else{
			echo "Usuario no autorizado";
		}
	}

	protected function _password(){
		if(strpos($this->password,'.')){
			echo "Contraseña completa";
		}else{
			echo "Contraseña incompleta";
		}
	}

	public function Mostrar(){
		$this->_usuario();  
		print "<br>";
		$this->_password();
	} 
	
}

$objLogin= new Login;
$objLogin->Mostrar();

?>