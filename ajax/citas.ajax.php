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


    public $codigoCita;

    public function ajaxTraerCodigoCita()
    {

        $valor = $this->codigoCita;

        $respuesta = ControladorCitas::ctrMostrarCodigoCita($valor);

        echo json_encode($respuesta);
    }
}

if (isset($_POST["codigoCita"])) {

    $codigoCita = new AjaxCitas();
    $codigoCita->codigoCita = $_POST["codigoCita"];
    $codigoCita->ajaxTraerCodigoCita();
}

if (isset($_POST["idEspecialista"])) {

    $idEspecialista = new AjaxCitas();
    $idEspecialista->idEspecialista = $_POST["idEspecialista"];
    $idEspecialista->ajaxTraerCitas();
}
