<hmtl>
<head>
<title>Base de Datos </title>
</head>
<body>

<?php
 
$conexion=mysql_connect("mysql.zz.com.ve","kfrbzzlennard","Lirimizo79")
or die(" problemas en la conexion");

mysql_select_db("kfrbzzlennard",$conexion) or die ("Problemas seleccion base de datos");

mysql_query("insert into registro(nombre,apellido,cedula,edad)values('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[cedula]',
$_REQUEST[edad])",$conexion) or die ("PPProblemas en el select".mysql_error());

mysql_close($conexion);
echo "el alumno fue dado de alta";

?>
</body>
</html>


