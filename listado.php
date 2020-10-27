<?php
$titulo = "Listar contacto";

include ("head.php");
include ("menu.html");
include ("conexion.php");

$sql = "select * from contactos";
$query = mysql_query($sql)

?>

<br>

<table border="2" align="center" cellpadding="6" >
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Cedula</th>
		<th>Telf</th>
		<th>Correo</th>
		<th>Acciones</th>    
	</tr>
	<?php while ($row = mysql_fetch_array($query)) {?>
	<tr>
		<td><?php echo $row['id'] ?></td>
		<td><?php echo $row['nombre'] ?></td>
		<td><?php echo $row['cedula'] ?></td>
		<td><?php echo $row['telf'] ?></td>
		<td><?php echo $row['correo'] ?></td>
		<td><a href="#">Ver</a> &nbsp; 
			<a href="#">Borrar</a></td>
	</tr>
	<?php } // endwhile ?>
</table>

<?php
include("footer.php");
?>	

	</tr>>

</table>
	<tr>
	</tr>