<?php

class ControladorValores
{

    /* =============== MOSTRAR SECCION VALORES =============== */

    static public function ctrMostrarValores()
    {

        $tabla = "valores";

        $respuesta = ModeloValores::mdlMostrarValores($tabla);

        return $respuesta;
    }
}
