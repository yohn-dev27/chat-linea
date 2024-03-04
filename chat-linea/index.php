<?php
date_default_timezone_set('America/Bogota');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "modelos/basededatos.php";
require_once "modelos/inicio.php";


    if (!isset($_GET['c'])) {
        require_once "controladores/inicio.controlador.php";
        $controlador = new Iniciocontrolador();
        call_user_func(array($controlador, "Inicio"));
    } else {
        $controlador = $_GET['c'];
        $action = isset($_GET['a']) ? $_GET['a'] : "Inicio";
        if (!file_exists("controladores/$controlador.controlador.php")) {
            require_once "vistas/encabezado.php";
            require_once "vistas/404.php";
            require_once "vistas/pie.php";
            exit;
        }
        $actionurl = isset($_GET['a']) ? "&a=" . $_GET['a'] : "";
        require_once "controladores/$controlador.controlador.php";
        $controlador = ucwords($controlador) . "Controlador";
        $controlador = new $controlador;
        call_user_func(array($controlador, $action));
    }

