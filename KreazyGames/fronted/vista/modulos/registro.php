<?php
require_once "../../controladores/plantilla_controlador.php";
require_once "../../controladores/usuarios.controlador.php";

require_once "../../modelo/usuarios.modelo.php";
require_once "../../modelo/plantilla.modelo.php";
require_once "../../modelo/rutas.php";
require_once "../../vista/assets/PHPMailer/PHPMailerAutoload.php";

$url = Ruta::ctrRuta();

$servidor = Ruta::ctrRutaServidor();

$icono = ControladorPlantilla::ctrEstiloPlantilla();



?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

<meta name="viewpor" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<meta name="title" content="Krazy Games">

<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error dolorum eius similique .">


<meta name="keyword" content="Lorem ipsum dolor sit amet, consectetur adipisicing, elit, Error dolorum,eius similique .">


	<title>Krazy Games</title>

	<!--=====================================
			HOJAS DE STILO PLUGINS
	======================================-->
	<?php echo '<link rel="shortcut icon" href="'.$url.$icono["icono"].'">'; ?>
	<!-- PLUGINS -->
	<link rel="stylesheet" href="<?php echo $url;?>/vista/assets/css/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $url;?>/vista/assets/css/plugins/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $url;?>/vista/assets/css/plugins/flexslider.css">
	<link rel="stylesheet" href="<?php echo $url;?>/vista/assets/css/plugins/sweetalert.css">

	
	<!-- PLUGINS-WEB'S -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed&display=swap" rel="stylesheet">
	
	<!--=====================================
		HOJAS DE ESTILO PERSONALIZADAS
	======================================-->
	
	<link rel="stylesheet" href="<?php echo $url;?>/vista/assets/css/plantilla.css">
	<link rel="stylesheet" href="<?php echo $url;?>/vista/assets/css/cabezote.css">
   



	
	<!--=====================================
			SCRIPTS PLUGINS
	======================================-->
	
	<script src="<?php echo $url;?>/vista/assets/js/plugins/jquery.min.js"></script>
	<script src="<?php echo $url;?>/vista/assets/js/plugins/bootstrap.min.js"></script>
	<script src="<?php echo $url;?>/vista/assets/js/plugins/jquery.easing.js"></script>
	<script src="<?php echo $url;?>/vista/assets/js/plugins/jquery.scrollUp.js"></script>
	<script src="<?php echo $url;?>/vista/assets/js/plugins/jquery.flexslider.js"></script>
	<script src="<?php echo $url;?>/vista/assets/js/plugins/sweetalert.min.js"></script>



</head>
<body>

<!--=====================================
VENTANA MODAL PARA EL INGRESO
======================================-->
<!-- Modal -->
<div class=" modalFormulario" id="modalIngreso" role="dialog">
  <div class=" modal-content modal-dialog">
    
      <!-- Modal content-->
        <div class="modal-header backColor modalTitulo">

            <h4 class="modal-title ">REGISTRO</h4>
        
        </div>
        <div class="modal-body  modalTitulo">
		<!--================================================
		FACEBOOK REGISTRO  
		==================================================-->
			<div class="col-sm-6 col-xs-12 facebook " id=" btnFacebookRegistro">
				<p>
					<i class="fa fa-facebook"></i>
						Registro con Facebook
				</p>

			</div>

		<!--================================================
		GOOGLE REGISTRO  
		==================================================-->
			<div class="col-sm-6 col-xs-12 google " id=" btnGoogleRegistro">
				<p>
					<i class="fa fa-google"></i>
						Registro con Google
				</p>

			</div>
		<!--================================================
		  				REGISTRO
		==================================================-->
			<form method="post" onsubmit="return registroUsuario()">
			
				<hr>
			
					<div class="form-group">
				
						<div class="input-group">
					
							<span class="input-group-addon">
						
								<i class="glyphicon glyphicon-user"></i>
							</span>

							<input type="text" class="form-control text-uppercase" id="regUsuario" name="regUsuario" placeholder="Nombre Completo" required>
				
						</div>
			
					</div>
					<div class="form-group">
				
						<div class="input-group">
					
							<span class="input-group-addon">
						
								<i class="glyphicon glyphicon-envelope"></i>
							</span>

							<input type="email" class="form-control " id="regEmail" name="regEmail" placeholder="CORREO ELECTROÍCO" required>
				
						</div>
					</div>
					<div class="form-group">
				
						<div class="input-group">
					
							<span class="input-group-addon">
						
								<i class="glyphicon glyphicon-lock"></i>
							</span>

							<input type="password" class="form-control text-uppercase" id="regPassword" name="regPassword" placeholder="Contraseña" required>
				
						</div>
			
					</div>
					<div class="form-group">
				
						<div class="input-group">
					
							<span class="input-group-addon">
						
								<i class="glyphicon glyphicon-user"></i>
							</span>

							<input type="text" class="form-control text-uppercase" id="regUbicacion"  name="regUbicacion" placeholder="UBICACIÓN" required>
						</div>	
					</div>	

					<div class="checkBox">

						<label>
							
							<a href="<?php echo $url;?>/vista/modulos/terminosycondiciones.html" 	target="_blank">Leer terminos</a><br>

							<input  id="regTerminos" type="checkBox" placeholder="acepto terminos" required>

							<label>¿ Aceptar los terminos ?</label><br>

						</label>

					</div>
                    <?php

							
                        $registro = new ControladorUsuarios();
                        $registro -> ctrRegistroUsuario();



                    ?>
					<input type="submit" class="btn btn-default backColor btn-block" value="ENVIAR">
			</form>  
					<div class="ubicacion">
						<h5>si desea saber su ubicacion precione el boton</h5>
							<button onclick="getLocation()">Ubicación</button> 
							<p id="demo"></p> 
					</div>      
        </div>
        <div class="modal-footer">
          
        	¿ Ya tienes una cuenta ? | <strong><a href="<?php echo $url.'vista/modulos/ingreso.php';?>" >Ingresar</a></strong>

        </div>
    
    </div>
</div>
<script src="<?php echo $url;?>/vista/assets/js/usuarios.js"></script>
<script src="<?php echo $url;?>/vista/assets/js/ubicacion.js"></script>
</body>
</html>