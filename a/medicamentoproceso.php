<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: iniciarsesion.php');
}
?>

<html>
<head>
	<title>Agregar Pago</title>
</head>

<body>
<?php
//incluye el archivo de conexión a la base de datos
include_once("conexion.php");

if(isset($_POST['agregar'])) {	
    $id = $_SESSION['id'];
	$laboratorio = $_POST['laboratorio'];
	$nombres= $_POST['nombres'];
	$AP = $_POST['AP'];
	$AM = $_POST['AM'];
    $tel=$_POST['tel'];
    $copo=$_POST['copo'];
    $direc=$_POST['direc'];
		
	// comprobación de campos vacíos
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
		// si todos los campos están rellenados (no vacíos)
			
		//insertar datos a la base de datos
		$resultado = mysqli_query($mysqli, "INSERT INTO `medicamentos`( `id_usu`, `laboratorio`, `Nombres`, `APaterno`, `AMaterno`, `telefono`, `copo`, `direccion`)
         VALUES('$id', '$laboratorio', '$nombres' ,'$AP','$AM','$tel','$copo','$direc' )");
		
		//mostrar mensaje de éxito
		echo "<font color='green'>Datos añadidos con éxito";
		echo "<br/><a href='vermedicamento.php'>Ver Resultado</a>";
	}
}
?>
</body>
</html>
