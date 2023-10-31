<?php 

include 'conexion.php';

//Almacena en variables los valores
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

//Inserta el usuario en la base de datos
$query = "INSERT INTO registro(nombre,apellido, usuario, correo, contrasena)
                      VALUES('$nombre','$apellido', '$usuario', '$correo', '$contrasena')";

//verifica si el correo ya existe
$verificar_correo = mysqli_query($conexion, "SELECT * FROM registro WHERE correo ='$correo'");

//verifica si el usuario ya existe
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario ='$usuario'");

//verifica si el correo ya existe
if(mysqli_num_rows($verificar_correo) > 0 ){
    echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro diferente")
            window.location = "../index.php"        
        </script>
    ';
    exit();
    
}

//verifica si el usuario ya existe
else if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
    <script>
        alert("Este usuario ya esta registrado, intenta con otro diferente")
        window.location = "../index.php"        
    </script>
    ';
    exit();
}

//Confirma si se guarda el usuario
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo ' 
        <script>
            alert("Usuario almacenado exitosamente")
            window.location = "../index.php"
        </script>
    ';
}else {
    echo ' 
        <script>
            alert("Intetelo de nuevo, usuario no almacenado")
            window.location = "../index.php"
        </script>
    ';
}

mysqli_close($conexion);
?>