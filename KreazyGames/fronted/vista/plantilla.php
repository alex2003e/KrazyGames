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

	<script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed&display=swap" rel="stylesheet">
	
<!--=====================================
	HOJAS DE ESTILO PERSONALIZADAS
======================================-->
	
<link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/plantilla.css">
<link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/styles.css">
<link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/plugins/flexslider.css">
<link rel="stylesheet" href="<?php echo $url; ?>vista/assets/css/plugins/sweetalert.css">


	
<!--=====================================
	SCRIPTS PLUGINS
======================================-->
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="<?php echo $url;?>vista/assets/js/plugins/jqBootstrapValidation.js"></script>
<script src="<?php echo $url;?>vista/assets/js/plugins/contact_me.js"></script>
<script src="<?php echo $url;?>vista/assets/js/plugins/jquery.flexslider.js"></script>
<script src="<?php echo $url;?>vista/assets/js/plugins/sweetalert.min.js"></script>



		


</head>




<body id="page-top">

<?php

include "modulos/cabezote.Empresa.php";

include "modulos/infoEmpresa.php";
	
include "modulos/footer.php";
	
	

?>




		
<!--=====================================
 SCRIPTS PERSONALIZADOS	        
======================================-->


<script src="<?php echo $url; ?>vista/assets/js/scripts.js"></script>
<script src="<?php echo $url; ?>vista/assets/js/ubicacion.js"></script>


</body>
</html>