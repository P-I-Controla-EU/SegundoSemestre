<?php
class UsuarioDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function buscarPorEmail($email)
    {
        $sql = "SELECT id_pessoa, saldo, nome, cpf, data_nascimento, email, telefone, senha
                FROM pessoas WHERE email = ? AND deletado_em IS NULL";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $email);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function cadastrar($usuario)
    {
        $sql = "INSERT INTO pessoas (nome, cpf, data_nascimento, email, telefone, senha, saldo)
                VALUES (?, ?, ?, ?, ?, ?, 0)";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $usuario->getNome());
            $stm->bindValue(2, $usuario->getCpf());
            $stm->bindValue(3, $usuario->getData_nascimento());
            $stm->bindValue(4, $usuario->getEmail());
            $stm->bindValue(5, $usuario->getTelefone());
            $stm->bindValue(6, $usuario->getSenha());
            $stm->execute();
            $id = $this->db->lastInsertId();
            return $id;
        } catch (PDOException $e) {
            return "Problema ao cadastrar usuario";
        }
    }

    public function atualizarSaldo($pessoaId, $novoSaldo)
    {
        $sql = "UPDATE pessoas SET saldo = ? WHERE id_pessoa = ?";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $novoSaldo);
            $stm->bindValue(2, $pessoaId);
            $stm->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
