<?php

namespace App\Models;

final class Planos extends Model
{
    protected string $table = 'planos';

    private $idPlano;
    private $nome;
    private $beneficios;
    private $valorPeriodo;
    private $periodo;
    private $statusAssinatura;
    private $criadoEm;
    private $atualizadoEm;
    private $deletadoEm;

    public function getIdPlano()
    {
        return $this->idPlano;
    }

    public function setIdPlano($idPlano)
    {
        $this->idPlano = $idPlano;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getBeneficios()
    {
        return $this->beneficios;
    }

    public function setBeneficios($beneficios)
    {
        $this->beneficios = $beneficios;
    }

    public function getValorPeriodo()
    {
        return $this->valorPeriodo;
    }

    public function setValorPeriodo($valorPeriodo)
    {
        $this->valorPeriodo = $valorPeriodo;
    }

    public function getPeriodo()
    {
        return $this->periodo;
    }

    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;
    }

    public function getStatusAssinatura()
    {
        return $this->statusAssinatura;
    }

    public function setStatusAssinatura($statusAssinatura)
    {
        $this->statusAssinatura = $statusAssinatura;
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
