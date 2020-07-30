<?php
include("../clasedb.php");
extract($_REQUEST);
$db=new clasedb();
$conex=$db->conectar();


/********************************CREAR TABLA***************************************************/
// $sql="CREATE TABLE inmuebles(id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, idem VARCHAR(50) NOT NULL, estacionamiento ENUM('Si','No'), status ENUM('Ocupado','Desocupado','Mantenimiento'), tipo ENUM('Casa','Apartamento','Chalet','Quinta','Otro'),cod_postal VARCHAR(5));";
// $result=mysqli_query($conex,$sql);
// if ($result) {
// 	echo "tabla creada correctamente";
// }else{
// 	echo "la tabla no pudo ser creada";
// }

/******************************INSERTAR REGISTRO************************************************/
// $sql="INSERT INTO inmuebles(idem,estacionamiento,status,tipo,cod_postal) 
// 			VALUES('0567',1,3,4,'2101')";
// $result=mysqli_query($conex,$sql);
// if ($result) {
// 	echo "registro ingresado correctamente";
// }else{
// 	echo "el registro no pudo ser ingresado";
// }


for ($i=1; $i < 20; $i++) { 

	$idem=rand(100,1000);
	
	$estacionamiento = array("si", "no");
	$result_est = $estacionamiento[array_rand($estacionamiento)];
	

	$status = array("Ocupado","Desocupado","Mantenimiento");
	$result_sta = $status[array_rand($status)];
	

	$tipo = array("Casa","Apartamento","Chalet","Quinta","Otro");
	$result_tipo = $tipo[array_rand($tipo)];
	

	$cod_postal = array("2101","2103","2126","2335");
	$result_post = $cod_postal[array_rand($cod_postal)];

	$sql_insert="INSERT INTO inmuebles(idem,estacionamiento,status,tipo,cod_postal) 
			 		VALUES('$idem','$result_est','$result_sta','$result_tipo','$result_post')";
	$result_insert=mysqli_query($conex,$sql_insert);
		
};




?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrar | BD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php  
	if ($result_insert) { 
?>
	<h1>Registro ingresado correctamente</h1>
<?php 
}
	else{ 
?>
	<h1>El registro no se pudo realizar</h1>
<?php 
}
?>
<h1></h1>


</body>
</html>