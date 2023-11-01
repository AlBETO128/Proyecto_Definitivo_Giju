<html>
<head>
	<title>Pago Boleto</title>
</head>

<body>
	<a href="index.php">Inicio</a> | <a href="vermedicamento.php">Ver medicamentos</a> | <a href="cerrarsesion.php">Cerrar Sesion</a>
	<br/><br/>

	<form action="medicamentoproceso.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>laboratorio</td>
				<td><input type="text" name="laboratorio"></td>
			</tr>
			<tr> 
				<td>Nombres</td>
				<td><input type="text" name="nombres"></td>
			</tr>
			<tr> 
				<td>Via de Administracion</td>
				<td><input type="text" name="AP"></td>
			</tr>
            <tr> 
				<td>Contenido</td>
				<td><input type="text" name="AM"></td>
			</tr>
            <tr> 
				<td>Presentacion</td>
				<td><input type="number" name="tel"></td>
			</tr>
            <tr> 
				<td>Dosis</td>
				<td><input type="number" name="copo"></td>
			</tr>
            <tr> 
				<td>Precio</td>
				<td><input type="text" name="direc"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="agregar" value="Agregar"></td>
			</tr>
		</table>
	</form>
</body>
</html>

