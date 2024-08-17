<?php

require_once "conexion.php";

class ModeloValores
{

    /* =============== MOSTRAR SECCION VALORES =============== */

    static public function mdlMostrarValores($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}
