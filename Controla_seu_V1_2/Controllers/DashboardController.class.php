<?php
require_once "Models/Conexao.class.php";
require_once "Models/ReceitaDAO.class.php";
require_once "Models/DespesaDAO.class.php";
require_once "Models/UsuarioDAO.class.php";
require_once "Models/MetaDAO.class.php";

class DashboardController
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

        $receitaDAO = new ReceitaDAO();
        $totalReceitas = $receitaDAO->totalDoMes($pessoaId);

        $despesaDAO = new DespesaDAO();
        $totalDespesas = $despesaDAO->totalDoMes($pessoaId);

        $saldoMes = $totalReceitas - $totalDespesas;

        $conexao = new Conexao();

        $sql = "SELECT t.*, c.nome as categoria_nome
                FROM transacoes t
                LEFT JOIN categorias c ON t.categoria_id = c.id_categoria
                WHERE t.pessoa_id = ? AND t.deletado_em IS NULL
                ORDER BY t.data_movimentacao DESC LIMIT 10";
        $stm = $conexao->db->prepare($sql);
        $stm->bindValue(1, $pessoaId);
        $stm->execute();
        $transacoesRecentes = $stm->fetchAll(PDO::FETCH_OBJ);

        $sqlReceitas = "SELECT t.*, c.nome as categoria_nome
                FROM transacoes t
                LEFT JOIN categorias c ON t.categoria_id = c.id_categoria
                WHERE t.pessoa_id = ? AND t.deletado_em IS NULL AND t.tipo = 'Receita'
                ORDER BY t.data_movimentacao DESC LIMIT 5";
        $stmR = $conexao->db->prepare($sqlReceitas);
        $stmR->bindValue(1, $pessoaId);
        $stmR->execute();
        $ultimasReceitas = $stmR->fetchAll(PDO::FETCH_OBJ);

        $sqlDespesas = "SELECT t.*, c.nome as categoria_nome
                FROM transacoes t
                LEFT JOIN categorias c ON t.categoria_id = c.id_categoria
                WHERE t.pessoa_id = ? AND t.deletado_em IS NULL AND t.tipo = 'Despesa'
                ORDER BY t.data_movimentacao DESC LIMIT 5";
        $stmD = $conexao->db->prepare($sqlDespesas);
        $stmD->bindValue(1, $pessoaId);
        $stmD->execute();
        $ultimasDespesas = $stmD->fetchAll(PDO::FETCH_OBJ);

        $sqlGrafico = "SELECT DATE_FORMAT(data_movimentacao, '%Y-%m-%d') as dia,
                              SUM(CASE WHEN tipo = 'Receita' THEN valor ELSE 0 END) as receitas,
                              SUM(CASE WHEN tipo = 'Despesa' THEN valor ELSE 0 END) as despesas
                       FROM transacoes
                       WHERE pessoa_id = ? AND deletado_em IS NULL
                       AND DATE_FORMAT(data_movimentacao, '%Y-%m') = DATE_FORMAT(CURDATE(), '%Y-%m')
                       GROUP BY dia ORDER BY dia";
        $stmG = $conexao->db->prepare($sqlGrafico);
        $stmG->bindValue(1, $pessoaId);
        $stmG->execute();
        $dadosGrafico = $stmG->fetchAll(PDO::FETCH_OBJ);

        $sqlTotais = "SELECT
                          SUM(CASE WHEN tipo = 'Receita' THEN valor ELSE 0 END) as total_receitas,
                          SUM(CASE WHEN tipo = 'Despesa' THEN valor ELSE 0 END) as total_despesas
                      FROM transacoes
                      WHERE pessoa_id = ? AND deletado_em IS NULL";
        $stmT = $conexao->db->prepare($sqlTotais);
        $stmT->bindValue(1, $pessoaId);
        $stmT->execute();
        $totais = $stmT->fetch(PDO::FETCH_OBJ);
        $totalReceitasGeral = floatval($totais->total_receitas ?? 0);
        $totalDespesasGeral = floatval($totais->total_despesas ?? 0);

        $saldoGeral = $totalReceitasGeral - $totalDespesasGeral;

        $metaDAO = new MetaDAO();
        $metas = $metaDAO->listar($pessoaId);
        $totalReservadoMetas = 0;
        foreach ($metas as $m) {
            if ($m->status_meta === "Em andamento") {
                $totalReservadoMetas += floatval($m->valor_atual);
            }
        }

        $conexao->db = null;

        require "Views/dashboard/index.php";
    }

    public function definirSaldo()
    {
        $_SESSION["mensagem_erro"] = "O saldo agora e calculado automaticamente com base nas receitas e despesas.";
        header("Location: index.php?controle=DashboardController&metodo=index");
        exit;
    }
}
?>
