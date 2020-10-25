<?php

require_once "controladores/plantilla_controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/slide.controlador.php";
require_once "controladores/usuarios.controlador.php";


require_once "modelo/plantilla.modelo.php";
require_once "modelo/productos.modelo.php";
require_once "modelo/slide.modelo.php";
require_once "modelo/usuarios.modelo.php";


require_once "modelo/rutas.php";
require_once "vista/assets/PHPMailer/PHPMailerAutoload.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();