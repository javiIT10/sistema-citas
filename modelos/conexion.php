<?php

class Conexion
{

    static public function conectar()
    {

        // Conectar a la base de datos
        $link = new PDO(
            "mysql:host=localhost;dbname=sistema-citas",
            "root",
            ""
        );

        // Definir el utf8 para los simbolos latinos
        $link->exec("set names utf8");

        // Retornamos la conexion
        return $link;
    }
}
