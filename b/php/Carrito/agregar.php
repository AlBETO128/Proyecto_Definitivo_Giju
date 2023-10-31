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


<?php


$databaseHost = 'localhost';   //your db host 
$databaseName = 'juegos';  //your db name 
$databaseUsername = 'root';    //your db username 
$databasePassword = '';//   db password 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
$id = $_GET['id'];



$sql="select * from carrito where (id='$id');";//  check id is already copied 

      $res=mysqli_query($mysqli,$sql);

      if (mysqli_num_rows($res) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($res);
        if($id==$row['id'])
        {
            echo '<script>
            alert("Producto ya se encuentra en el carrito")
            window.location = "../../index.php";
        </script> ';	
        }

       } else{
$query=mysqli_query($mysqli,"INSERT INTO carrito
SELECT * FROM producto WHERE id =$id");// copy one table to another 
echo '<script>
alert("Producto agregado al carrito")
window.location = "../../index.php";
</script> ';

	   }
	   
?>