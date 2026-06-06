<?php
class Notificacao
{
    private $idNotificacao;
    private $pessoaId;
    private $mensagem;
    private $tipo;
    private $lida;
    private $criadoEm;

    public function __construct($idNotificacao = 0, $pessoaId = 0, $mensagem = "", $tipo = "") {
        $this->idNotificacao = $idNotificacao;
        $this->pessoaId = $pessoaId;
        $this->mensagem = $mensagem;
        $this->tipo = $tipo;
    }

    public function getIdNotificacao() { return $this->idNotificacao; }
    public function setIdNotificacao($idNotificacao) { $this->idNotificacao = $idNotificacao; }

    public function getPessoaId() { return $this->pessoaId; }
    public function setPessoaId($pessoaId) { $this->pessoaId = $pessoaId; }

    public function getMensagem() { return $this->mensagem; }
    public function setMensagem($mensagem) { $this->mensagem = $mensagem; }

    public function getTipo() { return $this->tipo; }
    public function setTipo($tipo) { $this->tipo = $tipo; }

    public function getLida() { return $this->lida; }
    public function setLida($lida) { $this->lida = $lida; }

    public function getCriadoEm() { return $this->criadoEm; }
    public function setCriadoEm($criadoEm) { $this->criadoEm = $criadoEm; }
}
?>
