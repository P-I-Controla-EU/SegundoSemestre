<?php
require_once "Models/Conexao.class.php";
require_once "Models/Despesa.class.php";
require_once "Models/DespesaDAO.class.php";
require_once "Models/CategoriaDAO.class.php";

class DespesaController
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
        $despesaDAO = new DespesaDAO();
        $despesas = $despesaDAO->listarPorPessoa($pessoaId);
        $categoriaDAO = new CategoriaDAO();
        $categorias = $categoriaDAO->listar();
        require "Views/despesa/index.php";
    }

    public function editar()
    {
        $this->verificarAuth();
        $pessoaId = $_SESSION["id_pessoa"];
        $id = intval($_GET["id"] ?? 0);

        $despesaDAO = new DespesaDAO();
        $despesa = $despesaDAO->buscarPorId($id);
        if (!$despesa || $despesa->pessoa_id != $pessoaId) {
            header("Location: index.php?controle=DespesaController&metodo=index");
            exit;
        }

        $despesas = (new DespesaDAO())->listarPorPessoa($pessoaId);
        $categoriaDAO = new CategoriaDAO();
        $categorias = $categoriaDAO->listar();
        $editarDespesa = $despesa;
        require "Views/despesa/index.php";
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
        $status = $_POST["status"] ?? "Pendente";

        if (empty($descricao) || $valor <= 0 || $categoriaId <= 0) {
            $erro = "Preencha todos os campos corretamente.";
            $despesas = (new DespesaDAO())->listarPorPessoa($pessoaId);
            $categoriaDAO = new CategoriaDAO();
            $categorias = $categoriaDAO->listar();
            $editarDespesa = (new DespesaDAO())->buscarPorId($id);
            require "Views/despesa/index.php";
            return;
        }

        $despesaDAO = new DespesaDAO();
        if ($despesaDAO->atualizar($id, $descricao, $valor, $data, $categoriaId, $status)) {
            header("Location: index.php?controle=DespesaController&metodo=index");
            exit;
        } else {
            $erro = "Erro ao atualizar despesa.";
            $despesas = (new DespesaDAO())->listarPorPessoa($pessoaId);
            $categoriaDAO = new CategoriaDAO();
            $categorias = $categoriaDAO->listar();
            $editarDespesa = (new DespesaDAO())->buscarPorId($id);
            require "Views/despesa/index.php";
        }
    }

    public function deletar()
    {
        $this->verificarAuth();
        $id = intval($_GET["id"] ?? 0);
        $despesaDAO = new DespesaDAO();
        if ($despesaDAO->deletar($id)) {
            $_SESSION["mensagem_sucesso"] = "Despesa excluida com sucesso!";
        } else {
            $_SESSION["mensagem_erro"] = "Erro ao excluir despesa.";
        }
        header("Location: index.php?controle=DespesaController&metodo=index");
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
        $status = $_POST["status"] ?? "Pendente";

        if (empty($descricao) || $valor <= 0 || $categoriaId <= 0) {
            $erro = "Preencha todos os campos corretamente.";
            $despesaDAO = new DespesaDAO();
            $despesas = $despesaDAO->listarPorPessoa($pessoaId);
            $categoriaDAO = new CategoriaDAO();
            $categorias = $categoriaDAO->listar();
            require "Views/despesa/index.php";
            return;
        }

        $despesaDAO = new DespesaDAO();
        if ($despesaDAO->inserir($pessoaId, $descricao, $valor, $data, $categoriaId, $status)) {
            header("Location: index.php?controle=DespesaController&metodo=index");
            exit;
        } else {
            $erro = "Erro ao cadastrar despesa.";
            $despesas = $despesaDAO->listarPorPessoa($pessoaId);
            $categoriaDAO = new CategoriaDAO();
            $categorias = $categoriaDAO->listar();
            require "Views/despesa/index.php";
        }
    }
}
?>
