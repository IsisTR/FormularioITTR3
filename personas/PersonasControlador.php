<?php
include("../clasedb.php");
extract($_REQUEST);

class PersonasControlador
{
	public function index(){
		$db=new clasedb();   //Se instancia class clasedb, creando el objeto db
		$conex=$db->conectar();  //la propiedad conex llamara al método conectar, es decir, conectará con la base de datos programacion

		$sql="SELECT * FROM datos_personales"; //la propiedad $sql creará una consulta a la tabla datos_personales

		$res=mysqli_query($conex,$sql); //se crea una consulta a la base de datos programacion($conex), devolviendo resultados de la tabla: datos_personales($sql), mediante la propiedad $res
		$campos=mysqli_num_fields($res); //la propiedad $campos contendrá el número de campos que tiene la tabla datos_personales
		$filas=mysqli_num_rows($res);  //la propiedad $filas contendrá el número de filas que tiene la tabla datos_personales
		$i=0; //se inicializa la varaible $i desde 0, para el bucle while
		$datos[]=array(); //se crea un array mediante la propiedad $datos

		while($data=mysqli_fetch_array($res)){   ///crea las filas,es decir, los registros...
			for ($j=0; $j < $campos; $j++){     ///crea campos, osea nombre, apellido, ci...
				$datos[$i][$j]=$data[$j];
			}
			$i++;
		}
		mysqli_close($conex);
			header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
	}
    public function modificar(){
        extract($_REQUEST);
        $db=new clasedb();
        $conex=$db->conectar();
        $sql="SELECT * FROM datos_personales WHERE id=".$id_persona."";
		$res=mysqli_query($conex,$sql);
        $data=mysqli_fetch_array($res);
        
        header("Location: editar.php?data=".serialize($data));
    }

    public function actualizar(){
        extract($_REQUEST);
        $db=new clasedb();
        $conex=$db->conectar();

        $sql="UPDATE datos_personales set 
        nombres='$nombres',
        apellidos='$apellidos',
        c_i='$c_i'
        WHERE id=$id_persona";
       	$res=mysqli_query($conex,$sql);
        	if ($res) {
        		?>
        		<script>
        			alert("REGISTRO MODIFICADO");
        			window.location="PersonasControlador.php?operacion=index";
        		</script>
        		<?php
        	}else{
        		?>
        		<script>
        			alert("ERROR AL MODIFICAR REGISTRO");
        			window.location="PersonasControlador.php?operacion=index";
        		</script>
        		<?php
        	}
        $this->index();
    }


    public function eliminar(){

    	extract($_REQUEST);//extrayendo variables del url
    	$db=new clasedb();
    	$conex=$db->conectar();//conectando con la base de datos

    	$sql="DELETE FROM datos_personales WHERE id=".$id_persona;

		$res=mysqli_query($conex,$sql);
		if ($res)
		 {
			?>
			<script type="text/javascript">
				alert("REGISTRO ELIMINADO");
				window.location="PersonasControlador.php?operacion=index";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("REGISTRO NO ELIMINADO");
				window.location="PersonasControlador.php?operacion=index";
			</script>
			<?php
			}
    }//fin de la funcion eliminar


	static function controlador($operacion){
		$persona=new PersonasControlador();
	switch ($operacion) {
		case 'index':
			$persona->index();
			break;
		case 'registrar':
			$persona->registrar();
			break;
		case 'guardar':
			$persona->guardar();
			break;
		case 'modificar':
			$persona->modificar();
			break;
		case 'actualizar':
			$persona->actualizar();
			break;
		case 'eliminar':
			$persona->eliminar();
			break;
		default:
			?>
				<script>
					alert("No existe la ruta");
					window.location="PersonasControlador.php?operacion=index";
				</script>
			<?php
			break;
	}//switch
}//funcion controlador
}//class
PersonasControlador::controlador($operacion);
?>