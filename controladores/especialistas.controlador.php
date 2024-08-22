<?php

class ControladorEspecialistas
{

    /* =============== MOSTRAR ESPECIALISTAS POR ESPECIALIDAD =============== */

    static public function ctrMostrarEspecialistas($valor)
    {

        $tabla1 = "especialidades";
        $tabla2 = "especialistas";

        $respuesta = ModeloEspecialistas::mdlMostrarEspecialistas($tabla1, $tabla2, $valor);

        return $respuesta;
    }
}
