<?php

const NAME = "base_chat";
const HOST = "localhost";
const USER = "root";
const PASS = "";


class BaseDeDatos
{
    public static function Conectar()
    {
        $connStr =  ("mysql:host=" . HOST . ";dbname=" . NAME . ";user=" . USER . ";password=" . PASS);
        try {
            // create a mysql database connection
            $conn = new PDO($connStr);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // display a message if connected to the mysql successfully
            if ($conn) {
                return $conn;
            }
        } catch (PDOException $e) {
            // report error message
            return $e->getMessage();
        }
    }
}

