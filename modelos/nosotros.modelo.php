<?php

require_once "conexion.php";

class ModeloNosotros
{

    /* =============== MOSTRAR SECCION NOSOTROS =============== */

    static public function mdlMostrarNosotros($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

        $stmt = null;
    }
}
