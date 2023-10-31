<?php

    session_start();

include 'conexion.php';

//Almacena en variables los valores
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

//Revisa registros de  la base de datos 
$validacion = mysqli_query($conexion, "SELECT * FROM registro WHERE correo='$correo'
and contrasena='$contrasena'");

//Validacion de usuario
if(mysqli_num_rows($validacion) > 0){
    $_SESSION['registro'] = $correo;
    header("location: ../index.php");
    exit();
}


else {
    echo '<script>
        alert("Usuario no existe, vuelve a ingresar los datos")
        window.location = "../index.php";
    </script> ';
    exit();
}


?>