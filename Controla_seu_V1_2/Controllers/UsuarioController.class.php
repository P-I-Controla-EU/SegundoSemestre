<?php
require_once "Models/Conexao.class.php";

class UsuarioController
{
    private function verificarAuth()
    {
        if (!isset($_SESSION["id_pessoa"])) {
            header("Location: index.php?controle=AuthController&metodo=login");
            exit;
        }
    }

    public function perfil()
    {
        $this->verificarAuth();
        require_once "Views/usuario/perfil.php";
    }
}
?>
