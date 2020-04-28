<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editando celulares</title>
	<link rel="stylesheet" type="text/css" href="personas.css">
</head>
<body>
<form action="PersonasControlador.php" method="post" name="formulario">
	<header>
		<div class="container logo-nav-container">
			<h2 class="logo">MÓDULO CELULARES</h2>
			<nav class="navigation">
				<ul>
					<li><a href="../celulares.html">Registro/Celulares</a></li>
         			<li><a href="PersonasControlador.php?operacion=index">Inventario</a></li>
				</ul>
			</nav>
		</div>
		</header>

		<article>
			<table class="tab">
				<tr>
					<td colspan="2"><center>Editar Registro: </center></td>
				</tr>
				<tr>
					<th>Nombre:</th><td><input class="td" type="text" name="nombre" id="nombre" placeholder="Ej: " title="Ingrese nombre del celular" value="<?=$data[1]?>"></td>
				</tr>
				<tr>
					<th>Modelo:</th><td><input class="td" type="text" name="modelo" id="modelo" placeholder="Ej: " title="Ingrese modelo del celular" value="<?=$data[2]?>"></td>
				</tr>
				<tr>
					<th>Marca:</th><td><input class="td" type="text" name="marca" id="marca" placeholder="Ej:" title="Ingrese marca del celular" value="<?=$data[3]?>"></td>
				</tr>
				<tr>
					<th>Caracteristicas:</th><td><input class="td" type="text" name="caracteristicas" id="caracteristicas" placeholder="Ej: " title="Ingrese caracteristicas del celular" 	value="<?=$data[4]?>"></td>
				</tr>
				<tr>
					<th>Precio:</th><td><input class="td" type="number" name="precio" id="precio" placeholder="Ej:" title="Ingrese precio del celular" value="<?=$data[5]?>"></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="hidden" name="id_celular" value="<?=$data[0]?>">
						<input type="hidden" name="operacion" value="actualizar">
						<center><input type="submit" name="enviar" value="enviar" class="botton" style="background-color: #08C813"></center>
					</td>
				</tr>
			</table>
		</article>
</section>
</form>
</body>
</html>