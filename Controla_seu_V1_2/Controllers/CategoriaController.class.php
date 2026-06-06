<?php
require_once "Models/Conexao.class.php";
require_once "Models/Categoria.class.php";
require_once "Models/CategoriaDAO.class.php";

class CategoriaController
{
    private function verificarAuth()
    {
        if (!isset($_SESSION["id_pessoa"])) {
            header("Location: index.php?controle=AuthController&metodo=login");
            exit;
        }
    }

    public function index()
    {
        $this->verificarAuth();
        $categoriaDAO = new CategoriaDAO();
        $categorias = $categoriaDAO->listar();
        require "Views/categoria/index.php";
    }

    public function criar()
    {
        $this->verificarAuth();
        $nome = trim($_POST["nome"] ?? "");
        $descricao = trim($_POST["descricao"] ?? "");

        if (empty($nome)) {
            $erro = "O nome da categoria e obrigatorio.";
            $categoriaDAO = new CategoriaDAO();
            $categorias = $categoriaDAO->listar();
            require "Views/categoria/index.php";
            return;
        }

        $categoria = new Categoria(0, $nome, $descricao);
        $categoriaDAO = new CategoriaDAO();

        if ($categoriaDAO->inserir($categoria)) {
            header("Location: index.php?controle=CategoriaController&metodo=index");
            exit;
        } else {
            $erro = "Erro ao criar categoria.";
            $categorias = $categoriaDAO->listar();
            require "Views/categoria/index.php";
        }
    }

    public function deletar()
    {
        $this->verificarAuth();
        $id = intval($_GET["id"] ?? 0);
        if ($id > 0) {
            $categoriaDAO = new CategoriaDAO();
            $categoriaDAO->deletar($id);
        }
        header("Location: index.php?controle=CategoriaController&metodo=index");
        exit;
    }
}
?>
