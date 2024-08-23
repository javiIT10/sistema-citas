<?php

require_once "conexion.php";

class ModeloCitas
{

    /* =============== MOSTRAR INFO CITAS =============== */

    static public function mdlMostrarCitas($tabla1, $tabla2, $tabla3, $valor)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla1.*, $tabla2.*, $tabla3.* FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.especialista_id = $tabla2.cita_id_especialista INNER JOIN $tabla3 ON $tabla1.especialista_especialidad = $tabla3.especialidad_id  WHERE especialista_id = :especialista_id");

        $stmt->bindParam(":especialista_id", $valor, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    static public function mdlMostrarCodigoCita($tabla, $valor)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE cita_codigo = :cita_codigo");

        $stmt->bindParam(":cita_codigo", $valor, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

        $stmt = null;
    }
}
