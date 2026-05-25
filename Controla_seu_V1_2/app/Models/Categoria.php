<?php

namespace App\Models;

final class Categoria extends Model
{
    protected string $table = 'categorias';

    private $idCategoria;
    private $nome;
    private $descricao;
    private $criadoEm;
    private $atualizadoEm;
    private $deletadoEm;

    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
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
