<?php

class ControladorServicios
{

    /* =============== MOSTRAR SERVICIOS POR CATEGORIA =============== */

    static public function ctrMostrarServicios($valor)
    {

        $tabla1 = "categorias";
        $tabla2 = "servicios";

        $respuesta = ModeloServicios::mdlMostrarServicios($tabla1, $tabla2, $valor);

        return $respuesta;
    }
}
