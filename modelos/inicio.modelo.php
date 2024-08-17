<?php

require_once "conexion.php";

class ModeloInicio
{

    /* =============== MOSTRAR SECCION INICIO =============== */

    static public function mdlMostrarInicio($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

        $stmt = null;
    }
}
