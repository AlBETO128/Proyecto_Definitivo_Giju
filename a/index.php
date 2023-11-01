<?php session_start(); ?>
<html>
<head>
	<title>Inicio</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="header">
		Farmacias del Ahorro
	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("conexion.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
				
		Bienvenido <?php echo $_SESSION['name'] ?> ! <a href='cerrarsesion.php'>Cerrar Sesión</a><br/>
		<br/>
		<a href='vermedicamento.php'>Ver y Agregar medicamento</a>
		<br/><br/>
	<?php	
	} else {
		echo "Debe iniciar sesión para ver esta página.<br/><br/>";
		echo "<a href='iniciarsesion.php'>Iniciar Sesión</a> | <a href='registro.php'>Registro</a>";
	}
	?>
<a href="https://albeto128.github.io/Examen_Definitivo_Gihuu/WEBMASTER.HTML">
	<div id="footer">
		Alberto Carbajal Vazquez 5°J</a>
	</div>
</a>
</body>
</html>
