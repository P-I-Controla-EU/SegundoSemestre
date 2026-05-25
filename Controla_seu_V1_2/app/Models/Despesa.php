<?php

namespace App\Models;

final class Despesa extends Model
{
    protected string $table = 'transacoes';
    protected string $tipo = 'Despesa';

    private $idTransacao;
    private $pessoaId;
    private $descricao;
    private $valor;
    private $dataMovimentacao;
    private $categoriaId;
    private $statusTransacao;
    private $recorrencia;
    private $metaId;
    private $dataTermino;
    private $dataCobrancaRec;
    private $criadoEm;
    private $atualizadoEm;
    private $deletadoEm;

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getIdTransacao()
    {
        return $this->idTransacao;
    }

    public function setIdTransacao($idTransacao)
    {
        $this->idTransacao = $idTransacao;
    }

    public function getPessoaId()
    {
        return $this->pessoaId;
    }

    public function setPessoaId($pessoaId)
    {
        $this->pessoaId = $pessoaId;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getDataMovimentacao()
    {
        return $this->dataMovimentacao;
    }

    public function setDataMovimentacao($dataMovimentacao)
    {
        $this->dataMovimentacao = $dataMovimentacao;
    }

    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = $categoriaId;
    }

    public function getStatusTransacao()
    {
        return $this->statusTransacao;
    }

    public function setStatusTransacao($statusTransacao)
    {
        $this->statusTransacao = $statusTransacao;
    }

    public function getRecorrencia()
    {
        return $this->recorrencia;
    }

    public function setRecorrencia($recorrencia)
    {
        $this->recorrencia = $recorrencia;
    }

    public function getMetaId()
    {
        return $this->metaId;
    }

    public function setMetaId($metaId)
    {
        $this->metaId = $metaId;
    }

    public function getDataTermino()
    {
        return $this->dataTermino;
    }

    public function setDataTermino($dataTermino)
    {
        $this->dataTermino = $dataTermino;
    }

    public function getDataCobrancaRec()
    {
        return $this->dataCobrancaRec;
    }

    public function setDataCobrancaRec($dataCobrancaRec)
    {
        $this->dataCobrancaRec = $dataCobrancaRec;
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
