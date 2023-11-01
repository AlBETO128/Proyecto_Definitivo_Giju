<?php session_start(); ?>

<?php
if(!isset($_SESSION['validar'])) {
}
?>

<?php
// incluir la conexión a la base de datos
include_once("conexion.php");

if(isset($_POST['Editar']))
{	
	$id = $_GET['id'];
	$id_usu = $_SESSION['id'];
	$laboratorio = $_POST['laboratorio'];
	$nombres= $_POST['nombres'];
	$AP = $_POST['AP'];
	$AM = $_POST['AM'];
    $tel=$_POST['tel'];
    $copo=$_POST['copo'];
    $direc=$_POST['direc'];
	
	// comprobando campos vacíos
	if(empty($laboratorio)|| empty($nombres)|| empty($AP) || empty($AM)|| empty($tel)|| empty($copo)|| empty($direc)) {

        
        if(empty($laboratorio)) {
			echo "<font color='red'>El campo laboratorio está vacío.</font><br/>";
		}

        if(empty($nombres)) {
			echo "<font color='red'>El campo Nombres está vacío.</font><br/>";
		}

        if(empty($AP)) {
			echo "<font color='red'>El campo Apellido Paterno está vacío.</font><br/>";
		}

        if(empty($AM)) {
			echo "<font color='red'>El campo Apellido Materno está vacío.</font><br/>";
		}

        if(empty($tel)) {
			echo "<font color='red'>El campo Telefono está vacío.</font><br/>";
		}

        if(empty($copo)) {
			echo "<font color='red'>El campo Código postal está vacío.</font><br/>";
		}

        if(empty($direc)) {
			echo "<font color='red'>El campo Dirección está vacío.</font><br/>";
		}
		
		//enlace a la página anterior
		echo "<br/><a href='javascript:self.history.back();'>Regresar</a>";
	} else {	
		//actualizando la tabla
		$result = mysqli_query($mysqli, "UPDATE `medicamentos` SET `id_medicamento`='$id',`id_usu`='$id_usu',`laboratorio`='$laboratorio',`Nombres`='$nombres',`APaterno`='$AP',`AMaterno`='$AM',`telefono`='$tel',`copo`='$copo',`direccion`='$direc'");
		
		//redirigiendo a la página de visualización. En nuestro caso, es ver.php
		header("Location: vermedicamento.php");
	}
}
?>
<?php
//obteniendo identificación de la URL
$id = $_GET['id'];

//seleccionar datos asociados con esta identificación en particular
$resultado = mysqli_query($mysqli, "SELECT * FROM medicamentos WHERE id_medicamento=$id");

while($res = mysqli_fetch_array($resultado))
{
	$laboratorio = $res['laboratorio'];
	$nombres = $res['Nombres'];
	$AP = $res['APaterno'];
	$AM = $res['AMaterno'];
	$tel = $res['telefono'];
	$copo = $res['copo'];
	$direc = $res['direccion'];
}
?>
<html>
<head>	
	<title>Editar medicamento</title>
</head>

<body>
	<a href="index.php">Inicio</a> | <a href="vermedicamento.php">Ver medicamento</a> | <a href="cerrarsesion.php">Cerrar Sesión</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editarmedicamento.php">
		<table border="0">
        <tr>
				<td>laboratorio</td>
				<td><input type="text" name="laboratorio" value='<?php echo $laboratorio; ?>'></td>
			</tr>
			<tr> 
				<td>Nombres</td>
				<td><input type="text" name="nombres" value='<?php echo $nombres; ?>'></td>
			</tr>
			<tr> 
				<td>Via de administracion</td>
				<td><input type="text" name="AP" value='<?php echo $AP; ?>'></td>
			</tr>
            <tr> 
				<td>Contenido</td>
				<td><input type="text" name="AM" value='<?php echo $AM; ?>'></td>
			</tr>
            <tr> 
				<td>Presentacion</td>
				<td><input type="number" name="tel" value='<?php echo $tel; ?>'></td>
			</tr>
            <tr> 
				<td>Dosis</td>
				<td><input type="number" name="copo" value='<?php echo $copo; ?>'></td>
			</tr>
            <tr> 
				<td>Precio</td>
				<td><input type="text" name="direc" value='<?php echo $direc; ?>'></td>
			</tr>
			<tr>
				<td><input type="submit" name="Editar" value="Editar"></td>
			</tr>
		</table>
	</form>
</body>
</html>