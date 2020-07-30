<?php
include("../clasedb.php");
extract($_REQUEST);
$db=new clasedb();
$conex=$db->conectar();


?>
<!DOCTYPE html>
<html>
<head>
	<title>	Ejercicios </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="main-container">

		<div id="left-container">
		<div class="div">

			<div class="title-container">

			<h1>Ejercicios de clase</h1>
			<!-- <h3>Programación</h3> -->
			</div>

			<table>
				<tr>
					<td>
						<a href="ceil().php"><input type="submit" value="ceil" class="btn"></a>
					</td>
					<td>
						<a href="count().php"><input type="submit" value="count" class="btn"></a>
					</td>
					<td>
						<a href="explode().php"><input type="submit" value="explode" class="btn"></a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="floor().php"><input type="submit" value="floor" class="btn"></a>
					</td>
					<td>
						<a href="implode().php"><input type="submit" value="implode" class="btn"></a>
					</td>
					<td>
						<a href="public_private_protected.php"><input type="submit" value="public, private, protected" class="btn"></a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="rand().php"><input type="submit" value="rand" class="btn"></a>
					</td>
					<td>
						<a href="round().php"><input type="submit" value="round" class="btn"></a>
					</td>
					<td>
						<a href="strlen().php"><input type="submit" value="strlen" class="btn"></a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="strtolower().php"><input type="submit" value="strtolower" class="btn"></a>
					</td>
					<td>
						<a href="strtoupper().php"><input type="submit" value="strtoupper" class="btn"></a>
					</td>
					<td>
						<a href="suma_substr().php"><input type="submit" value="suma substr" class="btn"></a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="trim().php"><input type="submit" value="trim" class="btn"></a>
					</td>
					<td>
						<a href="ucfirst().php"><input type="submit" value="ucfirst" class="btn"></a>
					</td>
					<td>
						<a href="ucwords().php"><input type="submit" value="ucwords" class="btn"></a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="var_dump().php"><input type="submit" value="var_dump" class="btn"></a>
					</td>
					<td></td>
					<td></td>
				</tr>
			</table>

		</div>
		</div>
		<div id="right-container">
			<img src="sss.jpg" class="img-right-container">
		</div>

	</div>
</body>
</html>
</body>
</html>