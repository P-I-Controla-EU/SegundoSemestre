<?php
class InicioController
{
    public function inicio()
    {
        require_once "Views/index.php";
    }

    public function comoFunciona()
    {
        require_once "Views/como_funciona.php";
    }

    public function contato()
    {
        require_once "Views/contato.php";
    }

    public function quemSomos()
    {
        require_once "Views/quem-somos.php";
    }

    public function planos()
    {
        require_once "Views/planos.php";
    }

    public function recursos()
    {
        require_once "Views/recursos.php";
    }
}
?>
