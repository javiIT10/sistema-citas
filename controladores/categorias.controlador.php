<?php

class ControladorCategorias
{

    /* =============== MOSTRAR CATEGORIAS =============== */

    static public function ctrMostrarCategorias()
    {

        $tabla = "categorias";

        $respuesta = ModeloCategorias::mdlMostrarCategorias($tabla);

        return $respuesta;
    }
}
