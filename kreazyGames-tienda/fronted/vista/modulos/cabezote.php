<?php

$servidor = Ruta::ctrRutaServidor();
$url = Ruta::ctrRuta();

/*=============================================
INICIO DE SESIÓN USUARIO
=============================================*/

if(isset($_SESSION["validarSesion"])){

	if($_SESSION["validarSesion"] == "ok"){

		echo '<script>
		
			localStorage.setItem("usuario","'.$_SESSION["id"].'");

		</script>';

	}

}

 ?>

<!--=====================================
TOP
======================================-->

<div class="container-fluid barraSuperior" id="top">
	
	<div class="container">
		
		<div class="row">
	
			<!--=====================================
			SOCIAL
			======================================-->

			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
				
				<ul>	

					<?php

					$social = ControladorPlantilla::ctrEstiloPlantilla();

					$jsonRedesSociales = json_decode($social["redesSociales"],true);		

					foreach ($jsonRedesSociales as $key => $value) {

						echo '<li>
								<a href="'.$value["url"].'" target="_blank">
									<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
								</a>
							</li>';
					}

					?>
			
				</ul>

			</div>

			<!--=====================================
			REGISTRO
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
				
				<ul>

				<?php

				if(isset($_SESSION["validarSesion"])){

					if($_SESSION["validarSesion"] == "ok"){

						if($_SESSION["modo"] == "directo"){

							if($_SESSION["foto"] != ""){

								echo '<li>

										<img class="img-circle" src="'.$url.$_SESSION["foto"].'" width="10%">

									 </li>';

							}else{

								echo '<li>

									<img class="img-circle" src="'.$servidor.'vistas/img/usuarios/default/anonymous.png" width="10%">

								</li>';

							}

							echo '<li>|</li>
							 <li><a href="'.$url.'perfil">Ver Perfil</a></li>
							 <li>|</li>
							 <li><a href="'.$url.'salir">Salir</a></li>';


						}

					}

				}else{

					echo '<li><a href="#modalIngreso" data-toggle="modal">Ingresar</a></li>
						  <li>|</li>
						  <li><a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a></li>';

				}

				?>
	
				</ul>

			</div>	

		</div>	

	</div>

</div>

<!--=====================================
HEADER
======================================-->

<header class="container-fluid">
	
	<div class="container">
		
		<div class="row" id="cabezote">

			<!--=====================================
			LOGOTIPO
			======================================-->
			
			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
				
				<a href="<?php echo $url;?>">
						
					<img src="<?php echo $servidor.$social["logo"]?>" class="img-responsive">

				</a>
				
			</div>	

			<!--=====================================
			BLOQUE CATEGORÍAS Y BUSCADOR
			======================================-->

			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
					
				<!--=====================================
				BOTÓN CATEGORÍAS
				======================================-->

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">
					
					<p>CATEGORÍAS
					
						<span class="pull-right">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>
					
					</p>

				</div>

				<!--=====================================
				BUSCADOR
				======================================-->
				
				<div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
					
					<input type="search" name="buscar" class="form-control" placeholder="Buscar...">	

					<span class="input-group-btn">
						
						<a href="<?php echo $url?>buscador/1/resientes">

							<button class="btn btn-default backColor" type="submit" data-toggle="tooltip" title="buscar">
								
								<i class="fa fa-search"></i>

							</button>

						</a>

					</span>

				</div>
			
			</div>

			<!--=====================================
			CARRITO DE COMPRAS
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
				
				<a href="<?php echo $url ?>carrito-de-compras">

					<button class="btn btn-default pull-left backColor" data-toggle="tooltip" title="tu carrito"> 
						
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					
					</button>
				
				</a>	

				<p>TU CARRITO : <span class="cantidadCesta"></span> <br> COP $ : <span class="sumaCesta"></span></p>	

			</div>

		</div>

		<!--=====================================
		CATEGORÍAS
		======================================-->
		<div class="col-xs-12 backColor" id="categorias">

			<?php

				$item = null;
				$valor = null;

				$categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

				foreach ($categorias as $key => $value) {

					echo '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
							
							<h4>
								'.$value["categoria"].'
							</h4>
							
							<hr>

							<ul>';

							$item = "id_categoria";

							$valor = $value["id"];

							$subcategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
							
							foreach ($subcategorias as $key => $value) {
									
									echo '<li><a href="'.$url.$value["ruta"].'" class="pixelSubCategorias">'.$value["subcategoria"].'</a></li>';
									
								}
								
								
							echo '</ul>

						</div>';
				}

			?>	

		</div>

	</div>

</header>

<!--=====================================
VENTANA MODAL PARA EL REGISTRO
======================================-->

<div class="modal fade modalFormulario" id="modalRegistro" role="dialog">

	 <div class="modal-content modal-dialog">

        <div class="modal-header backColor modalTitulo">
 		  <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title ">REGISTRO</h4>
        
        </div>
			<!--=====================================
			REGISTRO FACEBOOK
			======================================-->

			<div class="col-sm-6 col-xs-12 facebook">
				
				<p>
				  <i class="fa fa-facebook"></i>
					Registro con Facebook
				</p>

			</div>

			<!--=====================================
			REGISTRO GOOGLE
			======================================-->
			<a href="<?php echo $rutaGoogle; ?>">

				<div class="col-sm-6 col-xs-12 google">
					
					<p>
					  <i class="fa fa-google"></i>
						Registro con Google
					</p>

				</div>
			</a>

			<!--=====================================
			REGISTRO DIRECTO
			======================================-->

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

						<input type="email" class="form-control" id="regEmail" name="regEmail" placeholder="Correo Electrónico" required>

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-lock"></i>
						
						</span>

						<input type="password" class="form-control" id="regPassword" name="regPassword" placeholder="Contraseña" required>

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


				<!--=====================================
				 CONDICIONES DE USO Y POLÍTICAS DE PRIVACIDAD
				======================================-->

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
       
        <div class="modal-footer">
          
        	¿ Ya tienes una cuenta ? | <strong><a href="#modalIngreso" data-dismiss="modal" data-toggle="modal">Ingresar</a></strong>

        </div>

    </div>

</div>

<!--=====================================
VENTANA MODAL PARA EL INGRESO
======================================-->

<div class="modal fade modalFormulario" id="modalIngreso" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-header backColor modalTitulo">
 		  <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title ">INGRESO</h4>
        
        </div>
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
				
				<input type="submit" class="btn btn-default backColor btn-block btnIngreso" value="ENVIAR">	

				<br>

				<center>
					
					<a href="#modalPassword" data-dismiss="modal" data-toggle="modal">¿Olvidaste tu contraseña?</a>

				</center>

			</form>

        

        <div class="modal-footer">
          
			¿No tienes una cuenta registrada? | <strong><a href="#modalRegistro" data-dismiss="modal" data-toggle="modal">Registrarse</a></strong>

        </div>
      
    </div>

</div>


<!--=====================================
VENTANA MODAL PARA OLVIDO DE CONTRASEÑA
======================================-->

<div class="modal fade modalFormulario" id="modalPassword" role="dialog">

    <div class="modal-content modal-dialog">


        <div class="modal-header backColor modalTitulo">
 		  <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title ">SOLICITUD DE CONTRASEÑA</h4>
        
        </div>
        	
			<!--=====================================
			OLVIDO CONTRASEÑA
			======================================-->

			<form method="post">

				<label class="text-muted">Escribe el correo electrónico con el que estás registrado y allí te enviaremos una nueva contraseña:</label>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-envelope"></i>
						
						</span>
					
						<input type="email" class="form-control" id="passEmail" name="passEmail" placeholder="Correo Electrónico" required>

					</div>

				</div>			

				<?php

					$password = new ControladorUsuarios();
					$password -> ctrOlvidoPassword();

				?>
				
				<input type="submit" class="btn btn-default backColor btn-block" value="ENVIAR">	

			</form>

        

        <div class="modal-footer">
          
			¿No tienes una cuenta registrada? | <strong><a href="#modalRegistro" data-dismiss="modal" data-toggle="modal">Registrarse</a></strong>

        </div>
      
    </div>

</div>




