<?php

    session_start();

    if(isset($_SESSION['registro'])){
        header("location: ../index.php");
    }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Inicio de Sesion</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css.css" />
	<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  </head>
  <body>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Iniciar Sesion</span><span>Registrarse</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
                    <form action="php/ingresar.php" method="POST" class="formulario__login">
											<h4 class="mb-4 pb-3">Iniciar Sesion</h4>
											<div class="form-group">
												<input type="email" class="form-style" placeholder="Correo Electronico" name="correo" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Contraseña" name="contrasena" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<a><button class="btn mt-4">Entrar</button></a>
                            		
				      					</div>
			      					</div>
			      				</div>
  						</form>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
						<form action="php/registro.php" method="POST" class="formulario__register">
											<h4 class="mb-4 pb-3">Registrarse</h4>
											<div class="form-group">
												<input type="text" class="form-style"  placeholder="Nombre" name="nombre" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>
											<div class="form-group mt-2">
												<input type="text" class="form-style" placeholder="Apellido" name="apellido" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>
											<div class="form-group mt-2">
												<input type="text" class="form-style" placeholder="Usuario" name="usuario" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>
											<div class="form-group mt-2">
												<input type="email" class="form-style" placeholder="Correo Electronico" name="correo" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Contraseña" name="contrasena" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<a><button class="btn mt-4">Entrar</button></a>
				      					</div>
			      					</div>
			      				</div>
</form>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</body>
</html>