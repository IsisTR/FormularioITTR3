<?php
extract($_REQUEST);
$data=unserialize($data);
?><!DOCTYPE html>
<html>
<head>
	<title>Lista de categorias</title>
	<script type="text/javascript">
		function eliminar(id){
			if (confirm("seguro desea eliminar el registro?")){
				window.location="PersonasControlador.php?operacion=eliminar&id_celular="+id;
			}
		}
	</script>
	<link rel="stylesheet" type="text/css" href="personas.css">
</head>
<body>
<section>
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
			<table align="center" class="tab">
				<center><a href="PersonasControlador.php?operacion=registrar">Registrar</a></center>
				<tr><th>Nro</th><th>Nombre</th><th>Modelo</th><th>Marca</th><th>Caracteristicas</th><th>Precio</th></tr>
					<?php $num=1;
					for ($i=0; $i < $filas; $i++) {
					echo "<tr>";
					?>
				<td><?=$num?></td>
					<?php for ($j=1; $j < $campos; $j++) { ?>
				<td><?=$data[$i][$j]?></td>

					<?php	} ?>
				<td><a href="PersonasControlador.php?operacion=modificar&id_celular=<?=$data[$i][0]?>" class="ME">Modificar</a>
				<a href="javascript:eliminar(<?=$data[$i][0]?>)" class="ME">Eliminar</a><br><br></td>
					<?php
					$num++;
				}	?>
			</table>
		</article>


</section>
</body>
</html>