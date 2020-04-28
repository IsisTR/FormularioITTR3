<?php
include('clasedb.php');

extract($_REQUEST);


$db=new clasedb();
$con=$db->conectar();
$sql="INSERT INTO celulares VALUES(NULL,'".$nombre."','".$modelo."','".$marca."','".$caracteristicas."','".$precio."')";
$resultado= mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="celulares.css">
</head>
<body>
<section>
<header>
		<div class="container logo-nav-container">
			<h2 class="logo">MODULO CELULARES</h2>
			<nav class="navigation">
				<ul>
					<li><a href="celulares.html">Registro/Celulares</a></li>
         			<li><a href="./personas/PersonasControlador.php?operacion=index">Inventario</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<article>
		<?php
		if($resultado) {
		?>
			<b class="tab">Registro ingresado<br><br><a href="index.php">Volver</a><br></b>
		<?php
		}else{
		?>
			<b class="tab">Registro no ingresado<br><br><a href="index.php">Volver</a><br></b>
		<?php
		}
		?>
	</article>
</section>
</body>
</html>