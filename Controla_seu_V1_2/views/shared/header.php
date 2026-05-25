<?php $pageTitle = $title ?? 'Controla Seu'; ?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle) ?> - Controla Seu</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/app.js" defer></script>
</head>
<body>
    <header class="topbar">
        <nav>
            <a href="/">Dashboard</a>
            <a href="/receita">Receitas</a>
            <a href="/despesa">Despesas</a>
            <a href="/categoria">Categorias</a>
            <a href="/planos">Planos</a>
            <a href="/usuario/perfil">Perfil</a>
        </nav>
    </header>
    <main class="container">
