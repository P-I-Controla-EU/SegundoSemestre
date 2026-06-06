<?php
class HistoricoDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listarTodos($pessoaId)
    {
        $sql = "SELECT t.*, c.nome as categoria_nome
                FROM transacoes t
                LEFT JOIN categorias c ON t.categoria_id = c.id_categoria
                WHERE t.pessoa_id = ? AND t.deletado_em IS NULL
                ORDER BY t.data_movimentacao DESC, t.criado_em DESC";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $pessoaId);
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            $this->db = null;
            return [];
        }
    }

    public function listarPorPeriodo($pessoaId, $dataInicio, $dataFim)
    {
        $sql = "SELECT t.*, c.nome as categoria_nome
                FROM transacoes t
                LEFT JOIN categorias c ON t.categoria_id = c.id_categoria
                WHERE t.pessoa_id = ? AND t.deletado_em IS NULL
                AND t.data_movimentacao BETWEEN ? AND ?
                ORDER BY t.data_movimentacao DESC";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $pessoaId);
            $stm->bindValue(2, $dataInicio);
            $stm->bindValue(3, $dataFim);
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            $this->db = null;
            return [];
        }
    }
}
?>
