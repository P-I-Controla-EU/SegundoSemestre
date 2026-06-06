<?php
class ReceitaDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listarPorPessoa($pessoaId)
    {
        $sql = "SELECT t.*, c.nome as categoria_nome
                FROM transacoes t
                LEFT JOIN categorias c ON t.categoria_id = c.id_categoria
                WHERE t.pessoa_id = ? AND t.tipo = 'Receita' AND t.deletado_em IS NULL
                ORDER BY t.data_movimentacao DESC";
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

    public function inserir($pessoaId, $descricao, $valor, $data, $categoriaId, $status = "Recebido")
    {
        $sql = "INSERT INTO transacoes (pessoa_id, descricao, valor, data_movimentacao,
                categoria_id, tipo, status_transacao, recorrencia)
                VALUES (?, ?, ?, ?, ?, 'Receita', ?, false)";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $pessoaId);
            $stm->bindValue(2, $descricao);
            $stm->bindValue(3, $valor);
            $stm->bindValue(4, $data);
            $stm->bindValue(5, $categoriaId);
            $stm->bindValue(6, $status);
            $stm->execute();
            $this->db = null;
            return true;
        } catch (PDOException $e) {
            $this->db = null;
            return false;
        }
    }

    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM transacoes WHERE id_transacao = ? AND tipo = 'Receita' AND deletado_em IS NULL";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $id);
            $stm->execute();
            $this->db = null;
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            $this->db = null;
            return null;
        }
    }

    public function atualizar($id, $descricao, $valor, $data, $categoriaId, $status)
    {
        $sql = "UPDATE transacoes SET descricao = ?, valor = ?, data_movimentacao = ?,
                categoria_id = ?, status_transacao = ? WHERE id_transacao = ? AND tipo = 'Receita'";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $descricao);
            $stm->bindValue(2, $valor);
            $stm->bindValue(3, $data);
            $stm->bindValue(4, $categoriaId);
            $stm->bindValue(5, $status);
            $stm->bindValue(6, $id);
            $stm->execute();
            $this->db = null;
            return true;
        } catch (PDOException $e) {
            $this->db = null;
            return false;
        }
    }

    public function deletar($id)
    {
        $sql = "UPDATE transacoes SET deletado_em = NOW() WHERE id_transacao = ? AND tipo = 'Receita'";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $id);
            $stm->execute();
            $this->db = null;
            return true;
        } catch (PDOException $e) {
            $this->db = null;
            return false;
        }
    }

    public function totalDoMes($pessoaId)
    {
        $sql = "SELECT COALESCE(SUM(valor), 0) as total
                FROM transacoes
                WHERE pessoa_id = ? AND tipo = 'Receita'
                AND MONTH(data_movimentacao) = MONTH(CURDATE())
                AND YEAR(data_movimentacao) = YEAR(CURDATE())
                AND deletado_em IS NULL";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $pessoaId);
            $stm->execute();
            $this->db = null;
            return $stm->fetch(PDO::FETCH_OBJ)->total;
        } catch (PDOException $e) {
            $this->db = null;
            return 0;
        }
    }
}
?>
