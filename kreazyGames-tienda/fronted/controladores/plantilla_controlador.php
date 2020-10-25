<?php

class ControladorPlantilla{

/*=============================================
=          LLAMADA PLANTILLA                  =
===============================================*/
	public function plantilla(){

		include "vista/plantilla.php";

	}

/*=============================================
=       ESTILOS DINAMECOS DE PLANTILLA        =
===============================================*/
	public function ctrEstiloPlantilla(){
		
		$tabla = "plantilla";

		$respuesta = modeloPlantilla::mdlEstiloPlantilla($tabla);

		return $respuesta;
	}

}