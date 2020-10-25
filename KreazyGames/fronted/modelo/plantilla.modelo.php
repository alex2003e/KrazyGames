<?php

require_once "conexion.php";

class ModeloPlantilla{

	static public function mdlEstiloPlantilla($tabla){

		$stmt = conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

	}

}