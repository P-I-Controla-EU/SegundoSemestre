<?php

namespace App\Models;

final class Pagamento extends Model
{
    protected string $table = 'pagamentos';

    private $idPagamento;
    private $assinaturaId;
    private $dataPagamento;
    private $formaPagamento;
    private $statusPagamento;
    private $idExterno;
    private $criadoEm;
    private $atualizadoEm;
    private $deletadoEm;

    public function getIdPagamento()
    {
        return $this->idPagamento;
    }

    public function setIdPagamento($idPagamento)
    {
        $this->idPagamento = $idPagamento;
    }

    public function getAssinaturaId()
    {
        return $this->assinaturaId;
    }

    public function setAssinaturaId($assinaturaId)
    {
        $this->assinaturaId = $assinaturaId;
    }

    public function getDataPagamento()
    {
        return $this->dataPagamento;
    }

    public function setDataPagamento($dataPagamento)
    {
        $this->dataPagamento = $dataPagamento;
    }

    public function getFormaPagamento()
    {
        return $this->formaPagamento;
    }

    public function setFormaPagamento($formaPagamento)
    {
        $this->formaPagamento = $formaPagamento;
    }

    public function getStatusPagamento()
    {
        return $this->statusPagamento;
    }

    public function setStatusPagamento($statusPagamento)
    {
        $this->statusPagamento = $statusPagamento;
    }

    public function getIdExterno()
    {
        return $this->idExterno;
    }

    public function setIdExterno($idExterno)
    {
        $this->idExterno = $idExterno;
    }

    public function getCriadoEm()
    {
        return $this->criadoEm;
    }

    public function setCriadoEm($criadoEm)
    {
        $this->criadoEm = $criadoEm;
    }

    public function getAtualizadoEm()
    {
        return $this->atualizadoEm;
    }

    public function setAtualizadoEm($atualizadoEm)
    {
        $this->atualizadoEm = $atualizadoEm;
    }

    public function getDeletadoEm()
    {
        return $this->deletadoEm;
    }

    public function setDeletadoEm($deletadoEm)
    {
        $this->deletadoEm = $deletadoEm;
    }
}
