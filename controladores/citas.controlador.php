<?php

class ControladorCitas
{

    /* =============== MOSTRAR INFO CITAS =============== */

    static public function ctrMostrarCitas($valor)
    {

        $tabla1 = "especialistas";
        $tabla2 = "citas";
        $tabla3 = "especialidades";

        $respuesta = ModeloCitas::mdlMostrarCitas($tabla1, $tabla2, $tabla3, $valor);

        return $respuesta;
    }
}
