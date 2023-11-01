<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: iniciarsesion.php');
}
?>

<?php
//incluye el archivo de conexión a la base de datos
include_once("conexion.php");

//obtención de datos en orden descendente (primero la última entrada)
$result = mysqli_query($mysqli, "SELECT * FROM medicamentos WHERE id_usu=".$_SESSION['id']." ORDER BY id_medicamento DESC");
?>

<html>
<head>
	<title>Pagos</title>
</head>

<body>
	<a href="index.php">Inicio</a> | <a href="medicamento.php">Agregar medicamento</a> | <a href="cerrarsesion.php">Cerrar Sesión</a>
	<br/><br/>
	
	<table width='95%' border=0>
		<tr bgcolor='#CCCCCC'>
            <td>id_medicamento</td>
            <td>laboratorio</td>
            <td>Nombre</td>
			<td>Via de Administracion</td>
			<td>Contenido</td>
			<td>Presentacion</td>
			<td>Dosis</td>
            <td>Precio</td>

		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['id_medicamento']."</td>";
            echo "<td>".$res['laboratorio']."</td>";
            echo "<td>".$res['Nombres']."</td>";
            echo "<td>".$res['APaterno']."</td>";
            echo "<td>".$res['AMaterno']."</td>";
            echo "<td>".$res['telefono']."</td>";
			echo "<td>".$res['copo']."</td>";
			echo "<td>".$res['direccion']."</td>";	
			echo "<td><a href=\"editarmedicamento.php?id=$res[id_medicamento]\">Editar</a> | <a href=\"borrarmedicamento.php?id=$res[id_medicamento]\" onClick=\"return confirm('¿Estás seguro que quieres eliminarlo?')\">Eliminar</a></td>";		
		}
		?>
	</table>	
</body>
</html>
