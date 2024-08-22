<?php

require_once "conexion.php";

class ModeloEspecialidades
{

    /* =============== MOSTRAR ESPECIALIDADES =============== */

    static public function mdlMostrarEspecialidades($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}
