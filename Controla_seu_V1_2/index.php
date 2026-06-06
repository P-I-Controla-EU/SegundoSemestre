<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$controle = $_GET["controle"] ?? "InicioController";
$metodo = $_GET["metodo"] ?? "inicio";
require_once "Controllers/{$controle}.class.php";
$obj = new $controle();
$obj->$metodo();
?>
