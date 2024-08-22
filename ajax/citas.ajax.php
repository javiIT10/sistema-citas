<?php

require_once "../controladores/citas.controlador.php";
require_once "../modelos/citas.modelo.php";


class AjaxCitas
{

    public $idEspecialista;

    public function ajaxTraerCitas()
    {

        $valor = $this->idEspecialista;

        $respuesta = ControladorCitas::ctrMostrarCitas($valor);

        echo json_encode($respuesta);
    }
}

if (isset($_POST["idEspecialista"])) {

    $idEspecialista = new AjaxCitas();
    $idEspecialista->idEspecialista = $_POST["idEspecialista"];
    $idEspecialista->ajaxTraerCitas();
}
