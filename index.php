<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/ruta.controlador.php";

require_once "controladores/inicio.controlador.php";
require_once "modelos/inicio.modelo.php";

require_once "controladores/nosotros.controlador.php";
require_once "modelos/nosotros.modelo.php";

require_once "controladores/valores.controlador.php";
require_once "modelos/valores.modelo.php";

require_once "controladores/categorias.controlador.php";
require_once "modelos/categorias.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
