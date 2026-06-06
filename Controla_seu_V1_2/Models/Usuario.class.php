<?php
class Usuario
{
    private $id_pessoa;
    private $saldo;
    private $nome;
    private $cpf;
    private $data_nascimento;
    private $email;
    private $telefone;
    private $senha;

    public function __construct(
        $id_pessoa = 0, $nome = "", $cpf = "", $data_nascimento = "",
        $email = "", $telefone = "", $senha = "", $saldo = 0.0
    ) {
        $this->id_pessoa = $id_pessoa;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->data_nascimento = $data_nascimento;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->senha = $senha;
        $this->saldo = $saldo;
    }

    public function getId_pessoa() { return $this->id_pessoa; }
    public function setId_pessoa($id) { $this->id_pessoa = $id; }

    public function getSaldo() { return $this->saldo; }
    public function setSaldo($saldo) { $this->saldo = $saldo; }

    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }

    public function getCpf() { return $this->cpf; }
    public function setCpf($cpf) { $this->cpf = $cpf; }

    public function getData_nascimento() { return $this->data_nascimento; }
    public function setData_nascimento($data) { $this->data_nascimento = $data; }

    public function getEmail() { return $this->email; }
    public function setEmail($email) { $this->email = $email; }

    public function getTelefone() { return $this->telefone; }
    public function setTelefone($telefone) { $this->telefone = $telefone; }

    public function getSenha() { return $this->senha; }
    public function setSenha($senha) { $this->senha = $senha; }
}
?>
