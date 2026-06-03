<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Controla$EU</title>
    <meta name="description" content="Controle receitas, despesas, orçamentos e metas em um só lugar. O app de finanças pensado para a nova geração." />
    <meta property="og:title" content="Controla$EU — Sua vida financeira sob controle" />
    <meta property="og:description" content="Organize seu dinheiro, bata metas e construa o seu futuro com o Controla$EU." />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/favicon_io/favicon.ico">
    <!-- Import Font (Sora/Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Custom CSS (Vanilla, No Tailwind) -->
    <link rel="stylesheet" href="styles.css" />

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<?php
require_once "header_login.php";
?>
<div class="row g-4 mt-4">
    <div class="col-md-6 col-lg-4">
        <div class="feature-card fade-up">
            <div class="icon-box gradient-primary shadow-glow">
                <i data-lucide="wallet" class="icon-md"></i>
            </div>
            <h3 class="card-title">Receitas & Despesas</h3>
            <p class="card-desc">Registre tudo em segundos com categorias personalizadas e relatórios automáticos.</p>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="feature-card fade-up" style="transition-delay: 0.05s;">
            <div class="icon-box gradient-primary shadow-glow">
                <i data-lucide="pie-chart" class="icon-md"></i>
            </div>
            <h3 class="card-title">Orçamento mensal</h3>
            <p class="card-desc">Defina seu limite por categoria e veja como você gasta seu dinheiro.</p>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="feature-card fade-up" style="transition-delay: 0.10s;">
            <div class="icon-box gradient-primary shadow-glow">
                <i data-lucide="target" class="icon-md"></i>
            </div>
            <h3 class="card-title">Metas inteligentes</h3>
            <p class="card-desc">Crie metas de economia ou investimento e acompanhe o progresso em tempo real.</p>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="feature-card fade-up" style="transition-delay: 0.15s;">
            <div class="icon-box gradient-primary shadow-glow">
                <i data-lucide="bell" class="icon-md"></i>
            </div>
            <h3 class="card-title">Notificações úteis</h3>
            <p class="card-desc">Avisos de contas a pagar, metas atingidas e orçamento estourado.</p>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="feature-card fade-up" style="transition-delay: 0.20s;">
            <div class="icon-box gradient-primary shadow-glow">
                <i data-lucide="line-chart" class="icon-md"></i>
            </div>
            <h3 class="card-title">Saldo por período</h3>
            <p class="card-desc">Veja seu saldo positivo ou negativo em qualquer intervalo de datas.</p>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="feature-card fade-up" style="transition-delay: 0.25s;">
            <div class="icon-box gradient-primary shadow-glow">
                <i data-lucide="shield-check" class="icon-md"></i>
            </div>
            <h3 class="card-title">Segurança 2FA</h3>
            <p class="card-desc">Autenticação de dois fatores e criptografia ponta a ponta dos seus dados.</p>
        </div>
    </div>
</div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
