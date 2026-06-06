<?php
require_once "Models/Conexao.class.php";
require_once "Models/HistoricoDAO.class.php";

class HistoricoController
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
        $pessoaId = $_SESSION["id_pessoa"];
        $historicoDAO = new HistoricoDAO();

        $dataInicio = $_GET["data_inicio"] ?? date("Y-m-01");
        $dataFim = $_GET["data_fim"] ?? date("Y-m-t");

        $transacoes = $historicoDAO->listarPorPeriodo($pessoaId, $dataInicio, $dataFim);
        require "Views/historico/index.php";
    }
}
?>
