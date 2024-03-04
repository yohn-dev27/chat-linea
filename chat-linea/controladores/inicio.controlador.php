<?php

class Iniciocontrolador extends Inicio
{
    private $inicio;
    public function __construct()
    {
        $this->inicio = new Inicio();
    }

    public function Inicio()
    {
        require_once("vistas/encabezado.php");
        $data_title = 'Aprende a tocar el piano';
        $data_content = 'Bienvenido';
        $data_info = 'Hola futuro artista, nos place tenerte acá, para más información comunícate al chat.';
        require_once("vistas/principal/index.php");
        require_once("vistas/pie.php");
    }


    public function Chat()
    {
        $inicioData = new Inicio();
        $inicioData->ConsultarInstrumentos(); 
        $data_header = 'Hablá con tus mentores';
        $data_request = 'Antes de iniciar el chat te pediremos los siguientes datos';
        require_once("vistas/encabezado.php");
        require_once("vistas/chat/index.php");
        require_once("vistas/pie.php");
        require_once("vistas/chat/script.php");
    }
}
