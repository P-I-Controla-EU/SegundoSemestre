<?php
class CategoriaDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listar()
    {
        $sql = "SELECT id_categoria, nome, descricao, criado_em
                FROM categorias WHERE deletado_em IS NULL ORDER BY nome";
        try {
            $stm = $this->db->prepare($sql);
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            $this->db = null;
            return [];
        }
    }

    public function inserir($categoria)
    {
        $sql = "INSERT INTO categorias (nome, descricao) VALUES (?, ?)";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $categoria->getNome());
            $stm->bindValue(2, $categoria->getDescricao());
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
        $sql = "UPDATE categorias SET deletado_em = NOW() WHERE id_categoria = ?";
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
}
?>
