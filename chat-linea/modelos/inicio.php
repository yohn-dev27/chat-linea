<?php 
class Inicio extends BaseDeDatos{

    private $pdo;

    public function __construct(){
        $this->pdo =  Basededatos::Conectar();
    }

    public function ConsultarInstrumentos(){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM instrument");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            $e->getMessage();
        }
    }
}