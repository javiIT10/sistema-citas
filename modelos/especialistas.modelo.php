<?php

require_once "conexion.php";

class ModeloEspecialistas
{

    /* =============== MOSTRAR ESPECIALISTAS POR ESPECIALIDAD =============== */

    static public function mdlMostrarEspecialistas($tabla1, $tabla2, $valor)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla1.*, $tabla2.* FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.especialidad_id = $tabla2.especialista_especialidad WHERE especialidad_ruta = :especialidad_ruta");

        $stmt->bindParam(":especialidad_ruta", $valor, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}
