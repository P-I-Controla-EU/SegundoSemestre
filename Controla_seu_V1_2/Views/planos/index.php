<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gerenciar Assinatura - Controla$EU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
<?php require_once "Views/header_logado.php"; ?>

<main>
  <section class="security-section section-padding" style="min-height: calc(100vh - 4rem);">
    <div class="container">
      <?php if (isset($_SESSION["mensagem_sucesso"])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= $_SESSION["mensagem_sucesso"]; unset($_SESSION["mensagem_sucesso"]); ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      <?php endif; ?>
      <?php if (isset($_SESSION["mensagem_erro"])): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?= $_SESSION["mensagem_erro"]; unset($_SESSION["mensagem_erro"]); ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      <?php endif; ?>

      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <h1 class="mb-1 text-white">Gerenciar Assinatura</h1>
          <p class="text-white-70 mb-0">Escolha o plano ideal para suas necessidades. Cancele quando quiser.</p>
        </div>
      </div>

      <div class="row g-4 mt-4">
        <div class="col-lg-4 col-md-6">
          <div class="plan-card security-card">
            <h3 class="plan-title text-white">Starter</h3>
            <p class="plan-desc security-card-desc">Para começar a organizar sua vida financeira.</p>
            <div class="plan-price-wrapper">
              <span class="plan-price text-white">R$ 35</span>
              <span class="plan-period text-white-70">/mês</span>
            </div>
            <ul class="plan-features text-white">
              <li><i data-lucide="x" class="icon-sm" color="#fc1c03"></i><span>Sem integrações bancárias</span></li>
              <li><i data-lucide="check" class="icon-sm color-success"></i><span>Controle manual de contas e cartões</span></li>
              <li><i data-lucide="check" class="icon-sm color-success"></i><span>Criação de categorias personalizadas</span></li>
              <li><i data-lucide="check" class="icon-sm color-success"></i><span>Notificações de contas a pagar</span></li>
            </ul>
            <a href="#" class="btn btn-white plan-btn">Plano Atual <i data-lucide="check" class="icon-sm"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="plan-card plan-featured gradient-primary shadow-glow scale-up">
            <span class="plan-badge">MAIS POPULAR</span>
            <h3 class="plan-title text-white">Plus</h3>
            <p class="plan-desc text-white-80">Para quem quer ir além e bater metas maiores.</p>
            <div class="plan-price-wrapper">
              <span class="plan-price text-white">R$ 45</span>
              <span class="plan-period text-white-70">/mês</span>
            </div>
            <ul class="plan-features text-white">
              <li><i data-lucide="check" class="icon-sm text-white"></i><span>Tudo do Starter</span></li>
              <li><i data-lucide="check" class="icon-sm text-white"></i><span>Até 3 contas integradas</span></li>
              <li><i data-lucide="check" class="icon-sm text-white"></i><span>Relatórios avançados de transações</span></li>
              <li><i data-lucide="check" class="icon-sm text-white"></i><span>Integrações bancárias</span></li>
              <li><i data-lucide="check" class="icon-sm text-white"></i><span>Conexões com contas <strong>Pessoa Física</strong></span></li>
            </ul>
            <a href="#" class="btn btn-white plan-btn">Fazer Upgrade <i data-lucide="arrow-right" class="icon-sm"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mx-auto">
          <div class="plan-card security-card">
            <h3 class="plan-title text-white">Pro</h3>
            <p class="plan-desc security-card-desc">Para freelas, MEIs e pequenas empresas.</p>
            <div class="plan-price-wrapper">
              <span class="plan-price text-white">R$ 65</span>
              <span class="plan-period text-white-70">/mês</span>
            </div>
            <ul class="plan-features text-white">
              <li><i data-lucide="check" class="icon-sm color-success"></i><span>Tudo do Starter</span></li>
              <li><i data-lucide="check" class="icon-sm color-success"></i><span>Tudo do Plus</span></li>
              <li><i data-lucide="check" class="icon-sm color-success"></i><span>Múltiplas contas integradas</span></li>
              <li><i data-lucide="check" class="icon-sm color-success"></i><span>Conexões com contas <strong>Pessoa Física</strong> e <strong>Pessoa Jurídica</strong></span></li>
            </ul>
            <a href="#" class="btn btn-white plan-btn">Fazer Upgrade <i data-lucide="arrow-right" class="icon-sm"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
<script>
  lucide.createIcons();
</script>
</body>
</html>
