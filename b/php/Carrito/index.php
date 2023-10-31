<?php

    session_start();
    if(!isset($_SESSION['registro'])){
        echo '<script>
                alert("Por favor debes iniciar sesion")
                window.location = "../../index.php"
            </script>';
            session_destroy();
            die();
    }

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>

  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="stylefooter.css">
  <link rel="stylesheet" href="stylenavbar.css">
  <link rel="stylesheet" href="stylecards.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



</head>
<body class="bg-secondary">
  <!-- ========== Nav Section ========== -->
  <div class="bg-warning">
    <div class="container text-center ">
      <div class="row">
        <div class="col">

        </div>
        <div class="col">
          <img src="img/logoinsane.png" alt="logo" width="130" height="50">

        </div>
        <div class="col">

        </div>
      </div>
    </div>
  </div>
  <nav class="navbar">
    <ul>
      <li><a href="../../index.php">Inicio</a></li>
      <li><a href="#">Acerca de</a></li>
      <li><a href="#">Servicios</a></li>
      <li><a href="#">Contacto</a></li>
      <!--Cerrar Sesion-->
      <li><?php
if(isset($_SESSION['registro'])){
  $productId = 123;
$productUrl = "../php/cerrar_sesion.php";
echo "<a href='$productUrl'>Cerrar Sesion</a>";
}
?></li>
    </ul>
    <div class="icon-container">
      <ion-icon name="location-outline"></ion-icon>
      <a href="index.php"><ion-icon name="cart-outline"></ion-icon></a>
      <a href="index.php"><ion-icon name="person-outline"></ion-icon></a>
    </div>
  </nav>

  <!-- ========== Carrusel Section ========== -->

  <!-- ========== CARRITO Section ========== -->
  <div class="container px-4 py-5" id="featured-3">
    <h1 class="fs-1 pb-2 border-bottom fw-bolder text-primary">Carrito de Compras</h1>
    <?php
$precio = 0;
require "include/config.php";
////////////
echo "<div class='row'>
<div class='col-md-11 offset-md-1'>";

if($stmt = $connection->query("SELECT * FROM carrito")){
$no=$stmt->num_rows;
  echo "Numerdo de articulos : <span id=no>$no</span><br>";


while ($row = $stmt->fetch_assoc()) {
echo "<div class='row align-middle' id=$row[id] >
<div class='col-md-2'>$row[nombre]</div>
<div class='col-md-1'>Cant: $row[cantidad]</div>
<div class='col-md-1'>$ $row[precio]</div>
<div class='col-md-1'><span id=$row[id] class=del><img src=delete.png></span></div>
</div>";
$precio = (int)"$row[precio]"+$precio;

}

}else{
echo $connection->error;
}
echo "</div></div>";
require "templates/bottom.php";	

echo '<html><h1 class="fs-1 pb-2 border-bottom fw-bolder text-primary">"SUBTOTAL"</h1>';
  $a=$precio;
  echo "<html><h1>"."$".$a."</h1></html>";
?>


<script>
$(document).ready(function() {
/////////// form submission//
$('.del').click(function(){
var id=$(this).attr('id');
$.get('delete-record.php',{'id':id,'todo':'delete'},function(return_data){
if(return_data.records_affected == 1){
$("#d_"+id).hide();
// Number of records to decrease by one
var no=parseInt($('#no').html())-1; 
$('#no').html(no);
}	
$("#msg_display").html(return_data.msg);     
$("#msg_display").show();
setTimeout(function() { $("#msg_display").fadeOut('slow'); }, 4000);
},"json");
})
////
})

</script>
</div>

  <!-- ========== Footer Section ========== -->
  <footer>

    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>

    </div>

    <ul class="social_icon">
      <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
      <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
      <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
      <li><a href="#"><ion-icon name="logo-tiktok"></ion-icon></a></li>
    </ul>
    <ul class="menu">
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Contancto</a></li>
      <li><a href="#">Nosotros</a></li>
      <li><a href="#">Ubicacion</a></li>
    </ul>
    <p>@ Albert || Todos los derechos reservados</p>
  </footer>
  <!-- ========== script Section ========== -->

</body>

</html>