<?php
require_once('modelos/chat.php');
class ChatControlador
{
    private $modelo;
    public function __construct()
    {
        $this->modelo = new Chat();
    }

    public function Consultar()
    {
        $this->modelo = new Chat();
        echo json_encode($this->modelo->ConsultarChats());
    }


    public function enviarMensaje()
    {
        $message = $_POST['message'];
        $user = $_POST['user'];
        $date = date('Y-m-d');
        $chat = new Chat();
        $this->modelo = new Chat();
        $chat->CONTENT = $message = filter_var($message, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $chat->FK_USER = $user;
        $chat->DATE = $date;
        $this->modelo->Insertar($chat);
    }
}
