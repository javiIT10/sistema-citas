<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/ruta.controlador.php";

require_once "controladores/inicio.controlador.php";
require_once "modelos/inicio.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
