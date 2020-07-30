<?php
include("../clasedb.php");
extract($_REQUEST);
$db=new clasedb();
$conex=$db->conectar();




?>

<!DOCTYPE html>
<html>
<head>
	<title>Conexión | BD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="list">
		<h1>Todos los registros</h1>
		<table>
			<tr>
				<th>#</th>
				<th>Idem</th>
				<th>Estacionamiento</th>
				<th>Status</th>
				<th>Tipo</th>
				<th>Código postal</th>
			</tr>
			<?php 
				$query=mysqli_query($conex,"SELECT id, idem, estacionamiento, status, tipo, cod_postal FROM inmuebles");
				$result=mysqli_num_rows($query);

				if($result>0){
					while($data=mysqli_fetch_array($query)){
			?>
						<tr>
							<td><?php echo $data["id"]  ?></td>
							<td><?php echo $data["idem"]  ?></td>
							<td><?php echo $data["estacionamiento"]  ?></td>
							<td><?php echo $data["status"]  ?></td>
							<td><?php echo $data["tipo"]  ?></td>
							<td><?php echo $data["cod_postal"]  ?></td>
						</tr>
			<?php			
					}
				}
			?>
		</table>

<!-- **********INMUEBLES QUE TENGAN ESTACIONAMIENTO Y ESTEN DISPONIBLES******************* -->
		<h1>Inmuebles con estacionamiento y status disponibles</h1>
		<table>
			<tr>
				<th>#</th>
				<th>Idem</th>
				<th>Estacionamiento</th>
				<th>Status</th>
				<th>Tipo</th>
				<th>Código postal</th>
			</tr>
			<?php 
				$query1=mysqli_query($conex,"SELECT id, idem, estacionamiento, status, tipo, cod_postal FROM inmuebles WHERE estacionamiento='Si' and status='Desocupado'");
				$result1=mysqli_num_rows($query1);

				if($result1>0){
					while($data1=mysqli_fetch_array($query1)){
			?>
						<tr>
							<td><?php echo $data1["id"]  ?></td>
							<td><?php echo $data1["idem"]  ?></td>
							<td><?php echo $data1["estacionamiento"]  ?></td>
							<td><?php echo $data1["status"]  ?></td>
							<td><?php echo $data1["tipo"]  ?></td>
							<td><?php echo $data1["cod_postal"]  ?></td>
						</tr>
			<?php			
					}
				}
			?>
		</table>

<!-- **********CASAS DESOCUPADAS Y SIN ESTACIONAMIENTO******************* -->
		<h1>Casas desocupadas y sin estacionamiento</h1>
		<table>
			<tr>
				<th>#</th>
				<th>Idem</th>
				<th>Estacionamiento</th>
				<th>Status</th>
				<th>Tipo</th>
				<th>Código postal</th>
			</tr>
			<?php 
				$query2=mysqli_query($conex,"SELECT id, idem, estacionamiento, status, tipo, cod_postal FROM inmuebles WHERE estacionamiento='No' and status='Desocupado' and tipo='Casa'");
				$result2=mysqli_num_rows($query2);

				if($result2>0){
					while($data2=mysqli_fetch_array($query2)){
			?>
						<tr>
							<td><?php echo $data2["id"]  ?></td>
							<td><?php echo $data2["idem"]  ?></td>
							<td><?php echo $data2["estacionamiento"]  ?></td>
							<td><?php echo $data2["status"]  ?></td>
							<td><?php echo $data2["tipo"]  ?></td>
							<td><?php echo $data2["cod_postal"]  ?></td>
						</tr>
			<?php			
					}
				}
			?>
		</table>

<!-- ***********************************TOTALES************************************** -->
		<h1>Totales</h1>
		<table>
			<tr>
				<th>#</th>
				<th>Sin Estacionamiento</th>
				<th>Con Estacionamiento</th>
				<th>Desocupado</th>
				<th>Ocupado</th>
			</tr>
			<?php 
				$query3=mysqli_query($conex,"SELECT id, idem, estacionamiento, status, tipo, cod_postal FROM inmuebles WHERE estacionamiento='No'");
				$result3=mysqli_num_rows($query3);

				$query4=mysqli_query($conex,"SELECT id, idem, estacionamiento, status, tipo, cod_postal FROM inmuebles WHERE estacionamiento='Si'");
				$result4=mysqli_num_rows($query4);

				$query5=mysqli_query($conex,"SELECT id, idem, estacionamiento, status, tipo, cod_postal FROM inmuebles WHERE status='Desocupado'");
				$result5=mysqli_num_rows($query5);

				$query6=mysqli_query($conex,"SELECT id, idem, estacionamiento, status, tipo, cod_postal FROM inmuebles WHERE status='Ocupado'");
				$result6=mysqli_num_rows($query6);

				
			?>
						<tr>
							<td>#</td>
							<td><?php echo $result3 ?></td>
							<td><?php echo $result4 ?></td>
							<td><?php echo $result5 ?></td>
							<td><?php echo $result6 ?></td>
						</tr>
			<?php			
				
			?>
		</table>

</div>
</body>
</html>