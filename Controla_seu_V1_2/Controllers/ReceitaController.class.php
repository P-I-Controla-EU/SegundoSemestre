<?php
require_once "Models/Conexao.class.php";
require_once "Models/Receita.class.php";
require_once "Models/ReceitaDAO.class.php";
require_once "Models/CategoriaDAO.class.php";

class ReceitaController
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
        $pessoaId = $_SESSION["id_pessoa"];
        $receitaDAO = new ReceitaDAO();
        $receitas = $receitaDAO->listarPorPessoa($pessoaId);
        $categoriaDAO = new CategoriaDAO();
        $categorias = $categoriaDAO->listar();
        require "Views/receita/index.php";
    }

    public function editar()
    {
        $this->verificarAuth();
        $pessoaId = $_SESSION["id_pessoa"];
        $id = intval($_GET["id"] ?? 0);

        $receitaDAO = new ReceitaDAO();
        $receita = $receitaDAO->buscarPorId($id);
        if (!$receita || $receita->pessoa_id != $pessoaId) {
            header("Location: index.php?controle=ReceitaController&metodo=index");
            exit;
        }

        $receitas = (new ReceitaDAO())->listarPorPessoa($pessoaId);
        $categoriaDAO = new CategoriaDAO();
        $categorias = $categoriaDAO->listar();
        $editarReceita = $receita;
        require "Views/receita/index.php";
    }

    public function atualizar()
    {
        $this->verificarAuth();
        $pessoaId = $_SESSION["id_pessoa"];
        $id = intval($_POST["id"] ?? 0);
        $descricao = trim($_POST["descricao"] ?? "");
        $valor = floatval($_POST["valor"] ?? 0);
        $data = $_POST["data"] ?? date("Y-m-d");
        $categoriaId = intval($_POST["categoria_id"] ?? 0);
        $status = $_POST["status"] ?? "Recebido";

        if (empty($descricao) || $valor <= 0 || $categoriaId <= 0) {
            $erro = "Preencha todos os campos corretamente.";
            $receitas = (new ReceitaDAO())->listarPorPessoa($pessoaId);
            $categoriaDAO = new CategoriaDAO();
            $categorias = $categoriaDAO->listar();
            $editarReceita = (new ReceitaDAO())->buscarPorId($id);
            require "Views/receita/index.php";
            return;
        }

        $receitaDAO = new ReceitaDAO();
        if ($receitaDAO->atualizar($id, $descricao, $valor, $data, $categoriaId, $status)) {
            header("Location: index.php?controle=ReceitaController&metodo=index");
            exit;
        } else {
            $erro = "Erro ao atualizar receita.";
            $receitas = (new ReceitaDAO())->listarPorPessoa($pessoaId);
            $categoriaDAO = new CategoriaDAO();
            $categorias = $categoriaDAO->listar();
            $editarReceita = (new ReceitaDAO())->buscarPorId($id);
            require "Views/receita/index.php";
        }
    }

    public function deletar()
    {
        $this->verificarAuth();
        $id = intval($_GET["id"] ?? 0);
        $receitaDAO = new ReceitaDAO();
        if ($receitaDAO->deletar($id)) {
            $_SESSION["mensagem_sucesso"] = "Receita excluida com sucesso!";
        } else {
            $_SESSION["mensagem_erro"] = "Erro ao excluir receita.";
        }
        header("Location: index.php?controle=ReceitaController&metodo=index");
        exit;
    }

    public function criar()
    {
        $this->verificarAuth();
        $pessoaId = $_SESSION["id_pessoa"];
        $descricao = trim($_POST["descricao"] ?? "");
        $valor = floatval($_POST["valor"] ?? 0);
        $data = $_POST["data"] ?? date("Y-m-d");
        $categoriaId = intval($_POST["categoria_id"] ?? 0);
        $status = $_POST["status"] ?? "Recebido";

        if (empty($descricao) || $valor <= 0 || $categoriaId <= 0) {
            $erro = "Preencha todos os campos corretamente.";
            $receitaDAO = new ReceitaDAO();
            $receitas = $receitaDAO->listarPorPessoa($pessoaId);
            $categoriaDAO = new CategoriaDAO();
            $categorias = $categoriaDAO->listar();
            require "Views/receita/index.php";
            return;
        }

        $receitaDAO = new ReceitaDAO();
        if ($receitaDAO->inserir($pessoaId, $descricao, $valor, $data, $categoriaId, $status)) {
            header("Location: index.php?controle=ReceitaController&metodo=index");
            exit;
        } else {
            $erro = "Erro ao cadastrar receita.";
            $receitas = $receitaDAO->listarPorPessoa($pessoaId);
            $categoriaDAO = new CategoriaDAO();
            $categorias = $categoriaDAO->listar();
            require "Views/receita/index.php";
        }
    }
}
?>
