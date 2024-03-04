<?php

class Chat extends BaseDeDatos
{
    private $pdo;

    public $CONTENT;
    public $FK_USER;
    public $DATE;

    public function __construct()
    {
        $this->pdo = BaseDeDatos::Conectar();
    }


    public function Insertar(chat $chat)
    {
        try {
            $consulta = 'INSERT INTO `chats`( `CONTENT`, `FK_USER`, `DATE`) VALUES (?, ? , ?)';
            $consulta = $this->pdo->prepare($consulta)->execute(array(
                $chat->CONTENT,
                $chat->FK_USER,
                $chat->DATE
            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ConsultarChats(){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM chats");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            $e->getMessage();
        }
    }
}
