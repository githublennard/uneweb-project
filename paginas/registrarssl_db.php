<?php

if (isset($_POST['enviar'])) {

	include 'conexion.php';

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$cedula = $_POST['cedula'];
	$edad = $_POST['edad'];
	$sexo = $_POST['sexo'];
	
	$sql = "insert into registro values (	'',
											'$nombre',
											'$apellido',
                                            '$cedula',
											'$edad',
											'$sexo')";
	mysql_query($sql);
	if(!mysql_error()) {
		echo "Registro agregado";
	} else {
		echo "Error,Falta Algo: ".mysql_error();
	}
}
?>

<a href="index.html">Volver</a>