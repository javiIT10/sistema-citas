<?php

require_once "conexion.php";

class ModeloCitas
{

    /* =============== MOSTRAR INFO CITAS =============== */

    static public function mdlMostrarCitas($tabla1, $tabla2, $tabla3, $valor)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla1.*, $tabla2.*, $tabla3.* FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.especialista_id = $tabla2.idEspecialista INNER JOIN $tabla3 ON $tabla1.especialista_especialidad = $tabla3.especialidad_id  WHERE especialista_id = :especialista_id");

        $stmt->bindParam(":especialista_id", $valor, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    static public function mdlMostrarCodigoCita($tabla, $valor)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE codigoCita = :codigoCita");

        $stmt->bindParam(":codigoCita", $valor, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

        $stmt = null;
    }

    static public function mdlGuardarCita($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(cita_id_especialista, cita_id_usuario, cita_id_transaccion, cita_pago, cita_codigo, cita_descripcion, cita_fecha_seleccionada) VALUES (:cita_id_especialista, :cita_id_usuario, :cita_id_transaccion, :cita_pago, :cita_codigo, :cita_descripcion, :cita_fecha_seleccionada)");

        $stmt->bindParam(":cita_fecha_seleccionada", $datos["fecha_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":cita_id_especialista", $datos["id_especialista"], PDO::PARAM_STR);
        $stmt->bindParam(":cita_id_transaccion", $datos["id_transaccion"], PDO::PARAM_STR);
        $stmt->bindParam(":cita_descripcion", $datos["cita_descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":cita_id_usuario", $datos["id_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":cita_codigo", $datos["codigo_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":cita_pago", $datos["pago_cita"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }

        $stmt->close();
        $stmt = null;
    }
}
