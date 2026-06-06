<?php
require_once "Models/Conexao.class.php";

class PagamentoController
{
    private function verificarAuth()
    {
        if (!isset($_SESSION["id_pessoa"])) {
            header("Location: index.php?controle=AuthController&metodo=login");
            exit;
        }
    }

    public function index()
    {
        $this->verificarAuth();
        require_once "Views/pagamento/index.php";
    }
}
?>
