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
        $chats = $this->modelo->ConsultarChats();

        // Codificar los datos en formato JSON
        $json_data = json_encode($chats);

        // Escribir los datos codificados en un archivo
        $archivo = 'chats.json';
        file_put_contents($archivo, $json_data);

        // Leer el archivo JSON y decodificar los datos en PHP
        $json_data = file_get_contents($archivo);
        $chats = json_decode($json_data);

        // Mostrar los mensajes
        if ($chats) {
            foreach ($chats as $fila) {
                echo $fila->CONTENT . "<br>" . $fila->FECHA . "<br>";
            }
        } else {
            echo "No se encontraron mensajes";
        }
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
