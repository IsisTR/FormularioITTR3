<?php 

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$result=$num1+$num2;

$cad1="Planario";
$cad2="Cosmos";
$cad=$cad1."-".$cad2;


$cadena="Strlimit es un helper de laravel";
$result_cad=substr($cadena,3,-5);//se eliminaran los 3 primeros caracteres y los 5 ultimos
$result_cad2=substr($cadena,-10);//solo los 10 ultimos caracteres se mostraran
$result_cad3=substr($cadena,5,10);//solo los 10 caracteres restantes luego de eliminarle los 5 primeros
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Suma de dos números</h2>
	<form action="" method="post">
		Primer número<br>
		<input type="text" name="num1"><br>
		Segundo número<br>
		<input type="text" name="num2"><br>
		<input type="submit" value="Enviar">
	</form>
	<h5>Resultado de la suma: <?php echo $result; ?></h5>

	<h2>Concatenar</h2>
	<h5>Resultado: <?php echo $cad; ?></h5>

	<h2>Strlimit</h2>
	<h5>Resultado: <?php echo $result_cad; ?></h5>
	<h5>Resultado: <?php echo $result_cad2; ?></h5>
	<h5>Resultado: <?php echo $result_cad3; ?></h5>
</body>
</html>
