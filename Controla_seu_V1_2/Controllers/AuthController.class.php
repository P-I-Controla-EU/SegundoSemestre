<?php
require_once "Models/Conexao.class.php";
require_once "Models/Usuario.class.php";
require_once "Models/UsuarioDAO.class.php";

class AuthController
{
    public function login()
    {
        if (isset($_SESSION["id_pessoa"])) {
            header("Location: index.php?controle=DashboardController&metodo=index");
            exit;
        }
        require "Views/login.php";
    }

    public function verificarLogin()
    {
        $email = trim($_POST["email"] ?? "");
        $senha = $_POST["senha"] ?? "";

        if (empty($email) || empty($senha)) {
            $erro = "Preencha todos os campos.";
            require "Views/login.php";
            return;
        }

        $usuarioDAO = new UsuarioDAO();
        $resultados = $usuarioDAO->buscarPorEmail($email);

        if (count($resultados) == 0) {
            $erro = "E-mail ou senha incorretos.";
            require "Views/login.php";
            return;
        }

        $user = $resultados[0];

        if (!password_verify($senha, $user->senha)) {
            $erro = "E-mail ou senha incorretos.";
            require "Views/login.php";
            return;
        }

        $_SESSION["id_pessoa"] = $user->id_pessoa;
        $_SESSION["nome"] = $user->nome;
        $_SESSION["email"] = $user->email;

        header("Location: index.php?controle=DashboardController&metodo=index");
        exit;
    }

    public function cadastro()
    {
        if (isset($_SESSION["id_pessoa"])) {
            header("Location: index.php?controle=DashboardController&metodo=index");
            exit;
        }
        require "Views/cadastro.php";
    }

    public function cadastrar()
    {
        $nome = trim($_POST["nome"] ?? "");
        $cpf = trim($_POST["cpf"] ?? "");
        $data_nascimento = $_POST["data_nascimento"] ?? "";
        $email = trim($_POST["email"] ?? "");
        $telefone = trim($_POST["telefone"] ?? "");
        $senha = $_POST["senha"] ?? "";
        $confirmar_senha = $_POST["confirmar_senha"] ?? "";

        if (empty($nome) || empty($cpf) || empty($data_nascimento) || empty($email) || empty($telefone) || empty($senha)) {
            $erro = "Preencha todos os campos obrigatorios.";
            require "Views/cadastro.php";
            return;
        }

        if ($senha !== $confirmar_senha) {
            $erro = "As senhas nao conferem.";
            require "Views/cadastro.php";
            return;
        }

        if (strlen($senha) < 6) {
            $erro = "A senha deve ter no minimo 6 caracteres.";
            require "Views/cadastro.php";
            return;
        }

        $usuarioDAO = new UsuarioDAO();
        $existentes = $usuarioDAO->buscarPorEmail($email);

        if (count($existentes) > 0) {
            $erro = "Este e-mail ja esta cadastrado.";
            require "Views/cadastro.php";
            return;
        }

        $usuario = new Usuario(0, $nome, $cpf, $data_nascimento, $email, $telefone, password_hash($senha, PASSWORD_DEFAULT));
        $resultado = $usuarioDAO->cadastrar($usuario);

        if (is_numeric($resultado)) {
            $_SESSION["id_pessoa"] = $resultado;
            $_SESSION["nome"] = $nome;
            $_SESSION["email"] = $email;
            header("Location: index.php?controle=DashboardController&metodo=index");
            exit;
        } else {
            $erro = $resultado;
            require "Views/cadastro.php";
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location: index.php?controle=InicioController&metodo=inicio");
        exit;
    }
}
?>
