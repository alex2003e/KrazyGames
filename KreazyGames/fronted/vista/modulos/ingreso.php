<?php
require_once "../../controladores/plantilla_controlador.php";
require_once "../../controladores/usuarios.controlador.php";

require_once "../../modelo/usuarios.modelo.php";
require_once "../../modelo/plantilla.modelo.php";
require_once "../../modelo/rutas.php";

$url = Ruta::ctrRuta();

$servidor = Ruta::ctrRutaServidor();
$icono = ControladorPlantilla::ctrEstiloPlantilla();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Krazy Games</title>

	<!--=====================================
			HOJAS DE STILO PLUGINS
	======================================-->
	<?php echo '<link rel="shortcut icon" href="'.$url.$icono["icono"].'">'; ?>
	<!-- PLUGINS -->
	<link rel="stylesheet" href="<?php echo $url;?>vista/assets/css/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $url;?>vista/assets/css/plugins/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $url;?>vista/assets/css/plugins/flexslider.css">
	<link rel="stylesheet" href="<?php echo $url;?>vista/assets/css/plugins/sweetalert.css">

	
	<!-- PLUGINS-WEB'S -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed&display=swap" rel="stylesheet">
	
	<!--=====================================
		HOJAS DE ESTILO PERSONALIZADAS
	======================================-->
	
	<link rel="stylesheet" href="<?php echo $url;?>vista/assets/css/plantilla.css">
	<link rel="stylesheet" href="<?php echo $url;?>vista/assets/css/cabezote.css">
   



	
	<!--=====================================
			SCRIPTS PLUGINS
	======================================-->
	
	<script src="<?php echo $url;?>vista/assets/js/plugins/jquery.min.js"></script>
	<script src="<?php echo $url;?>vista/assets/js/plugins/bootstrap.min.js"></script>
	<script src="<?php echo $url;?>vista/assets/js/plugins/jquery.easing.js"></script>
	<script src="<?php echo $url;?>vista/assets/js/plugins/jquery.scrollUp.js"></script>
	<script src="<?php echo $url;?>vista/assets/js/plugins/jquery.flexslider.js"></script>
	<script src="<?php echo $url;?>vista/assets/js/plugins/sweetalert.min.js"></script>



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
          
            <h4 class="modal-title ">INGRESAR</h4>
        
        </div>
        <div class="modal-body  modalTitulo">
			<!--=====================================
			INGRESO FACEBOOK
			======================================-->

			<div class="col-sm-6 col-xs-12 facebook">
				
				<p>
				  <i class="fa fa-facebook"></i>
					Ingreso con Facebook
				</p>

			</div>

			<!--=====================================
			INGRESO GOOGLE
			======================================-->
			<a href="<?php echo $rutaGoogle; ?>">
			
				<div class="col-sm-6 col-xs-12 google">
					
					<p>
					  <i class="fa fa-google"></i>
						Ingreso con Google
					</p>

				</div>

			</a>

			<!--=====================================
			INGRESO DIRECTO
			======================================-->

			<form method="post">
				
			<hr>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-envelope"></i>
						
						</span>

						<input type="email" class="form-control" id="ingEmail" name="ingEmail" placeholder="Correo Electrónico" required>

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-lock"></i>
						
						</span>

						<input type="password" class="form-control" id="ingPassword" name="ingPassword" placeholder="Contraseña" required>

					</div>

                </div>  
                <?php

                    $ingreso = new ControladorUsuarios();
                    $ingreso -> ctrIngresoUsuario();

                ?>

				<input type="submit" class="btn btn-default backColor btn-block btnIngreso" value="INGRESAR">	

				<br>

				<center>
					
					<a href="#modalPassword" data-dismiss="modal" data-toggle="modal">¿Olvidaste tu contraseña?</a>

				</center>

			</form>

        </div>

        <div class="modal-footer">
          
			¿No tienes una cuenta registrada? | <strong><a href="<?php echo $url.'vista/modulos/registro.php';?>" >Registrarse</a></strong>

        </div>
      
    </div>

</div>
<script src="<?php echo $url.'/vista/assets/js/usuarios.js';?>"></script>

</body>
</html>
