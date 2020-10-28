<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

<meta name="viewpor" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<meta name="title" content="Krazy Games">

<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error dolorum eius similique .">


<meta name="keyword" content="Lorem ipsum dolor sit amet, consectetur adipisicing, elit, Error dolorum,eius similique .">

	<title>Kreazy Games</title>
	<?php
		/*=============================================
		=       MANTENER LA RUTA                      =
		===============================================*/

	session_start();

	$url = Ruta::ctrRuta();

	$servidor = Ruta::ctrRutaServidor();
	
	$icono = ControladorPlantilla::ctrEstiloPlantilla();

echo '<link rel="shortcut icon" href="'.$url.$icono["icono"].'">';





	



	?>
	<!--=====================================
			HOJAS DE STILO PLUGINS
	======================================-->
	
	<!-- PLUGINS -->
	<link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/plugins/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/plugins/flexslider.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/plugins/sweetalert.css">

	
	<!-- PLUGINS-WEB'S -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed&display=swap" rel="stylesheet">
	
	<!--=====================================
		HOJAS DE ESTILO PERSONALIZADAS
	======================================-->
	
	<link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/plantilla.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/cabezote.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/slide.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/productos.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/infoproducto.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/perfil.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/carrito-de-compras.css">


    
   



	
	<!--=====================================
			SCRIPTS PLUGINS
	======================================-->
	
	<script src="<?php echo $url; ?>vista/assets/js/plugins/jquery.min.js"></script>
	<script src="<?php echo $url; ?>vista/assets/js/plugins/bootstrap.min.js"></script>
	<script src="<?php echo $url; ?>vista/assets/js/plugins/jquery.easing.js"></script>
	<script src="<?php echo $url; ?>vista/assets/js/plugins/jquery.scrollUp.js"></script>
	<script src="<?php echo $url; ?>vista/assets/js/plugins/jquery.flexslider.js"></script>
	<script src="<?php echo $url; ?>vista/assets/js/plugins/sweetalert.min.js"></script>

    






		


</head>
<body>
<?php

/*=============================================
=         		 cabezote                  =
=============================================*/

include "modulos/cabezote.php";


/*=============================================
CONTENIDO DINÁMICO
============================================= */
$rutas = array();
$ruta = null;
$infoProducto = null;

if(isset($_GET["ruta"])){

	$rutas = explode("/", $_GET["ruta"]);

	$item = "ruta";
	$valor =  $rutas[0];

	/*=============================================
	URL'S AMIGABLES DE CATEGORÍAS
	=============================================*/

	$rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

	if($rutas[0] == $rutaCategorias["ruta"]){

		$ruta = $rutas[0];

	}

	/*=============================================
	URL'S AMIGABLES DE SUBCATEGORÍAS
	=============================================*/

	$rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);

	foreach ($rutaSubCategorias as $key => $value) {
		
		if($rutas[0] == $value["ruta"]){

			$ruta = $rutas[0];

		}

	}

	/*=============================================
	URL'S AMIGABLES DE PRODUCTOS
	=============================================*/

	$rutaProductos = ControladorProductos::ctrMostrarInfoProducto($item, $valor);
	
	if($rutas[0] == $rutaProductos["ruta"]){

		$infoProducto = $rutas[0];

	}

	/*=============================================
	LISTA BLANCA DE URL'S AMIGABLES
	=============================================*/

	if($ruta != null || $rutas[0] == "articulos-gratis" || $rutas[0] == "lo-mas-vendido" || $rutas[0] == "lo-mas-visto"){

		include "modulos/productos.php";

	}else if($infoProducto != null){

		include "modulos/infoproducto.php";

	}else if($infoProducto != null){

		include "modulos/empresa.php";
		
	}else if($rutas[0] == "buscador"||$rutas[0] == "verificar"|| $rutas[0]=="salir"|| $rutas[0]=="perfil"|| $rutas[0]=="carrito-de-compras"){

		include "modulos/".$rutas[0].".php";

	}else{

		include "modulos/error404.php";

	}

}else{

	include "modulos/slide.php";

	include "modulos/destacados.php";

}
/*===========================================
=         		 FOOTER                     =
=============================================*/	

 include "modulos/footer.php";

?>
<input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">		
<!--=====================================
 SCRIPTS PERSONALIZADOS	        
======================================-->
<script src="<?php echo $url; ?>vista/assets/js/cabezote.js"></script>
<script src="<?php echo $url; ?>vista/assets/js/plantilla.js"></script>
<script src="<?php echo $url; ?>vista/assets/js/usuarios.js"></script>
<script src="<?php echo $url; ?>vista/assets/js/slide.js"></script>
<script src="<?php echo $url; ?>vista/assets/js/buscador.js"></script>
<script src="<?php echo $url; ?>vista/assets/js/infroproducto.js"></script>
<script src="<?php echo $url; ?>vista/assets/js/ubicacion.js"></script>
<script src="<?php echo $url; ?>vista/assets/js/registroFacebook.js"></script>
<script src="<?php echo $url; ?>vista/assets/js/carrito-de-compras.js"></script>



<!-- <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '773156199930563',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.10'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script> -->


</body>
</html>