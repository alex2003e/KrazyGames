<?php 

$servidor = Ruta::ctrRutaServidor();
$url = Ruta::ctrRuta();

$social = ControladorPlantilla::ctrEstiloPlantilla();

$jsonRedesSociales = json_decode($social["redesSociales"],true);

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



<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo $url;?>">

            <img src="<?php echo $servidor.$social["logo"];?>" class="img-responsive">

		</a>
		<button class="navbar-toggler navbar-toggle1r-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menú	<i class="fas fa-bars ml-1"></i>
		</button>
        <div class="collapse navbar-collapse  "  id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
			   
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Productos</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Nuestra Empresa</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Sobre Nosotros</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contáctenos</a></li>
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

							echo '<li class="nav-link" >|</li>
							 <li><a class="nav-link js-scroll-trigger" href="http://localhost:8080/kreazyGames-tienda/fronted/perfil">Perfil</a></li>
							 <li class="nav-link" >|</li>
							 <li><a  class="nav-link js-scroll-trigger" href="http://localhost:8080/kreazyGames-tienda/fronted/salir">Salir</a></li>';


						}

					}

				}else{

					echo '<li class="nav-item"><a class="nav-link" href="vista/modulos/ingreso.php"  >Ingresar</a></li>
                         <li class="nav-item"><a class="nav-link" href="vista/modulos/registro.php"  >Registrate</a></li>';

				}

				?>
                
			                

            </ul>
        </div>
    </div>
</nav>

<header class="masthead">

<div class="container">

    <div class="masthead-subheading">
		¡Bienvenido a nuestra pagina oficial!
	</div>

    <div class="masthead-heading text-uppercase">
		ENCANTADO DE CONOCERTE
	</div>
    
	<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Adelante</a>

</div>

</header>