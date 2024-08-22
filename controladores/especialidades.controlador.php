<?php

class ControladorEspecialidades
{

    /* =============== MOSTRAR ESPECIALIDADES =============== */

    static public function ctrMostrarEspecialidades()
    {

        $tabla = "especialidades";

        $respuesta = ModeloEspecialidades::mdlMostrarEspecialidades($tabla);

        return $respuesta;
    }
}
