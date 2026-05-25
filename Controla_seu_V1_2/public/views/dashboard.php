<?php

$saldo = $saldo ?? 0;
$receitas = $receitas ?? 0;
$despesas = $despesas ?? 0;

?>

<section class="panel">
    <h1>Dashboard</h1>
    <p class="muted">Resumo financeiro do usuario.</p>

    <div class="grid">
        <article class="metric">
            <span>Saldo</span>
            <strong>R$ <?= number_format((float) $saldo, 2, ',', '.') ?></strong>
        </article>
        <article class="metric">
            <span>Receitas</span>
            <strong>R$ <?= number_format((float) $receitas, 2, ',', '.') ?></strong>
        </article>
        <article class="metric">
            <span>Despesas</span>
            <strong>R$ <?= number_format((float) $despesas, 2, ',', '.') ?></strong>
        </article>
    </div>
</section>
