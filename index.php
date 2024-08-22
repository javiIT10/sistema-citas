<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/ruta.controlador.php";

require_once "controladores/inicio.controlador.php";
require_once "modelos/inicio.modelo.php";

require_once "controladores/nosotros.controlador.php";
require_once "modelos/nosotros.modelo.php";

require_once "controladores/valores.controlador.php";
require_once "modelos/valores.modelo.php";

require_once "controladores/especialidades.controlador.php";
require_once "modelos/especialidades.modelo.php";

require_once "controladores/especialistas.controlador.php";
require_once "modelos/especialistas.modelo.php";

require_once "controladores/citas.controlador.php";
require_once "modelos/citas.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
