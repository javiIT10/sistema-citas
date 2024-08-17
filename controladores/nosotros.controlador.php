<?php

class ControladorNosotros
{

    /* =============== MOSTRAR SECCION NOSOTROS =============== */

    static public function ctrMostrarNosotros()
    {

        $tabla = "nosotros";

        $respuesta = ModeloNosotros::mdlMostrarNosotros($tabla);

        return $respuesta;
    }
}
