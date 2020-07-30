<?php
include("../clasedb.php");
extract($_REQUEST);
$db=new clasedb();
$conex=$db->conectar();





?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu | BD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="main-container">

		<div id="left-container">
		<div class="div">

			<div class="title-container">

			<h1>Conexión | BD</h1>
			<h3>Programación</h3>
			</div>

				<a href="consultas.php"><input type="submit" value="Realizar consulta" class="btn"></a>
				<a href="registros.php"><input type="submit" value="Registrar 20 inmuebles" class="btn"></a>

		</div>
		</div>
		<div id="right-container">
			<img src="shs.jpg" class="img-right-container">
		</div>

	</div>
</body>
</html>
</body>
</html>