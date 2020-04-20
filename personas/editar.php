<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editando personas</title>
</head>
<body>
<br>
<form action="PersonasControlador.php" method="post" name="formulario">
<table>
	<tr>
		<td colspan="2">Editar persona: </td>
	</tr>
	<tr>
		<td>Nombres:</td><td><input type="text" name="nombres" id="nombres" placeholder="Ej: Marton Jose" title="Ingrese sus nombres" value="<?=$data[1]?>"></td>
	</tr>
	<tr>
		<td>Apellidos:</td><td><input type="text" name="apellidos" id="apellidos" placeholder="Ej: Perez Salcedo" title="Ingrese sus apellidos" value="<?=$data[2]?>"></td>
	</tr>
	<tr>
		<td>Cedula:</td><td><input type="number" name="c_i" id="c_i" placeholder="Ej: 26834873" title="Ingrese su cedula" value="<?=$data[3]?>"></td>
	</tr>
	<tr>
		<td>
			<input type="hidden" name="id_persona" value="<?=$data[0]?>">
			<input type="hidden" name="operacion" value="actualizar">
			<input type="submit" name="enviar" value="enviar">
		</td>
	</tr>
</table>


</form>

</body>
</html>