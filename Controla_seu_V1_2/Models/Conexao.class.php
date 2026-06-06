<?php
class Conexao{

    public function __construct(public $db = null){
        $parametros = "mysql:host=localhost;dbname=controlaseu_db;charset=utf8mb4";
        try{
            $this->db = new PDO($parametros, "root", "");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            die("Erro na conexao: " . $e->getMessage());
        }
    }
}
?>
