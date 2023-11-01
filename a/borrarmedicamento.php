<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: iniciarsesion.php');
}
?>

<?php
//incluye el archivo de conexión a la base de datos
include("conexion.php");

//obteniendo id del dato de url
$id_c = $_GET['id'];

//eliminando la fila de la tabla
$result=mysqli_query($mysqli, "DELETE FROM medicamentos WHERE id_medicamento=$id_c");

//redirigir a la página de visualización (view.php en nuestro caso)
header("Location:vermedicamento.php");
?>

