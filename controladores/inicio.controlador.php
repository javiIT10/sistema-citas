<?php

class ControladorInicio
{

    /* =============== MOSTRAR SECCION INICIO =============== */

    static public function ctrMostrarInicio()
    {

        $tabla = "inicio";

        $respuesta = ModeloInicio::mdlMostrarInicio($tabla);

        return $respuesta;
    }
}
