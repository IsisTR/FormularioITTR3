
<?php
include("clasedb.php");
extract($_REQUEST);
$db=new clasedb();
$conex=$db->conectar();





?>
<!DOCTYPE html>
<html>
<head>
	<title>	Inicio </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="main-container">

		<div id="left-container">
		<div class="div">

			<div class="title-container">

			<h1>Inicio</h1>
			<h3>Programación</h3>
			</div>

				<a href="Isis_Tovar_26834873.html"><input type="submit" value="Formulario" class="btn"></a>
				<a href="./personas/PersonasControlador.php?operacion=index"><input type="submit" value="Personas" class="btn"></a>
				<a href="./modulo"><input type="submit" value="Modulo 3" class="btn"></a>
				<a href="./modulo/mostrar.php"><input type="submit" value="Herencia" class="btn"></a>
				<a href="./EJERCICIOS_DE_LA_CLASE"><input type="submit" value="Ejercicios" class="btn"></a>
				<a href="./conexion"><input type="submit" value="Conexión BD" class="btn"></a>

		</div>
		</div>
		<div id="right-container">
			<img src="sh.jpg" class="img-right-container">
		</div>

	</div>
</body>
</html>
</body>
</html>
