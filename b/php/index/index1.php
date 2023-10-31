<?php

    session_start();
    if(!isset($_SESSION['registro'])){
        echo '<script>
                alert("Por favor debes iniciar sesion")
                window.location = "index.php"
            </script>';
            session_destroy();
            die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--boostrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--INDEX-->
    <link rel="stylesheet" href="css.css">
    <!--JUEGO 1-->
    <link rel="stylesheet" href="juego/Frio o Caliente/css/main.css">
    <link rel="stylesheet" href="/juego/patos/style.css">
    <title>JAA4</title>
</head>
<body>
<a style="text-decoration:none; color:black" href="../php/cerrar_sesion.php">CERRAR SESION</a></span> 

</body>
</html>
